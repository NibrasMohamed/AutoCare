<!-- Appointment Id Field -->
<div class="form-group">
    {!! Form::label('appointment_id', 'Appointment Id:') !!}
    <p>{{ $repairs->appointment_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $repairs->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $repairs->description }}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    <p>{{ $repairs->cost }}</p>
</div>

