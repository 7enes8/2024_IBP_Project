@extends('layouts.adminbase')

@section('title', 'Show Services : '.$data->title)

@section('content')

    <div class="page-header">
      <h3 class="page-title">Show : {{$data->title}} </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.services.index')}}">Services</a></li>
          <li class="breadcrumb-item active" aria-current="page">Show Services</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Show Services</h4>
          <p class="card-description">Detail Data</p>
          <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                  <th style="width: 30px">Id</th>
                  <td>{{$data->id}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Category</th>
                  <td>
                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)}}
                  </td>
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
                  <th style="width: 30px">Detail Information</th>
                  <td style="">{!! $data->detail !!}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Image</th>
                  <td>
                    @if ($data->image)
                      <img src="{{Storage::url($data->image)}}" style="height: 100px">
                    @endif
                  </td>
                </tr>
                <tr>
                  <th style="width: 30px">Price</th>
                  <td>${{$data->price}}</td>
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
                  <td>{{$data->updated_at}}</td>
                </tr>
                <td><a href="{{route('admin.services.edit',['id'=>$data->id])}}"  class="btn btn-inverse-primary btn-fw,width">EDIT</a></td>
                <td><a href="{{route('admin.services.destroy',['id'=>$data->id])}}" class="btn btn-inverse-danger btn-fw,width"
                  onclick="return confirm('Do you want to delete {{$data->title}}?')">DELETE</a></td>
            </table>
          </div>
        </div>
      </div>
    </div>
  
 

 

  <!-- content-wrapper ends -->
  @endsection