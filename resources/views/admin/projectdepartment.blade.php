@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">Project-Department</a>
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h4 class="card-title">Project-Department</h4>
            <a href="{{route('add_projectdepertment')}}">add_projectdepertment</a>
            @if(Session::has('msg'))
            <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif
            
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      project_id
                    </th>
                    <th>
                      dep_id
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($projectdeps as $pd)
                        <tr>
                            <td>{{$pd->project_id}}</td>
                            <td>{{$pd->dep_id}}</td>
                            
                            
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
