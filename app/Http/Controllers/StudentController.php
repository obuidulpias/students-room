<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Session;

class StudentController extends Controller
{
    public function index() {
        return view('home.home');
    }
    public function studentSignUp(Request $request) {
        //$this->validate($request, [
         //   'email_address' => 'email|unique:students,email_address'
        //]);

        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->student_id = $request->student_id;
        $student->phone_number = $request->phone_number;
        $student->email_address = $request->email_address;
        $student->password = bcrypt($request->password);
        $student->save();
        //return $customer;
        $studentId = $student->id;
        Session::put('studentId', $studentId);
        Session::put('studentName', $student->first_name.' '.$student->last_name);

        //$data = $customer->toArray();
        //Mail::send('front-end.mails.confirmation-mail', $data, function ($message) use ($data) {
        // $message->to($data['email_address']);
        // $message->subject('confirmation_mail');
        //});

        return redirect('student-information');
    }
    public function mainContent() {
        return view('main.main-content');
    }
}
