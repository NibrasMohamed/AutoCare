<div class="table-responsive">
    <table class="table" id="repairTypes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($repairTypes as $repairType)
            <tr>
                       <td>{{ $repairType->name }}</td>
            <td>{{ $repairType->description }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['repairTypes.destroy', $repairType->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('repairTypes.show', [$repairType->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('repairTypes.edit', [$repairType->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
