@extends('layouts.adminbase')

@section('title', 'Admin Panel')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection



@section('content')

    <div class="page-header">
        <h3 class="page-title"> Settings </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settings</li>
            </ol>
        </nav>
    </div>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button"
                role="tab" aria-controls="general" aria-selected="true">General</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="smtp-tab" data-bs-toggle="tab" data-bs-target="#smtp" type="button" role="tab"
                aria-controls="smtp" aria-selected="false">Smtp Server</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#socialmedia" type="button"
                role="tab" aria-controls="socialmedia" aria-selected="false">Social Media</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="aboutus-tab" data-bs-toggle="tab" data-bs-target="#aboutus" type="button"
                role="tab" aria-controls="aboutus" aria-selected="false">About Us</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Contact Page</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="references-tab" data-bs-toggle="tab" data-bs-target="#references"
                type="button" role="tab" aria-controls="references" aria-selected="false">References</button>
        </li>
    </ul>
    <!--------------------------------------------------GENERAL------------------------------------------------------------------------------>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
            <form role="form" action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                <section class="content">
                    @csrf
                    <input type="text" class="form-control" name="id" id="id" value="{{ $data->id }}" hidden>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        value="{{ $data->title }}" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="keywords">Keywords</label>
                                    <input type="text" name="keywords" class="form-control"
                                        value="{{ $data->keywords }}" id="keywords" placeholder="Keywords">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control"
                                        value="{{ $data->description }}" id="description" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" name="company" class="form-control" value="{{ $data->company }}"
                                        id="company" placeholder="Company">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{ $data->address }}"
                                        id="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $data->phone }}"
                                        id="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="text" name="email" class="form-control" value="{{ $data->email }}"
                                        id="email" placeholder="E-Mail">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option selected="selected">{{ $data->status }}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <input type="file" name="icon" class="file-upload-default" value="{{ $data->icon }}" id="icon">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled=""
                                            placeholder="Icon">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>

                            </div>
                        </div>
                    </div>
        </div>

        <!-------------------------------------------------------smtpemail------------------------------------------------------------------------->

        <div class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp-tab">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="smtpserver">Smtp Server</label>
                        <input type="text" class="form-control" name="smtpserver" value="{{ $data->smtpserver }}"
                            placeholder="Smtp Server">
                    </div>
                    <div class="form-group">
                        <label for="smtpemail">Smtp Email Address</label>
                        <input type="text" class="form-control" name="smtpemail" value="{{ $data->smtpemail }}"
                            placeholder="Smtp Email Address">
                    </div>
                    <div class="form-group">
                        <label for="smtppassword">Smtp Password</label>
                        <input type="password" class="form-control" name="smtppassword"
                            value="{{ $data->smtppassword }}" placeholder="Smtp Password">
                    </div>
                    <div class="form-group">
                        <label for="smtpport">Smtp Port</label>
                        <input type="number" class="form-control" name="smtpport" value="{{ $data->smtpport }}"
                            placeholder="Smtp Port">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                </div>
            </div>
        </div>

        <!-------------------------------------------------------socialmedia------------------------------------------------------------------------->

        <div class="tab-pane fade" id="socialmedia" role="tabpanel" aria-labelledby="social-tab">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="fax">Fax</label>
                        <input type="text" class="form-control" name="fax" value="{{ $data->fax }}" placeholder="Fax">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="{{ $data->facebook }}"
                            placeholder="Facebook">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control" name="instagram" value="{{ $data->instagram }}"
                            placeholder="Instagram">
                    </div>
                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control" name="twitter" value="{{ $data->twitter }}"
                            placeholder="Twitter">
                    </div>
                    <div class="form-group">
                        <label for="youtube">Youtube</label>
                        <input type="link" class="form-control" name="youtube" value="{{ $data->youtube }}"
                            placeholder="Youtube">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                </div>
            </div>
        </div>

        <!----------------------------------------------------aboutus---------------------------------------------------------------------------->

        <div class="tab-pane fade" id="aboutus" role="tabpanel" aria-labelledby="aboutus-tab">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="aboutus">About Us</label>
                        <textarea class="form-control" id="detail1" name="aboutus">{{ $data->aboutus }}</textarea>

                        <script>
                            ClassicEditor
                                .create(document.querySelector('#detail1'))
                                .then(editor => {
                                    console.log(editor);
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </div>
            </div>
        </div>
        <!-----------------------------------------------------contactpage--------------------------------------------------------------------------->

        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="contact">Contact Page</label>
                        <textarea class="form-control" id="detail2" name="contact">{{ $data->contact }}</textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#detail2'))
                                .then(editor => {
                                    console.log(editor);
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </div>
            </div>
        </div>

        <!-------------------------------------------------------references------------------------------------------------------------------------->

        <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="references-tab">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleTextarea3">References</label>
                        <textarea class="form-control" id="exampleTextarea3" name="references">
{{ $data->references }}
                </textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#exampleTextarea3'))
                                .then(editor => {
                                    console.log(editor);
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </div>
            </div>
        </div>
        </section>
        </form>
    </div>

@endsection
