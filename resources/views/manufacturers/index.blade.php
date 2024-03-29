@extends('layouts.app')
@section('title')
    Manufacturers 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manufacturers</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('manufacturers.create')}}" class="btn btn-primary form-btn">Manufacturer <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('manufacturers.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

