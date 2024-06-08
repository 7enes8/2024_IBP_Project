@extends('layouts.adminbase')

@section('title', 'FAQ List')

@section('content')

    <div class="page-header">
        <h3 class="page-title"> FAQ List </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ List</li>
            </ol>
        </nav>
    </div>
    <div class="row">


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">FAQ List</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success create-new-button float-right"
                                href="{{ route('admin.faq.create') }}">+ Create New FAQ</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Question </th>
                                    <th> Answer </th>
                                    <th> STATUS </th>
                                    <th> EDIT </th>
                                    <th> SHOW </th>
                                    <th> DELETE </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->question }}</td>
                                        <td>{!! $rs->answer !!}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td><a href="{{ route('admin.faq.edit', ['id' => $rs->id]) }}"
                                                class="btn btn-inverse-primary btn-fw,width">EDIT</a></td>
                                        <td><a href="{{ route('admin.faq.show', ['id' => $rs->id]) }}"
                                                class="btn btn-inverse-warning btn-fw,width">SHOW</a></td>
                                        <td><a href="{{ route('admin.faq.destroy', ['id' => $rs->id]) }}"
                                                class="btn btn-inverse-danger btn-fw,width"
                                                onclick="return confirm('Do you want to delete {{ $rs->title }}?')">DELETE</a>
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
