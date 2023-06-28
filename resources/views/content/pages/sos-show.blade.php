@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Actualizar sistema')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Actualizando sistema</h5> 
            </div>
            <div class="card-body">
              <form method="GET" action="{{ route('pages-sos-update') }}">
                @csrf
                <input type="hidden" name="sos_id" value="{{ $sos->id }}">
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Nombre</label>
                  <input type="text" name="name" value="{{ $sos->name }}" class="form-control" id="basic-default-fullname" required/>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Version</label>
                  <input type="text" name="version" value="{{ $sos->version }}" class="form-control" id="basic-default-email" required/>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Descripción</label>
                  <input type="text" name="description" value="{{ $sos->description }}" class="form-control" id="basic-default-email" required/>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection
