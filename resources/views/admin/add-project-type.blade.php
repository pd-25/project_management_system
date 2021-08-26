@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">user-profile</a>
@endsection

@section('content')

<div class="content">
     <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">ADD Project Type</h5>
          </div>
          <div class="card-body">
            @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <form method="GET" action="{{route('projecttypeadd')}}">
                @csrf
              <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Project Type</label>
                    <input type="text" class="form-control" name="project_name" placeholder="name" >
                  </div>
                </div>
                <div class="col-md-3 px-md-1">
                  <div class="form-group">
                    
                   
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Save</button>
              </div>
            </form>
            
          </div>

        </div>
      </div>

    </div> 
  </div>

  @endsection
