<div class="table-responsive">
    <table class="table" id="repairs-table">
        <thead>
            <tr>
                <th>Appointment Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Cost</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($repairs as $repairs)
            <tr>
                       <td>{{ $repairs->appointment_id }}</td>
            <td>{{ $repairs->name }}</td>
            <td>{{ $repairs->description }}</td>
            <td>{{ $repairs->cost }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['repairs.destroy', $repairs->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('repairs.show', [$repairs->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('repairs.edit', [$repairs->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
