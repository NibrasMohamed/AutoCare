<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Repositories\AppointmentRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Appointment;
use App\Models\Customer;
use App\Models\Repair;
use App\Models\RepairDetail;
use App\Models\RepairImage;
use App\Models\Repairs;
use App\Models\RepairType;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Flash;
use Response;

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

    public function makeAppointment(Request $request)
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
            $path = $image->storeAs('images/repair_images', $filename);
        } else {
            $url = null;
        }
        
        $repair_image = RepairImage::create([
            'repair_id' => $repair->id, 
            'path' => $path, 
        ]);
        

        foreach ($request->selected_repair_types as $key => $repair_type) {
          $detail = RepairType::find($repair_type);
           $repair_detail = RepairDetail::create([
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
}
