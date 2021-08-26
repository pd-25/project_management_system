
@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')
@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">map</a> 
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header">
            Google Maps
          </div>
          <div class="card-body">
            <div id="map" class="map"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection