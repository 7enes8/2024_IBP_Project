@extends('layouts.adminwindow')

@section('title', 'Show Message : ' . $data->name)

@section('content')

    <div class="page-header">
        <h3 class="page-title">Show : {{ $data->name }} </h3>
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
                            <td><a href="{{ route('admin.message.destroy', ['id' => $data->id]) }}"
                                    class="btn btn-inverse-danger btn-fw,width float-right"
                                    onclick="return confirm('Do you want to delete {{ $data->title }}?')">DELETE</a></td>
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
                            <th style="width: 30px">Name</th>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Email</th>
                            <td>{{ $data->email }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Phone</th>
                            <td>{{ $data->phone }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Subject</th>
                            <td>{{ $data->subject }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Detail Message</th>
                            <td style="">{!! $data->message !!}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">IP NUmber</th>
                            <td>{{ $data->ip }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Status</th>
                            <td>{{ $data->status }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Sending Date</th>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Admin Note :</th>
                            <td>
                                <form class="forms-sample"
                                    action="{{ route('admin.message.update', ['id' => $data->id]) }}" method="post">
                                    @csrf
                                    <textarea class="form-control" id="note" name="note">
{{ $data->note }}
                                    </textarea>
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
