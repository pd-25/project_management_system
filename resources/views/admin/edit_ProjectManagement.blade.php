@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">edit_ProjectManagement</a>
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">edit_ProjectManagement</h5>
          </div> 
          <div class="card-body">
            @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <form method="POST" action="{{route('update_ProjectManagement', $projectmanagements->id)}}">
                @csrf
            <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>project Name</label>
                    <input type="text" class="form-control" name="project_name" placeholder="project_name" value="{{$projectmanagements->project_name}}">
                  </div>
                </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>project_type_id</label>
                      <select name="project_type_id" class="form-control">
                        @foreach($project_types as $p)
                          <option value="{{$p->id}}">{{$p->project_name}}</option>
                        @endforeach
                      </select>
                      <!--<input type="text" class="form-control" name="project_type_id" placeholder="project_type_id" value="{/{$projectmanagements->project_type_id}}">-->
                    </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>image</label>
                    <input type="text" class="form-control" name="image" placeholder="image" value="{{$projectmanagements->image}}">
                  </div>
               </div>

              <div class="col-md-5 pr-md-1">
                <div class="form-group">
                  <label>description</label>
                  <input type="text" class="form-control" name="description" placeholder="description" value="{{$projectmanagements->description}}">
                </div>
             </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>owner_name</label>
                      <input type="text" class="form-control" name="owner_name" placeholder="owner_name" value="{{$projectmanagements->owner_name}}">
                    </div>
                </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>owner_phn</label>
                      <input type="text" class="form-control" name="owner_phn" placeholder="owner_phn" value="{{$projectmanagements->owner_phn}}">
                    </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>owner_email</label>
                    <input type="text" class="form-control" name="owner_email" placeholder="owner_email" value="{{$projectmanagements->owner_email}}">
                  </div>
              </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>actual_start_date</label>
                      <input type="date" class="form-control" name="actual_start_date" placeholder="actual_start_date" value="{{$projectmanagements->actual_start_date}}">
                    </div>
                </div>

                <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>actual_end_date</label>
                      <input type="date" class="form-control" name="actual_end_date" placeholder="actual_end_date" value="{{$projectmanagements->actual_end_date}}">
                    </div>
                </div>

                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>expected_end_date</label>
                    <input type="date" class="form-control" name="expected_end_date" placeholder="expected_end_date" value="{{$projectmanagements->expected_end_date}}">
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
  </div>

  @endsection
