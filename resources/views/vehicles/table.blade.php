<div class="table-responsive">
    <table class="table" id="vehicles-table">
        <thead>
            <tr>
                <th>Model</th>
        <th>Type</th>
        <th>Manufacturer Id</th>
        <th>Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                       <td>{{ $vehicle->model }}</td>
            <td>{{ $vehicle->type }}</td>
            <td>{{ $vehicle->manufacturer_id }}</td>
            <td>{{ $vehicle->year }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['vehicles.destroy', $vehicle->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('vehicles.show', [$vehicle->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('vehicles.edit', [$vehicle->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
