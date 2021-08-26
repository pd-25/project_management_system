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
            <h5 class="title">Delete Project Type</h5>
          </div>
          <div class="card-body">
            @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <form method="POST" action="{{route('projecttypedestroy', $project_type->id)}}">
                @csrf
              <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Project Type</label>
                    <input type="text" class="form-control" name="project_name" placeholder="Project Type" value="{{$project_type->project_name}}">
                  </div>
                </div>
                <div class="col-md-3 px-md-1">
                  <div class="form-group">
                    <!--<label>Status</label>$_REQUEST-->
                   <!-- <select name="status" id="" class="form-control">-->
                        <!--<option value="1" @if($project_type->status == 1) selected @endif>Active</option>
                        <option value="0" @if($project_type->status == 0) selected @endif>Inactive</option>-->
                    </select>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <!--<button type="submit" class="btn btn-fill btn-primary"></button>-->
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </div>

  @endsection
