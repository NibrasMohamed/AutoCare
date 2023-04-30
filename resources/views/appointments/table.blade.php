<div class="table-responsive">
    <table class="table" id="appointments-table">
        <thead>
            <tr>
                <th>Customer Id</th>
        <th>Vehicle Id</th>
        <th>Appointment Date</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                       <td>{{ $appointment->customer_id }}</td>
            <td>{{ $appointment->vehicle_id }}</td>
            <td>{{ $appointment->appointment_date }}</td>
            <td>{{ $appointment->status }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('appointments.show', [$appointment->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('appointments.edit', [$appointment->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
