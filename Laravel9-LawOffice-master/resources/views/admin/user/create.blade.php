@extends('layouts.adminbase')

@section('title', 'Add Services')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div class="page-header">
        <h3 class="page-title"> Create Page </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Page</li>
            </ol>
        </nav>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Service</h4>
                <form class="forms-sample" action="{{ route('admin.services.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Parent Service</label>
                        <select class="form-control select2" name="category_id">
                            @foreach ($data as $rs)
                                <option value="{{ $rs->id }}">
                                    {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Keywords</label>
                        <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Keywords">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Detail Information</label>
                        <textarea class="form-control" id="detail" name="detail">

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
                        <!--<label for="exampleInputFile">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose</label>
                    </div>
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
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
