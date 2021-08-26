@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">insert Project-Department</a>
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">insert new Project-Department</h5>
          </div>
          <div class="card-body">
            
            <form method="POST" action="{{route('create_projectdepertment')}}">
                @csrf
              <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>project_id</label>
                    <select name="project_id" class="form-control">
                        @foreach($project_id as $pi)
                          <option value="{{$pi->id}}">{{$pi->project_name}}</option>
                        @endforeach
                      </select>
                    <!--<input type="text" class="form-control" name="department_name" placeholder="department" >-->
                  </div>
                </div>
                <div class="col-md-3 px-md-1">
                  <div class="form-group">
                    <label>department</label>
                    <select name="department_name" class="form-control">
                        @foreach($department_name as $pi)
                          <option value="{{$pi->id}}">{{$pi->department_name}}</option>
                        @endforeach
                      </select>
                    <!--<input type="text" class="form-control" name="department_name" placeholder="insert correct depertment name" >-->
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
