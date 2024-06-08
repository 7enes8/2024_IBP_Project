@extends('layouts.adminbase')

@section('title', 'Add FAQ')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div class="page-header">
        <h3 class="page-title"> Create Page </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.faq.index') }}">FAQ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Page</li>
            </ol>
        </nav>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Faq</h4>
                <form class="forms-sample" action="{{ route('admin.faq.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Question</label>
                        <input type="text" class="form-control" id="question" name="question" placeholder="Question">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Answer</label>
                        <textarea class="form-control" id="answer" name="answer">

                    </textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#answer'))
                                .then(editor => {
                                    console.log(editor);
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
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
