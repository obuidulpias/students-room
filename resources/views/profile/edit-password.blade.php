@extends('master')

@section('title')
    Change Password

@endsection

@section('body')
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    {!! Form::open([ 'route'=>'update-student-info', 'method'=>'POST' ]) !!}
                    <div class="form-group">
                        <label class="control-label col-md-4">Password</label>
                        <div class="col-md-6">
                            <input type="text" name="student_id" class="form-control" value="Enter new password">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-6">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Change Password">
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

