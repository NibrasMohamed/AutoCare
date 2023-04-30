<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 192,'maxlength' => 192]) !!}
</div>

<!-- Part Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('part_number', 'Part Number:') !!}
    {!! Form::text('part_number', null, ['class' => 'form-control','maxlength' => 192,'maxlength' => 192]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicle Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_id', 'Vehicle Id:') !!}
    {!! Form::number('vehicle_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('spareParts.index') }}" class="btn btn-light">Cancel</a>
</div>
