<!-- Quantity On Hand Field -->
<div class="form-group">
    {!! Form::label('quantity_on_hand', 'Quantity On Hand:') !!}
    <p>{{ $supplierInventory->quantity_on_hand }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $supplierInventory->price }}</p>
</div>

<!-- Supplier Id Field -->
<div class="form-group">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    <p>{{ $supplierInventory->supplier_id }}</p>
</div>

<!-- Spare Part Id Field -->
<div class="form-group">
    {!! Form::label('spare_part_id', 'Spare Part Id:') !!}
    <p>{{ $supplierInventory->spare_part_id }}</p>
</div>

