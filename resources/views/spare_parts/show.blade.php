@extends('layouts.app')
@section('title')
    Spare Part Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Spare Part Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('spareParts.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('spare_parts.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
