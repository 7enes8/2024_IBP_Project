@extends('layouts.adminwindow')

@section('title', 'User Detail : '.$data->name)

@section('content')

    <div class="page-header">
      <h3 class="page-title">Show : {{$data->name}} </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Show User</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Show User</h4>
          <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                  <th style="width: 30px">Id</th>
                  <td>{{$data->id}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Name</th>
                  <td>{{$data->name}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Email</th>
                  <td>{{$data->email}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Password</th>
                  <td>{{$data->password}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Role</th>
                  <td>
                    @foreach ($data->roles as $role)
                      {{$role->name }} 
                      <a href="{{route('admin.user.destroyrole',['uid'=>$data->id, 'rid'=>$role->id])}}" class="btn btn-inverse-danger btn-fw,width"
                        onclick="return confirm('Do you want to delete {{$data->name}}?')">[X]</a>
                    @endforeach
                  </td>
                </tr>
                <tr>
                  <th style="width: 30px">Add Role to User</th>
                  <td>
                      <form class="forms-sample" action="{{ route('admin.user.addrole', ['id' => $data->id]) }}" method="post">
                          @csrf
                          <select name="role_id">
                            @foreach($roles as $role)
                              <option value="{{$role->id}}">
                                {{$role->name}}
                              </option>
                            @endforeach
                          </select>
                          <button style="float: right" type="submit" class="btn btn-primary mr-2">Add Role</button>
                      </form>
                  </td>
              </tr>
                <tr>
                  <th style="width: 30px">Created Date</th>
                  <td>{{$data->created_at}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Update Date</th>
                  <td>{{$data->updated_at}}</td>
                </tr>
                <td><a href="{{route('admin.user.destroy',['id'=>$data->id])}}" class="btn btn-inverse-danger btn-fw,width"
                  onclick="return confirm('Do you want to delete {{$data->name}}?')">DELETE</a></td>
            </table>
          </div>
        </div>
      </div>
    </div>
  
 

 

  <!-- content-wrapper ends -->
  @endsection