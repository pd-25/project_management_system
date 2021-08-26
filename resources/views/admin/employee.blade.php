@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">Employee</a> 
@endsection

@section('content')

<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          <h4 class="card-title"> Employee list</h4>
          <a href="{{route('insertemployee')}}">add new emp</a>
           
          </div>
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
                    Name
                  </th>
                  <th>
                    email
                  </th>
                  <th>
                    password
                  </th>
                  <th>
                    dep_id
                  </th>
                  <th>
                    designtion
                  </th>
                  <th class="text-center">
                    dob
                  </th>
                  <th>
                    address
                  </th>
                  <th>
                    doj
                  </th>
                  <th>
                    aadhar_card
                  </th>
                  <th>
                    status
                    
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($employees as $e)
                    
                
                <tr>
                  <td>
                    {{$e->name}}
                  </td>
                  <td>
                    {{$e->email}}
                  </td>
                  <td>
                    {{$e->password}}
                  </td>
                  <td>
                    {{$e->dep_id}}
                  </td>
                  <td>
                    {{$e->designtion}}
                  </td>
                  <td>
                    {{date('d-M-Y h:i:s', strtotime($e->dob))}}
                </td>
                <td>
                  {{$e->address}}
                </td>
                <td>
                  {{date('d-M-Y h:i:s', strtotime($e->doj))}}
              </td>
                <td>
                  {{$e->aadhar_card}}
                </td>
                
                <td>
                  @if ($e->status==1)
                  Active
                  
                      
                  @else
                  Inactive
                      
                  @endif
                      
                 
                </td>
                <td class="text-center">
                  <a href="{{route('editemp', $e->id)}}" class="btn btn-fill btn-primary">Edit</a>
                  <form action="{{route('deleteemp')}}" method="POST">
                  @csrf
                  <input type="hidden" name="empid" value="{{$e->id}}">
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