@extends('layouts.adminbase')

@section('title', 'Comment & Reviews List')

@section('content')

    <div class="page-header">
        <h3 class="page-title"> Comment List </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Comment List</li>
            </ol>
        </nav>
    </div>
    <div class="row">


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Comment List</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Service </th>
                                    <th> Subject </th>
                                    <th> Review </th>
                                    <th> Rate </th>
                                    <th> STATUS </th>
                                    <th> SHOW </th>
                                    <th> DELETE </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->user->name }}</td>
                                        <td><a href="{{route('admin.services.show',['id' =>$rs->services_id])}}">{{ $rs->services->title }}</a></td>
                                        <td>{{ $rs->subject }}</td>
                                        <td>{{ $rs->review }}</td>
                                        <td>{{ $rs->rate }}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.comment.show', ['id' => $rs->id]) }}"  
                                                class="btn btn-inverse-warning btn-fw,width"
                                                onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                                Show
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.comment.destroy', ['id' => $rs->id]) }}"
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
