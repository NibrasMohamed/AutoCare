<!-- Quantity On Hand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity_on_hand', 'Quantity On Hand:') !!}
    {!! Form::number('quantity_on_hand', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Supplier Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    {!! Form::number('supplier_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Spare Part Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spare_part_id', 'Spare Part Id:') !!}
    {!! Form::number('spare_part_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('supplierInventories.index') }}" class="btn btn-light">Cancel</a>
</div>
