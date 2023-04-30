<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicle Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_id', 'Vehicle Id:') !!}
    {!! Form::number('vehicle_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Appointment Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('appointment_date', 'Appointment Date:') !!}
    {!! Form::text('appointment_date', null, ['class' => 'form-control','id'=>'appointment_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#appointment_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control','maxlength' => 192,'maxlength' => 192]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('appointments.index') }}" class="btn btn-light">Cancel</a>
</div>
