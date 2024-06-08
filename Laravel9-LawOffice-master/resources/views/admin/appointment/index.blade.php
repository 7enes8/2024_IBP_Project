@extends('layouts.adminbase')

@section('title', 'Appointment List')

@section('content')

    <div class="page-header">
        <h3 class="page-title"> Appointment List </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Appointment List</li>
            </ol>
        </nav>
    </div>
    <div class="row">


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Appointment List</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> User Name </th>
                                    <th> Service </th>
                                    <th> Lawyer </th>
                                    <th> Date </th>
                                    <th> Time </th>
                                    <th> Price </th>
                                    <th> Payment </th>
                                    <th> IP </th>
                                    <th> Note </th>
                                    <th> Status </th>
                                    <th> SHOW </th>
                                    <th> DELETE </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->user->name }}</td>
                                        <td><a href="{{route('admin.services.show',['id' =>$rs->services_id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">{{ $rs->services->title }}</a></td>
                                        <td>{{ $rs->user->name }}</td>
                                        <td>{{ $rs->date }}</td>
                                        <td>{{ $rs->time }}</td>
                                        <td>$ {{ $rs->services->price }}</td>
                                        <td>{{ $rs->payment }}</td>
                                        <td>{{ $rs->IP }}</td>
                                        <td>{{ $rs->note }}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.appointment.show', ['id' => $rs->id]) }}"  
                                                class="btn btn-inverse-warning btn-fw,width"
                                                onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                                Show
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.appointment.destroy',  ['status' => $rs->status,'id' => $rs->id]) }}"
                                                class="btn btn-inverse-danger btn-fw,width"
                                                onclick="return confirm('Do you want to delete {{ $rs->id }}?')">DELETE</a>
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
