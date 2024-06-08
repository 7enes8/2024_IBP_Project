@extends('layouts.adminbase')

@section('title', 'Show Category : '.$data->title)

@section('content')

    <div class="page-header">
      <h3 class="page-title">Show : {{$data->title}} </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Category</a></li>
          <li class="breadcrumb-item active" aria-current="page">Show Category</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Show Category</h4>
          <p class="card-description">Detail Data</p>
          <div class="table-responsive">
            <table class="table table-striped">
              
                <tr>
                  <th style="width: 30px">Id</th>
                  <td>{{$data->id}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Title</th>
                  <td>{{$data->title}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Keywords</th>
                  <td>{{$data->keywords}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Description</th>
                  <td>{{$data->description}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Image</th>
                  <td>{{$data->image}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Status</th>
                  <td>{{$data->status}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Created Date</th>
                  <td>{{$data->created_at}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Update Date</th>
                  <td>{{$data->update_at}}</td>
                </tr>
                <td><a  href="{{route('admin.category.edit',['id'=>$data->id])}}"  class="btn btn-inverse-primary btn-fw,width">EDIT</a></td>
                <td><a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-inverse-danger btn-fw,width"
                  onclick="return confirm('Do you want to delete {{$data->title}}?')">DELETE</a></td>
            </table>
          </div>
        </div>
      </div>
    </div>
  
 

 

  <!-- content-wrapper ends -->
  @endsection