@extends('layouts.adminwindow')

@section('title', 'Services Image Gallery')

@section('content')

<h3>{{$services->title}}</h3>
<hr>
<form class="forms-sample" action="{{route('admin.image.store',['sid' => $services->id])}}" method="post" enctype="multipart/form-data">
  @csrf

  <div class="input-group">
    <label for="exampleInputName1">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
      <label class="custom-file-label" for="exampleInputFile">Choose File</label>
    </div>
    <div class="input-group-append">
      <input class="input-group-text" type="submit" value="Upload">
    </div>
  </div>
  
  
</form>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Service Image List</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success create-new-button float-right"
                                href="{{ route('admin.category.create') }}">+ Create New Category</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> TITLE </th>
                                    <th> IMAGE </th>
                                    <th> DELETE </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->title }}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{ Storage::url($rs->image) }}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td><a href="{{ route('admin.image.destroy', ['sid' => $services->id, 'id' => $rs->id]) }}" class="btn btn-inverse-danger btn-fw,width"
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
@endsection

<!-- content-wrapper ends -->
