<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $appointment->customer_id }}</p>
</div>

<!-- Vehicle Id Field -->
<div class="form-group">
    {!! Form::label('vehicle_id', 'Vehicle Id:') !!}
    <p>{{ $appointment->vehicle_id }}</p>
</div>

<!-- Appointment Date Field -->
<div class="form-group">
    {!! Form::label('appointment_date', 'Appointment Date:') !!}
    <p>{{ $appointment->appointment_date }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $appointment->status }}</p>
</div>

