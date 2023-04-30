<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Customer Id</th>
        <th>Spare Part Id</th>
        <th>Quantity</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                       <td>{{ $order->customer_id }}</td>
            <td>{{ $order->spare_part_id }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->status }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('orders.show', [$order->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('orders.edit', [$order->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
