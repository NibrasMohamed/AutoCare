<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use DB;
use App\Models\Repair;
use App\Models\Repairs;
use App\Models\Vehicle;
use App\Models\Customer;
use App\Models\RepairType;
use App\Models\Appointment;
use App\Models\RepairImage;
use App\Models\RepairDetail;
use Illuminate\Http\Request;
use App\Models\AppointmentActivity;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AppointmentRepository;
use App\Http\Requests\MakeAppointmentRequest;
use App\Http\Requests\CreateAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;

class AppointmentController extends AppBaseController
{
    /** @var AppointmentRepository $appointmentRepository*/
    private $appointmentRepository;

    public function __construct(AppointmentRepository $appointmentRepo)
    {
        $this->appointmentRepository = $appointmentRepo;
    }

    /**
     * Display a listing of the Appointment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $appointments = $this->appointmentRepository->all();

        return view('appointments.index')
            ->with('appointments', $appointments);
    }

    /**
     * Show the form for creating a new Appointment.
     *
     * @return Response
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created Appointment in storage.
     *
     * @param CreateAppointmentRequest $request
     *
     * @return Response
     */
    public function store(CreateAppointmentRequest $request)
    {
        $input = $request->all();

        $appointment = $this->appointmentRepository->create($input);

        Flash::success('Appointment saved successfully.');

        return redirect(route('appointments.index'));
    }

