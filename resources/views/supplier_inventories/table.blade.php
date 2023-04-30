<div class="table-responsive">
    <table class="table" id="supplierInventories-table">
        <thead>
            <tr>
                <th>Quantity On Hand</th>
        <th>Price</th>
        <th>Supplier Id</th>
        <th>Spare Part Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($supplierInventories as $supplierInventory)
            <tr>
                       <td>{{ $supplierInventory->quantity_on_hand }}</td>
            <td>{{ $supplierInventory->price }}</td>
            <td>{{ $supplierInventory->supplier_id }}</td>
            <td>{{ $supplierInventory->spare_part_id }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['supplierInventories.destroy', $supplierInventory->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('supplierInventories.show', [$supplierInventory->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('supplierInventories.edit', [$supplierInventory->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
