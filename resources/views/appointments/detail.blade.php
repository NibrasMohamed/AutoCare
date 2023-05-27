@extends('layouts.app')
@section('title')
Create Appointment
@endsection
@section('content')

<link rel="stylesheet" href="/css/app-project.css">

<link rel="stylesheet" href="/css/admin-lte/adminlte.css">

<style>
    .card-title-right-success {
        float: right;
        background: #28a745;
        padding: 10px;
        border-radius: 20px;
        color: white;
        font-weight: 600;
    }

    .card-title-right-warning {
        float: right;
        background: #FFC107;
        padding: 10px;
        border-radius: 20px;
        color: white;
        font-weight: 600;
    }

    .card-title-right-danger {
        float: right;
        background: #dc3545;
        padding: 10px;
        border-radius: 20px;
        color: white;
        font-weight: 600;
    }
</style>

<section class="section">
    <div class="section-header">
        <h1>Appointment Details</h1>
        <div class="section-header-breadcrumb">
            <a href="/appointment/details/create?project_id={{$project->id}}" class="btn btn-primary form-btn">Create Activity <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h2 class="card-title" style="font-size: xx-large;">{{$project->make}} - {{$project->model}}</h2>
                        <div style="margin-left: auto;">
                            @if($project->status == 'approved')
                            <div class="card-title-right-danger">
                                Pending
                            </div>
                            @elseif($project->status == 'in_percentage')
                            <div class="card-title-right-warning">
                                In percentage
                            </div>
                            @elseif($project->status == 'completed')
                            <div class="card-title-right-success">
                                Completed
                            </div>
                            @endif
                        </div>

                    </div> <!-- /.card-body -->
                    <div class="card-body">


                        <div class="row">
                            <div class="col">
                                <ol class="stepper">
                                    <li class="step {{($project->percentage == 0 ? 'current' : '')}} {{($project->percentage > 0 ? 'past' : '')}} {{($project->percentage < 0 ? 'future' : '')}} ">0%</li>
                                    <li class="step {{($project->percentage == 25 ? 'current' : '')}} {{($project->percentage > 25 ? 'past' : '')}} {{($project->percentage < 25 ? 'future' : '')}} ">25%</li>
                                    <li class="step {{($project->percentage == 50 ? 'current' : '')}} {{($project->percentage > 50 ? 'past' : '')}} {{($project->percentage < 50 ? 'future' : '')}} ">50%</li>
                                    <li class="step {{($project->percentage == 75 ? 'current' : '')}} {{($project->percentage > 75 ? 'past' : '')}} {{($project->percentage < 75 ? 'future' : '')}} ">75%</li>
                                    <li class="step {{($project->percentage == 100 ? 'current' : '')}} {{($project->percentage > 100 ? 'past' : '')}} {{($project->percentage < 100 ? 'future' : '')}} ">100%</li>
                                </ol>
                            </div>
                        </div>
                        <hr>


                        <div class="row">

                            <div class="col-md-8">
                                <div>
                                    <strong>Vehicle Type:</strong> {{$project->type}}
                                </div>
                                <div>
                                    <strong>Make:</strong> {{$project->make}}
                                </div>
                                <div>
                                    <strong>Model:</strong> {{$project->model}}
                                </div>
                                <div>
                                    <strong>Description:</strong> {{$project->repair->description}}
                                </div>
                                <div>
                                    <strong>Job Type:</strong> {{$project->repair->name}}
                                    <ul>
                                    @foreach ($project->repair->repairDetail as $repair)
                                        <li>{{$repair->name}}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-4">
                                    <img style="width: 450px; margin-top: 15px; border: solid 1px #ced4da;" src="/appointment/image/{{$project->id}}" alt="">
                                </div>
                            </div>
                        </div>


                        <hr>
                        <div class="row">
                            @if ($project->status == 'in_percentage')
                            <div class="col-md-2">
                                <label for="type">Change Complete Percentage</label>
                                <select class="form-control" id="percentage" name="percentage">
                                    <option {{($project->percentage == '0' ? 'selected' : '')}} value="0">0%</option>
                                    <option {{($project->percentage == '25' ? 'selected' : '')}} value="25">25%</option>
                                    <option {{($project->percentage == '50' ? 'selected' : '')}} value="50">50%</option>
                                    <option {{($project->percentage == '75' ? 'selected' : '')}} value="75">75%</option>
                                    <option {{($project->percentage == '100' ? 'selected' : '')}} value="100">100%</option>
                                </select>
                            </div>
                            @endif

                            <div class="col-md-2">
                                <label for="type">Change Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option {{($project->status == 'approved' ? 'selected' : '')}} value="approved">Pending</option>
                                    <option {{($project->status == 'in_percentage' ? 'selected' : '')}} value="in_percentage">In percentage</option>
                                    <option {{($project->status == 'completed' ? 'selected' : '')}} value="completed">Completed</option>
                                </select>
                            </div>
                        </div>

                    </div><!-- /.card-body -->
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h2 class="card-title" style="font-size: xx-large;">Appointment Activities</h2>
                    </div>

                    <div class="card-body"> <!-- /.card-body -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline">
                                    @foreach ($project_activities as $key => $project_activity)
                                    <!-- timeline time label -->
                                    <div class="time-label">
                                        <span class="bg-red">{{$key}}</span>
                                    </div>
                                    <!-- /.timeline-label -->
                                    @foreach ($project_activities[$key] as $project_activity_inner)
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fa fa-camera bg-purple"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fas fa-clock"></i>{{\Carbon\Carbon::parse($project_activity_inner->created_at)->format('h:i a')}}</span>
                                            <h3 class="timeline-header"><a href="#">{{$project_activity_inner->user_name}}</a> uploaded new photos with some comments</h3>
                                            <div class="timeline-body">
                                                <div>
                                                    {!!$project_activity_inner->description!!}
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="col-md-3">
                                                            <img style="width: 350px; margin-top: 15px; border: solid 1px #ced4da;" src="/appointment/details/get-image/{{$project_activity_inner->id}}" alt="...">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    @endforeach
                                    @endforeach




                                </div>
                            </div>
                        </div>

                    </div><!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

</section>


<div class="custom-container">

</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function updateAppointment(value, type) {
        $.ajax({
            type: "POST",
            data: {
                value: value,
                type: type,
                id: "{{$project->id}}"
            },
            url: "/appointment/update-stats",
            success: function(data) {


                swal.fire({
                    title: 'Update!',
                    text: 'Appointment has been updated.',
                    icon: 'success'
                }).then((result) => {
                    location.reload();
                });
            }
        });
    }

    $(document).ready(function() {

        $(document).on('change', '#percentage', function(e) {
            var value = $('#percentage').val();
            updateAppointment(value, 'percentage');
        });

        $(document).on('change', '#status', function(e) {
            var value = $('#status').val();
            updateAppointment(value, 'status');
        });

    });
</script>
@endsection
