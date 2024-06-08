@extends('layouts.adminbase')

@section('title', 'User List')

@section('content')

    <div class="page-header">
        <h3 class="page-title"> User List </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">User List</li>
            </ol>
        </nav>
    </div>
    <div class="row">


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">User List</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Password </th>
                                    <th> Role </th>
                                    <th> SHOW </th>
                                    <th> DELETE </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->name }}</td>
                                        <td>{{ $rs->email }}</td>
                                        <td>{{ $rs->password }}</td>
                                        <td>
                                            @foreach ($rs->roles as $role)
                                                {{$role->name }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.user.show', ['id' => $rs->id]) }}"  
                                                class="btn btn-inverse-warning btn-fw,width"
                                                onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                                Show
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.user.destroy', ['id' => $rs->id]) }}"
                                                class="btn btn-inverse-danger btn-fw,width"
                                                onclick="return confirm('Do you want to delete {{ $rs->name }}?')">DELETE</a>
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


    <!-- content-wrapper ends -->
@endsection
