<div class="table-responsive">
    <table class="table" id="inventories-table">
        <thead>
            <tr>
                <th>Spare Part Id</th>
        <th>Quantity On Hand</th>
        <th>Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inventories as $inventory)
            <tr>
                       <td>{{ $inventory->spare_part_id }}</td>
            <td>{{ $inventory->quantity_on_hand }}</td>
            <td>{{ $inventory->price }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['inventories.destroy', $inventory->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('inventories.show', [$inventory->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('inventories.edit', [$inventory->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
