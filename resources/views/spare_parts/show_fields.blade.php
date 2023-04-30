<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $sparePart->name }}</p>
</div>

<!-- Part Number Field -->
<div class="form-group">
    {!! Form::label('part_number', 'Part Number:') !!}
    <p>{{ $sparePart->part_number }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $sparePart->type }}</p>
</div>

<!-- Vehicle Id Field -->
<div class="form-group">
    {!! Form::label('vehicle_id', 'Vehicle Id:') !!}
    <p>{{ $sparePart->vehicle_id }}</p>
</div>

