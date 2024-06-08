@extends('layouts.adminbase')

@section('title', 'Edit Category : ' . $data->title)

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')

    <div class="page-header">
        <h3 class="page-title"> Edit Service : {{ $data->title }} </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Service</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
            </ol>
        </nav>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Services</h4>
                <form class="forms-sample" action="{{ route('admin.services.update', ['id' => $data->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Parent Category</label>
                        <select class="form-control select2" name="category_id">
                            <option value="0" selected="selected">Main Category</option>
                            @foreach ($datalist as $rs)
                                <option value="{{ $rs->id }}"
                                    @if ($rs->id == $data->category_id) selected="selected" @endif>
                                    {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Keywords</label>
                        <input type="text" class="form-control" id="keywords" name="keywords"
                            value="{{ $data->keywords }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $data->description }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Detail Information</label>
                        <textarea class="form-control" id="detail" name="detail">
{{ $data->detail }}
              </textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#detail'))
                                .then(editor => {
                                    console.log(editor);
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                    <div class="form-group">
                        <!--<label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>-->
                        <label for="exampleInputFile">File upload</label>
                        <div class="input-group custom-file col-xs-12">
                            <input type="file" class="custom-file-input" name="image" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="custom-file-label" for="exampleInputFile" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Price</label>
                      <input type="number" class="form-control" id="price" name="price" value="{{$data->price}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option selected>{{ $data->status }}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update Selection</button>
                </form>
            </div>
        </div>
    </div>

    <!-- content-wrapper ends -->
@endsection
