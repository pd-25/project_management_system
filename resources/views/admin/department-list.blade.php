@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">department</a> 
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h4 class="card-title">department</h4>
           <!-- <button class="btn btn-primary btn-block" href="" >add new depp</button>-->
           <a href="{{route('insertdept')}}">add new depp</a>
           
          </div>
          @if(Session::has('message'))
          <p class="alert alert-info">{{ Session::get('message') }}</p>
          @endif
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>
                    Department Name
                    </th>
                    <th>
                      image
                    </th>
                    <th>
                      Status
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($departments as $d)
                        <tr>
                            <td>{{$d->department_name}}</td>
                            <td>
                                @if($d->status == 1)
                                    Active
                                @else
                                    Inactive
                                @endif
                            </td>
                            <td>
                                {{date('d-M-Y h:i:s', strtotime($d->created_at))}}
                            </td>
                            <td class="text-center">
                                <a href="{{route('departmentedit', $d->id)}}" class="btn btn-fill btn-primary">Edit</a>
                                
                                <!--<a href="{//{route('deletedept',$d->id)}}" class="btn btn-fill btn-primary">Delete</a>-->
                                
                                <form action="{{route('newdeletedept')}}" method="post">
                                  @csrf
                                  <input type="hidden" name="deptid" value="{{$d->id}}">
                                  <button type="submit" class="btn btn-fill btn-primary">New Delete</button> 
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