<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        {{-- <th>Password</th> --}}
        {{-- <th>Address</th> --}}
        <th>Phone Number</th>
        <th>Role</th>
        {{-- <th>Remember Token</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                       <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            {{-- <td>{{ $employee->password }}</td> --}}
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->phone_number }}</td>
            {{-- <td>{{ $employee->role }}</td> --}}
            {{-- <td>{{ $employee->remember_token }}</td> --}}
                       <td class=" text-center">
                           {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('employees.show', [$employee->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('employees.edit', [$employee->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
