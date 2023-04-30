@extends('layouts.app')
@section('title')
    Appointments 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Appointments</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('appointments.create')}}" class="btn btn-primary form-btn">Appointment <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('appointments.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

