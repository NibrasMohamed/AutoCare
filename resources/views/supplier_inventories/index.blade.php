@extends('layouts.app')
@section('title')
    Supplier Inventories 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Supplier Inventories</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('supplierInventories.create')}}" class="btn btn-primary form-btn">Supplier Inventory <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('supplier_inventories.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

