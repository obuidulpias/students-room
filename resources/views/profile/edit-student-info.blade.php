@extends('master')

@section('title')
    PROFILE INFO

@endsection

@section('body')
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    {!! Form::open(['route'=>'update-student-info', 'method'=>'POST' ]) !!}
                        <div class="form-group">
                            <label class="control-label col-md-4">ID No</label>
                            <div class="col-md-6">
                                <input type="text" name="student_id" class="form-control" value="{{ $student->student_id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">First Name</label>
                            <div class="col-md-6">
                                <input type="text" name="first_name" class="form-control" value="{{ $student->first_name }}">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" name="last_name" class="form-control" value="{{ $student->last_name }}">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Phone Number</label>
                            <div class="col-md-6">
                                <input type="text" name="phone_number" class="form-control" value="{{ $student->phone_number }}">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Email Address</label>
                            <div class="col-md-6">
                                <input type="text" name="email_address" class="form-control" value="{{ $student->email_address }}">

                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Student Info">
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
