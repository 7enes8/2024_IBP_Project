@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

<div class="page-header">
              <h3 class="page-title"> Category List </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Category List</li>
                </ol>
              </nav>
            </div>
<div class="row">


  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6">
                    <h4 class="card-title">Category List</h4>
                      </div>
                      <div class="col-6">
                        <a class="btn btn-success create-new-button float-right" href="{{route('admin.category.create')}}">+ Create New Category</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Parent </th>
                            <th> TITLE </th>
                            <th> IMAGE </th>
                            <th> STATUS </th>
                            <th> EDIT </th>
                            <th> SHOW </th>
                            <th> DELETE </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $rs)
                          <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if ($rs->image)
                                  <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                @endif
                            </td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}"  class="btn btn-inverse-primary btn-fw,width">EDIT</a></td>
                            <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-inverse-warning btn-fw,width">SHOW</a></td>
                            <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-inverse-danger btn-fw,width"
                                    onclick="return confirm('Do you want to delete {{$rs->title}}?')">DELETE</a></td>
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