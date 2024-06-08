@extends('layouts.adminbase')

@section('title', 'Show FAQ : '.$data->question)

@section('content')

    <div class="page-header">
      <h3 class="page-title">Show : {{$data->question}} </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.faq.index')}}">FAQ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Show FAQ</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Show FAQ</h4>
          <p class="card-description">Detail FAQ</p>
          <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                  <th style="width: 30px">Id</th>
                  <td>{{$data->id}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Question</th>
                  <td>{{$data->question}}</td>
                </tr>
                <tr>
                  <th style="width: 30px">Answer</th>
                  <td style="">{!! $data->answer !!}</td>
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
                <td><a href="{{route('admin.faq.edit',['id'=>$data->id])}}"  class="btn btn-inverse-primary btn-fw,width">EDIT</a></td>
                <td><a href="{{route('admin.faq.destroy',['id'=>$data->id])}}" class="btn btn-inverse-danger btn-fw,width"
                  onclick="return confirm('Do you want to delete {{$data->question}}?')">DELETE</a></td>
            </table>
          </div>
        </div>
      </div>
    </div>
  
 

 

  <!-- content-wrapper ends -->
  @endsection