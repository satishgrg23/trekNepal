@extends('user.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Your Trekking Sites Booking list
                </div>
                @if (Session::has('flash_msg'))
                    <div class="alert alert-success">
                      <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                      {{ Session::get('flash_msg') }}
                    </div>
                @endif
                <div class="table" style="padding: 20px;">
                    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Fullname</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>No of person</th>
                                <th>Comment</th>
                                <th>Booking_date</th>
                            </tr>
                        </thead>
                            @foreach($booking as $data )
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->fullname }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->no_of_person }}</td>
                                    <td>{{ $data->comment }}</td>
                                    <td>{{ $data->booking_date }}</td>
                                </tr>
                            @endforeach
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
