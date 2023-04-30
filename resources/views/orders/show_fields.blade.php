<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $order->customer_id }}</p>
</div>

<!-- Spare Part Id Field -->
<div class="form-group">
    {!! Form::label('spare_part_id', 'Spare Part Id:') !!}
    <p>{{ $order->spare_part_id }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $order->quantity }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $order->status }}</p>
</div>