    /**
     * Display the specified Appointment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $appointment = $this->appointmentRepository->find($id);

        if (empty($appointment)) {
            Flash::error('Appointment not found');

            return redirect(route('appointments.index'));
        }

        return view('appointments.show')->with('appointment', $appointment);
    }

    /**
     * Show the form for editing the specified Appointment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $appointment = $this->appointmentRepository->find($id);

        if (empty($appointment)) {
            Flash::error('Appointment not found');

            return redirect(route('appointments.index'));
        }

        return view('appointments.edit')->with('appointment', $appointment);
    }

    /**
     * Update the specified Appointment in storage.
     *
     * @param int $id
     * @param UpdateAppointmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAppointmentRequest $request)
    {
        $appointment = $this->appointmentRepository->find($id);

        if (empty($appointment)) {
            Flash::error('Appointment not found');

            return redirect(route('appointments.index'));
        }

        $appointment = $this->appointmentRepository->update($request->all(), $id);

        Flash::success('Appointment updated successfully.');

        return redirect(route('appointments.index'));
    }

    /**
     * Remove the specified Appointment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $appointment = $this->appointmentRepository->find($id);

        if (empty($appointment)) {
            Flash::error('Appointment not found');

            return redirect(route('appointments.index'));
        }

        $this->appointmentRepository->delete($id);

        Flash::success('Appointment deleted successfully.');

        return redirect(route('appointments.index'));
    }

    public function makeAppointment(MakeAppointmentRequest $request)
    {

        // dd($request->toArray());
        $appointment = Appointment::create([
            'customer_id' => $request->customer_id,
            'vehicle_id' => $request->vehicle_id,
            'appointment_date' => $request->appointment_date,
            'status' => $request->status,
        ]);

        $repair = Repairs::create([
            'appointment_id' => $appointment->id,
            'name' => $request->name,
            'description' => $request->description,
            'cost' => $request->cost,
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->store('public/images/repair_images');
            $imageUrl = Storage::url($path);
        } else {
            $imageUrl = null;
        }
        
        $repair_image = RepairImage::create([
            'repair_id' => $repair->id, 
            'path' => $imageUrl, 
        ]);
        

        foreach ($request->selected_repair_types as $key => $repair_type) {
          $detail = RepairType::find($repair_type);
           $repair_detail = RepairDetail::create([
                'repair_id' => $repair->id, 
                'repair_type_id' => $detail['id'], 
                'name' => $detail['name'], 
                'estimated_cost' => 500
           ]);
        }

        return redirect('/home-page')->with('success', 'Appontment Successfully Created');
    }

    public function getAppointment(Request $request)
    {
        // $customers = Customer::get
        $vehicles = Vehicle::get();
        $repair_types = RepairType::get();
        return view('pages.appointment', compact('vehicles', 'repair_types'));
    }

    public function getAppointmentDetails(Request $request){


        $project = Appointment::join('customers', 'customers.id', '=', 'customer_id')
                                    ->join('vehicles', 'vehicles.id', '=', 'vehicle_id')
                                    ->join('manufacturers', 'manufacturers.id', '=', 'manufacturer_id')
                                    ->select('appointments.*', 'manufacturers.name as make', 'vehicles.model', 'vehicles.type', 'vehicles.year', 'customers.name as customer_name')
                                    ->where('appointments.id', '=', $request->id)
                                    ->first();

        $project_activities = AppointmentActivity::join('users', 'users.id', '=' , 'appointment_activity.user_id')
                                            ->where('appointment_activity.project_id', '=', $project->id)
                                            ->select('appointment_activity.*', 'users.name as user_name', DB::raw("DATE_FORMAT(appointment_activity.created_at, '%d %b %Y') as formatted_created_at"))
                                            ->orderBy('appointment_activity.created_at', 'DESC')
                                            ->get();

        $project_activities = $project_activities->mapToGroups(function ($item, $key) {
            return [$item['formatted_created_at'] => $item];
        });

        return view('appointments.detail', ['project' =>$project, 'project_activities' => $project_activities]);
    }

    public function updateStatus(Request $request)
    {
       
        $project = Appointment::find($request->id);

        if($request->type == 'percentage'){
            $project->percentage = $request->input('value');
        }
        else{
            $project->status = $request->input('value');
        }
           
        $project->save();

        return response()->json(true);
        
    }

    public function getAppointmentActivities(Request $request, $project_id){
        $project = Appointment::find($project_id);

        $project_activities = AppointmentActivity::join('users', 'users.id', '=' , 'project_activity.user_id')
                                            ->where('project_activity.project_id', '=', $project->id)
                                            ->select('project_activity.*', 'users.name as user_name', DB::raw("DATE_FORMAT(project_activity.created_at, '%d %b %Y') as formatted_created_at"))
                                            ->orderBy('project_activity.created_at', 'DESC')
                                            ->get();

        $project_activities = $project_activities->mapToGroups(function ($item, $key) {
            return [$item['formatted_created_at'] => $item];
        });

        if(isset($request->_t) && $request->_t == 1){
            $read_only = false;
        }
        else{
            $read_only = true;
        }

                                                
        return view('appointments.status', compact('project', 'project_activities', 'read_only'));
    }

    public function createAppointmentDetails(Request $request){
        $project_id = $request->project_id;
        return view('appointments.status-create', compact('project_id'));
    }

    public function storeAppointmentDetails(Request $request){


        $project_activity = AppointmentActivity::create([
            'project_id' => $request->project_id,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
        ]);

        foreach($request->image_file as $image){

            $filename = auth()->user()->name . uniqid();
            $extension = $image->extension();
            $image->storeAs('/public/project_acticivity_images/'.$project_activity->id.'/', $filename . "." . $extension);
            $path = '/public/project_acticivity_images/'.$project_activity->id.'/'.$filename . "." . $extension;

            $project_activity->image_url = $path;
            $project_activity->save();
        }

        return redirect('/appointment/details/get/'.$request->project_id.'?_t=1');

    }

    public function getImageByFileMaster(Request $request)
    {
        $activity = AppointmentActivity::find($request->id);

        $file_path = $activity->image_url;

        if (! Storage::exists($file_path)) {
            abort(404);
        }

    
        $file = Storage::get($file_path);
        $type = Storage::mimeType($file_path);

        $response = Response::make($file, 200);
        $response->header('Content-Type', $type);

        return $response;
    }
}
