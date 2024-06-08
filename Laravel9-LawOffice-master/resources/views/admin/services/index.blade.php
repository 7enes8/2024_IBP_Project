@extends('layouts.adminbase')

@section('title', 'Services List')

@section('content')

    <div class="page-header">
        <h3 class="page-title"> Services List </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services List</li>
            </ol>
        </nav>
    </div>
    <div class="row">


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Services List</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success create-new-button float-right"
                                href="{{ route('admin.services.create') }}">+ Create New Services</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Category </th>
                                    <th> TITLE </th>
                                    <th> IMAGE </th>
                                    <th> IMAGE GALLERY </th>
                                    <th> PRICE </th>
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
                                        <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title) }}
                                        </td>
                                        <td>{{ $rs->title }}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{ Storage::url($rs->image) }}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.image.index', ['sid' => $rs->id]) }}"
                                              onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                                <img src="{{ asset('assets') }}/admin/images/image.png" style="height: 40px">
                                            </a>
                                        </td>
                                        <td>${{ $rs->price }}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td><a href="{{ route('admin.services.edit', ['id' => $rs->id]) }}"
                                                class="btn btn-inverse-primary btn-fw,width">EDIT</a></td>
                                        <td><a href="{{ route('admin.services.show', ['id' => $rs->id]) }}"
                                                class="btn btn-inverse-warning btn-fw,width">SHOW</a></td>
                                        <td><a href="{{ route('admin.services.destroy', ['id' => $rs->id]) }}"
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
