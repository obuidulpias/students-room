@extends('master')

@section('title')
    ID CARD
@endsection

@section('body')
    <div class="wrapper" >
        <div class="left">
            <img src="{{ asset('/front-end/photo/nsu profile.png') }}"
                 alt="user" width="100">
            <h4>{{ $student->first_name.' '.$student->last_name }}</h4>
            <p>STUDENT</p>
        </div>
        <div class="right">
            <div class="info">
                <h3>Information</h3>
                <div class="info_data">
                    <div class="data">
                        <h4>Email</h4>
                        <p>{{ $student->email_address }}</p>
                    </div>
                    <div class="data">
                        <h4>Phone Number</h4>
                        <dr>  <p>{{ $student->phone_number }}</p>
                    </div>
                </div>
            </div>

            <div class="projects">
                <h3>department</h3>
                <div class="projects_data">
                    <div class="data">
                        <h4>Electronics & Communication Engineering</h4>
                        <p>Major in Computer science</p>
                    </div>
                    <div class="data">
                        <h4>Id Number</h4>
                        <p>{{ $student->student_id }}</p>
                    </div>
                </div>
            </div>

            <div class="social_media">

            </div>
        </div>
    </div>
@endsection
