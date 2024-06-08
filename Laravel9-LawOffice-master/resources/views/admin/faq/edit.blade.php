@extends('layouts.adminbase')

@section('title', 'Edit Faq : '.$data->question)

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')

    <div class="page-header">
      <h3 class="page-title"> Edit FAQ :  {{$data->title}} </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.faq.index')}}">FAQ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit FAQ</li>
        </ol>
      </nav>
    </div>
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit FAQ</h4>
          <form class="forms-sample" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputName1">Question</label>
              <input type="text" class="form-control" id="question" name="question" value="{{$data->question}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Answer</label>
              <textarea class="form-control" id="answer" name="answer">
{{$data->answer}}
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
                  <option selected>{{$data->status}}</option>
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