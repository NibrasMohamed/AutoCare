<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

<div class="table-responsive">
    <table class="table" id="repairs-table">
        <thead>
            <tr>
                <th>Appointment Id</th>
                <th>Created Date</th>
                <th>Name</th>
                <th>Description</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($repairs as $repair)
                <tr>
                    <td>#{{ $repair->appointment_id }}</td>
                    <td>{{ $repair->created_at }}</td>
                    <td>{{ $repair->name }}</td>
                    <td>{{ $repair->description }}</td>
                    <td>{{ $repair->cost }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
