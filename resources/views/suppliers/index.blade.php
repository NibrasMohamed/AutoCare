@extends('layouts.app')
@section('title')
    Suppliers 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Suppliers</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('suppliers.create')}}" class="btn btn-primary form-btn">Supplier <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('suppliers.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

