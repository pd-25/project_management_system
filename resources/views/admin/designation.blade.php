@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">designtion</a> 
@endsection

@section('content')

<div class="content">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> designation</h4>
        <a href="{{route('insertposition')}}">add new position</a>
      </div>
      @if(Session::has('msg'))
          <p class="alert alert-info">{{ Session::get('msg') }}</p>
          @endif
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  position_name
                </th>
                <th>
                  status
                </th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($designations as $n)
                  
              
              <tr >
                <td>
                  {{$n->position_name}}
                </td>
                <td>
                  @if ($n->status)
                  Active
                  
                      
                  @else
                  INACTIVE
                      
                  @endif
                      
                  
                </td>
                <td class="text-center">
                  <a href="{{route('edipposition',$n->id)}}" class="btn btn-fill btn-primary">Edit</a>
                  <form action="{{route('delete')}}" method="POST">
                  @csrf
                  <input type="hidden" name="designation_id" value="{{$n->id}}">
                  <button type="submit" class="btn btn-fill btn-primary">Delete</button> 
                  </form>
                  
                  <!--<a href="#" class="btn btn-fill btn-primary">Delete</a>-->

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

  @endsection