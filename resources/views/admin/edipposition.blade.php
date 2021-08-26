@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">Update position</a>
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Edit position</h5>
          </div>
          <div class="card-body">
            @if(Session::has('msg'))
            <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif
            <form method="POST" action="{{route('updateposition', $designations->id)}}">
                @csrf
              <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>designations</label>
                    <input type="text" class="form-control" name="position_name" placeholder="position_name" value="{{$designations->position_name }}">
                  </div>
                </div>
                <div class="col-md-3 px-md-1">
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" @if($designations->status == 1) selected @endif>Active</option>
                        <option value="0" @if($designations->status == 0) selected @endif>Inactive</option>
                    </select>
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
