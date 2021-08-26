@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">project management</a> 
@endsection

@section('content')



<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            
            <h4 class="card-title"> project management</h4>
            <a href="{{route('insert_projectmanagement')}}">add new projectmanagement</a>
            @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>
                     project Name
                    </th>
                    <th>
                      projecttype id
                    </th>
                    <th>
                      image
                    </th>
                    <th >
                      description
                    </th>
                    <th >
                      owner name
                    </th>
                    <th >
                      owner phn num
                    </th>
                    <th >
                      owner email
                    </th>
                    <th >
                      actual start date
                    </th>
                    <th >
                      actual end date
                    </th>
                    <th >
                      expected end date
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projectmanagements as $pm)
                      
                  
                  <tr>
                    <td> 
                      {{$pm->project_name}}
                    </td>
                    <td>
                      {{$pm->project_type_id}}
                    </td>
                    <td>
                      {{$pm->image}}
                    </td>
                    <td >
                      {{$pm->description}}
                    </td>
                    <td >
                      {{$pm->owner_name}}
                    </td>
                    <td >
                      {{$pm->owner_phn}}
                    </td>
                    <td >
                      {{$pm->owner_email}}
                    </td>
                    <td >
                      {{date('d-M-Y h:i:s', strtotime($pm->actual_start_date))}}
                    </td>
                    <td >
                      {{date('d-M-Y h:i:s', strtotime($pm->actual_end_date))}}
                    </td>
                    <td >
                      {{date('d-M-Y h:i:s', strtotime($pm->expected_end_date))}}
                    </td>

                    <td class="text-center">
                      <a href="{{route('edit_ProjectManagement', $pm->id)}}" class="btn btn-fill btn-primary">Edit</a>
                      <form action="{{route('deletePM')}}" method="POST">
                      @csrf
                      <input type="hidden" name="deletePM" value="{{$pm->id}}">
                      <button type="submit" class="btn btn-fill btn-primary">Delete</button>
                      </form>
                  </td>

                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
</div>

@endsection