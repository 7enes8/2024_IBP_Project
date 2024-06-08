@extends('layouts.adminwindow')

@section('title', 'Show Review : ' . $data->user->name)

@section('content')

    <div class="page-header">
        <h3 class="page-title">Show : {{ $data->user->name }} </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Show Message</h4>
                        <p class="card-description">Detail Message</p>
                    </div>
                    <div class="col-6">
                        <tr>
                            <td><a href="{{ route('admin.comment.destroy', ['id' => $data->id]) }}"
                                    class="btn btn-inverse-danger btn-fw,width float-right"
                                    onclick="return confirm('Do you want to delete {{ $data->user->name }}?')">DELETE</a></td>
                        </tr>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 30px">Id</th>
                            <td>{{ $data->id }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Services</th>
                            <td>{{ $data->services->title }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Full Name</th>
                            <td>{{ $data->user->name }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Subject</th>
                            <td>{{ $data->subject }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Review</th>
                            <td>{{ $data->review }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Rate</th>
                            <td>{{ $data->rate }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">IP NUmber</th>
                            <td>{{ $data->IP }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Status</th>
                            <td>{{ $data->status }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Create Date</th>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Update Date</th>
                            <td>{{ $data->updated_at }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Admin Note :</th>
                            <td>
                                <form class="forms-sample"
                                    action="{{ route('admin.comment.update', ['id' => $data->id]) }}" method="post">
                                    @csrf
                                    <select name="status">
                                        <option selected>{{ $data->status }}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                    <br>
                                    <button style="float: right" type="submit" class="btn btn-primary mr-2">Update Selection</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>





    <!-- content-wrapper ends -->
@endsection
