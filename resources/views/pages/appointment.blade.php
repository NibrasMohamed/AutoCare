@extends('layouts.web_layout')

@section('content')
    <style>
        body {
            color: black;
        }
    </style>
    <div class="container">
        <form method="POST" action="/post-appointment" enctype="multipart/form-data">
            @csrf

            {{-- <div class="form-group">
                <label for="customer_id">Customer ID:</label>
                <input type="text" name="customer_id" id="customer_id" class="form-control" required>
            </div>
             --}}
            <input type="text" name="customer_id" id="customer_id" value="{{ auth()->user()->customer->id }}" class="form-control" required>

            <div class="form-group">
                <label for="vehicle_id">Vehicle ID:</label>
                <select name="vehicle_id" id="" class="form-control">
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}"> {{ $vehicle->manufacturer->name . ' ' . $vehicle->model }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="appointment_date">Appointment Date:</label>
                <input type="datetime-local" name="appointment_date" id="appointment_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="pending">Pending</option>
                    <option value="confirmed">Confirmed</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>

            <hr>

            <div class="form-group">
                <label for="name">Repair Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Repair Description:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="cost">Repair Cost:</label>
                <input type="number" name="cost" id="cost" class="form-control" step="0.01" min="0"
                    required>
            </div>

            <div class="form-group">
                <label for="image">Repair Image:</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>

            <hr>

            <div class="form-group">
                <label>Available Repair Types:</label>

                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($repair_types as $repair_type)
                            <tr>
                                <td>
                                    <input type="checkbox" name="selected_repair_types[]" value="{{ $repair_type['id'] }}"
                                        data-name="{{ $repair_type['name'] }}"
                                        data-estimated_cost="{{ $repair_type['estimated_cost'] }}">
                                </td>
                                <td>{{ $repair_type['id'] }}</td>
                                <td>{{ $repair_type['name'] }}</td>
                                <td>{{ $repair_type['description'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="form-group">
                <label>Selected Repair Types:</label>

                <table class="table" id="selected_repair_types_table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Estimated Cost</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <input type="hidden" name="repair_details">
            </div>

            <button type="submit" class="btn btn-primary">Save Appointment</button>
        </form>



    </div>
@endsection

@section('script')
    <script>
        // Update the selected repair types table when a checkbox is clicked
        $('input[name="selected_repair_types[]"]').click(function() {
            var id = $(this).val();
            var name = $(this).data('name');
            var estimated_cost = $(this).data('estimated_cost');
            var isChecked = $(this).prop('checked');

            var rowHtml = `
            <tr data-id="${id}">
                <td>${id}</td>
                <td>${name}</td>
                <td>${estimated_cost}</td>
                <td>
                    <button type="button" class="btn btn-danger remove-button">Remove</button>
                </td>
            </tr>
        `;

            if (isChecked) {
                $('#selected_repair_types_table tbody').append(rowHtml);
            } else {
                $('#selected_repair_types_table tbody tr[data-id="' + id + '"]').remove();
            }
        });

        // Remove a row from the selected repair types table
        $('#selected_repair_types_table').on('click', '.remove-button', function() {
            var id = $(this).closest('tr').data('id');

            $('input[name="selected_repair_types[]"][value="' + id + '"]').prop('checked', false);
            $(this).closest('tr').remove();
        });

        // Serialize the selected repair types table data and add it to the hidden input field
        $('form').submit(function() {
            var repairDetails = [];

            $('#selected_repair_types_table tbody tr').each(function() {
                var id = $(this).data('id');
                var name = $(this).find('td:eq(1)').text();
                var estimatedCost = $(this).find('td:eq(2)').text();

                repairDetails.push({
                    repair_type_id: id,
                    name: name,
                    estimated_cost: estimatedCost
                });
            });

            $('input[name="repair_details"]').val(JSON.stringify(repairDetails));
        });
    </script>
@endsection
