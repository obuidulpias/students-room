@extends('master')

@section('title')
    STUDENT INFO
@endsection

@section('body')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <div class="panel-body">
                        <h3 class="text-center text-success">Hello {{ $student->last_name }} ,</h3>
                        <table class="table table-borderd" >
                            <tr class="bg-success">
                                <th>ID No</th>
                                <td>{{ $student->student_id }}</td>
                            </tr>
                            <tr class="bg-success">
                                <th>Full Name</th>
                                <td>{{ $student->first_name.' '.$student->last_name }}</td>
                            </tr>
                            <tr class="bg-success">
                                <th>Phone Number</th>
                                <td>{{ $student->phone_number }}</td>
                            </tr>
                            <tr class="bg-success">
                                <th>Email Address</th>
                                <td>{{ $student->email_address }}</td>
                            </tr>
                            <tr class="bg-success">
                                <th></th>
                                <td>
                                    <a href="" class="btn btn-success btn-xs" title="Edit Student Info">
                                        <span class="glyphicon glyphicon-edit" ></span>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs" title="Password Change">
                                        <span class="glyphicon glyphicon-edit" ></span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection