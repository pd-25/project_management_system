@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">project management</a>
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">insert project management</h5>
          </div>  
        </div>
        <div class="card-body">
            
         <form method="POST" action="{{route('create_projectmanagement')}}">
                @csrf
            <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>project Name</label>
                    <input type="text" class="form-control" name="project_Name" placeholder="project Name" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>projecttype id</label>
                    <select name="projecttype_id" class="form-control">
                        @foreach($project_types as $d)
                          <option value="{{$d->id}}">{{$d->project_name}}</option>
                        @endforeach
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>image</label>
                    <input type="text" class="form-control" name="image" placeholder="image" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description" placeholder="description" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>owner name</label>
                    <input type="text" class="form-control" name="owner_name" placeholder="owner name" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>owner phn num</label>
                    <input type="number" class="form-control" name="owner_phn_num" placeholder="owner phn num" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label> owner email</label>
                    <input type="email" class="form-control" name=" owner_email" placeholder=" owner email" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>actual start date</label>
                    <input type="date" class="form-control" name="actual_start_date" placeholder="actual start date" >
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>actual end date</label>
                      <input type="date" class="form-control" name="actual_end_date" placeholder="actual end date" >
                    </div>
                </div>
                
                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>expected_end_date </label>
                      <input type="date" class="form-control" name="expected_end_date" placeholder="expected_end_date" >
                    </div>
                </div>
             </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Save</button>
              </div>
            </div>  
        </div>
         </form>
          </div>

        </div>
      

    </div>
</div>

  @endsection
