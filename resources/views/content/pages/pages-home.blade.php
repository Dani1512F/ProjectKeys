@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<div class="row">
    <div class="col-xl-4 ">
      <div class="card">
        <div class="card-body text-center">
          <div class="avatar avatar-md mx-auto mb-3">
            <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-cube fs-3"></i></span>
          </div>
          <span class="d-block mb-1 text-nowrap">Sistemas operativos</span>
          <h2 class="mb-0">{{ $n_sos }}</h2>
        </div>
      </div>
    </div>
    <div class="col-xl-4">
      <div class="card">
        <div class="card-body text-center">
          <div class="avatar avatar-md mx-auto mb-3">
            <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-purchase-tag fs-3"></i></span>
          </div>
          <span class="d-block mb-1 text-nowrap">Usuarios</span>
          <h2 class="mb-0">{{ $n_user }}</h2>
        </div>
      </div>
    </div>
    <div class="col-xl-4">
      <div class="card">
        <div class="card-body text-center">
          <div class="avatar avatar-md mx-auto mb-3">
            <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-cart fs-3"></i></span>
          </div>
  
          <span class="d-block mb-1 text-nowrap">Llaves activas</span>
          <h2 class="mb-0">{{ $n_types }}</h2>
        </div>
      </div>
    </div>
  </div>

@endsection
