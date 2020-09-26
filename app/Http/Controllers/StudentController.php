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
        $this->validate($request, [
            'email_address' => 'email|unique:students,email_address'
        ]);

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

        
        return redirect('student-information');
    }
    public function studentLoginCheck(Request $request) {
        $student = Student::where('email_address', $request->email_address)->first();


        if(password_verify($request->password, $student->password)) {
            Session::put('studentId', $student->id);
            Session::put('studentName', $student->first_name.' '.$student->last_name);

            return redirect('/student-information');
        } else {
            return redirect('/')->with('message', '------Please insert valid password and email address-----');
        }

    }
    public function studentlogout() {
        Session::forget('studentId');
        Session::forget('studentName');
        return redirect('/');
    }
    public function mainContent() {
        return view('main.main-content');
    }
    public function rdsContent() {
        return view('rds.rds');
    }
    public function studentInfoContent() {
        $student = Student::find(session::get('studentId'));
        //return $student;
        return view('profile.student-info', ['student'=>$student]);
    }
    public function idCardInfo() {
        $student = Student::find(session::get('studentId'));
        return view('profile.id', ['student'=>$student]);
    }

}
