@extends('layouts.app')
@section('title')
    Repair Types 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Repair Types</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('repairTypes.create')}}" class="btn btn-primary form-btn">Repair Type <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('repair_types.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

