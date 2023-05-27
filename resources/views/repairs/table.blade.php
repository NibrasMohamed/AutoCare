<div class="table-responsive">
    <table class="table" id="repairs-table">
        <thead>
            <tr>
                <th>Appointment Id</th>
                <th>Created Date</th>
                <th>Name</th>
                <th>Description</th>
                <th>Vehicle</th>
                <th>Cost</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($repairs) --}}
            @foreach ($repairs as $repair)
                <tr>
                    <td>#{{ $repair->appointment_id }}</td>
                    <td>{{ $repair->created_at }}</td>
                    <td>{{ $repair->name }}</td>
                    <td>{{ $repair->description }}</td>
                    <td><img src="{{ url($repair->image) }}" alt="" srcset="" height="200px" width="auto"></td>
                    <td>{{ $repair->cost }}</td>
                    <td class=" text-center">
                        {!! Form::open(['route' => ['repairs.destroy', $repair->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('repairs.show', [$repair->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>
                            <a href="{!! route('repairs.edit', [$repair->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger action-btn delete-btn',
                                'onclick' => 'return confirm("Are you sure want to delete this record ?")',
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
