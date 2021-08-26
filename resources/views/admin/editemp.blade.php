@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">edit Employee</a>
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Edit employees</h5>
          </div> 
          <div class="card-body">
            @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <form method="POST" action="{{route('updateemp', $employees->id)}}">
                @csrf
              <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Employee name</label>
                    <input type="text" class="form-control" name="emp_name" placeholder="employee" value="{{$employees->name}}">
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>email</label>
                      <input type="text" class="form-control" name="email" placeholder="email" value="{{$employees->email}}">
                    </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>password</label>
                    <input type="text" class="form-control" name="password" placeholder="password" value="{{$employees->password}}">
                  </div>
              </div>

              <div class="col-md-5 pr-md-1">
                <div class="form-group">
                  <label>dep_id</label>
                  <select name="dep_id" class="form-control">
                    @foreach($departments as $d)
                      <option value="{{$d->id}}">{{$d->department_name}}</option>
                    @endforeach
                  </select>
                  <!--<input type="text" class="form-control" name="dep_id" placeholder="dep_id" value="{/{$employees->dep_id}}">-->
                </div>
            </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>designtion</label>
                      <select name="designtion" class="form-control">
                        @foreach($designation as $d)
                          <option value="{{$d->id}}">{{$d->position_name}}</option>
                        @endforeach
                      </select>
                      <!--<input type="text" class="form-control" name="designtion" placeholder="designtion" value="{/{$employees->designtion}}">-->
                    </div>
                </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>dob</label>
                      <input type="date" class="form-control" name="dob" placeholder="dob" value="{{$employees->dob}}">
                    </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>address</label>
                    <input type="text" class="form-control" name="address" placeholder="address" value="{{$employees->address}}">
                  </div>
              </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>doj</label>
                      <input type="date" class="form-control" name="doj" placeholder="doj" value="{{$employees->doj}}">
                    </div>
                </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>aadhar_card</label>
                      <input type="number" class="form-control" name="aadhar_card" placeholder="aadhar_card" value="{{$employees->aadhar_card}}">
                    </div>
                </div>

                <div class="col-md-3 px-md-1">
                  <div class="form-group"> 
                    <label>Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" @if($employees->status == 1) selected @endif>Active</option>
                        <option value="0" @if($employees->status == 0) selected @endif>Inactive</option>
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
