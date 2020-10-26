<?php

namespace App\Http\Controllers;

use App\Model\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


      protected $primaryKey = 'student_id';
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student::All();

        return view('students')->with(compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Student  $student
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Student $student)
    {
         $student= Student::find(1);
         return view('studentdetails')->with(compact('student'));
    }*/

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Student  $student
     * @return \Illuminate\Http\Response
     */
   /* public function update(Request $request, Student $student)
    {
        //
    }*/

    public function edit($id)
    {
        $student= Student::findorfail($id);
         return view('studentdetails')->with(compact('student'));
    }

    public function update(Request $request, $id)
    {

        $student = App\Student::find(1);

        $student->first_name  = $request->get('first_name');
        $student->last_name   = $request->get('last_name');
        $student->gender      = $request->get('gender');
        $student->joined_year = $request->get('joined_year');
        
        $student->save();

        return redirect::to('students');
    }
    

/*
     public function update(Request $request, $id)
    {
        
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function studentsdetails(){
        return view('studentdetails');
    }

   /* public function edit($id){
        $student= Student::find(1);

        return view('studentdetails','$student');
    }*/


}

