@extends('layouts.app')
@section('title')
    Inventories 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Inventories</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('inventories.create')}}" class="btn btn-primary form-btn">Inventory <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('inventories.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

