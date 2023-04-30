@extends('layouts.app')
@section('title')
    Supplier Inventory Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Supplier Inventory Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('supplierInventories.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('supplier_inventories.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
