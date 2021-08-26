@extends('admin.layouts.adminlayout')
@section('title', 'Home Page')

@section('navbar-brand')
<a class="navbar-brand" href="javascript:void(0)">Project-type</a>
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h4 class="card-title"> Project Types</h4>
            <a href="{{route('projecttypeadd')}}" class="btn btn-fill btn-primary">ADD</a>
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
                      Status
                    </th>
                    <th>
                        Created On
                    </th>
                    <th class="text-center">
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($project_types as $p)
                        <tr>
                            <td>{{$p->project_name}}</td>
                            <td>
                                @if($p->status == 1)
                                    Active
                                @else
                                    Inactive
                                @endif
                            </td>
                            <td>
                                {{date('d-M-Y h:i:s', strtotime($p->created_at))}}
                            </td>
                            <td class="text-center">
                                <a href="{{route('projecttypeedit', $p->id)}}" class="btn btn-fill btn-primary">Edit</a>
                                
                                <form method="post" action="{{route('projecttypedestroy')}}">
                                  @csrf
                                  <input type="hidden" name="id" value="{{$p->id}}">
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
