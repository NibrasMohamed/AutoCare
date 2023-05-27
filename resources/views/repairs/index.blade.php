@extends('layouts.app')
@section('title')
    Repairs 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Repairs</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('repairs.create')}}" class="btn btn-primary form-btn">Repairs <i class="fas fa-plus"></i></a>
                <a style="margin-left: 15px;" href="/repair/generate-pdf" class="btn btn-primary form-btn">Generate PDF <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('repairs.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

