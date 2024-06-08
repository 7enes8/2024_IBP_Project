@extends('layouts.adminwindow')

@section('title', 'Show Appointment : ' . $data->services->title)

@section('content')

    <div class="page-header">
        <h3 class="page-title">Show : {{ $data->user->name }} </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Show Appointment</h4>
                        <p class="card-description">Detail Appointment</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 30px">Id</th>
                            <td>{{ $data->id }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">User Name</th>
                            <td>{{ $data->user->name }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Services</th>
                            <td>{{ $data->services->id }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Date</th>
                            <td>{{ $data->date }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Time</th>
                            <td>{{ $data->time }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Price</th>
                            <td>$ {{ $data->services->price }}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Payment</th>
                            <td>
                                <form class="forms-sample"
                                    action="{{ route('admin.appointment.update', ['id' => $data->id]) }}" method="post">
                                    @csrf
                                    <select name="payment">
                                        <option selected>{{ $data->payment }}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                    <br>
                                    <button style="float: right" type="submit" class="btn btn-primary mr-2">Update Selection</button>
                                </form>
                            </td>
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
                                    action="{{ route('admin.appointment.update', ['id' => $data->id]) }}" method="post">
                                    @csrf
                                    <textarea name="note" cols="80">{{ $data->note }}</textarea>
                                    <select name="status">
                                        <option selected>{{ $data->status }}</option>
                                        <option>Accepted</option>
                                        <option>Cancelled</option>
                                        <option>Completed</option>
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
