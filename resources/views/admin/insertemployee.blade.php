@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">insert emp</a>
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">insert new emp</h5>
          </div>
          <div class="card-body">
            
            <form method="POST" action="{{route('createemployee')}}">
                @csrf
              <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>emp name</label>
                    <input type="text" class="form-control" name="name" placeholder="employee" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>email</label>
                    <input type="text" class="form-control" name="email" placeholder="employee" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>password</label>
                    <input type="text" class="form-control" name="password" placeholder="employee" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Select Department</label>
                    <select name="dep_id" class="form-control">
                      @foreach($departments as $d)
                        <option value="{{$d->id}}">{{$d->department_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Designation</label>
                    <select name="designation" class="form-control">
                      @foreach($designation as $d)
                        <option value="{{$d->id}}">{{$d->position_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>DOB</label>
                    <input type="date" class="form-control" name="dob" placeholder="dob" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>DOJ</label>
                    <input type="date" class="form-control" name="doj" placeholder="doj" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>adress</label>
                    <input type="text" class="form-control" name="address" placeholder="address" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Aadhar card</label>
                    <input type="number" class="form-control" name="aadhar_num" placeholder="aadhar_num" >
                  </div>
                </div>
                
                <div class="col-md-3 px-md-1">
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" >Active</option>
                        <option value="0">Inactive</option>
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
