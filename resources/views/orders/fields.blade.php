<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer') !!}
    {!! Form::text('customer_id', auth()->user()->name, ['class' => 'form-control', 'disabled' => true]) !!}
    <input type="text" name="customer_id" value="{{ auth()->user()->id }}" hidden>
</div>

<!-- Spare Part Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('spare_part_id', 'Spare Part Id:') !!}
    {!! Form::select('spare_part_id', $options, null, ['class' => 'form-control']) !!}
    
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control','maxlength' => 192,'maxlength' => 192,  'hidden' => true]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('orders.index') }}" class="btn btn-light">Cancel</a>
</div>
