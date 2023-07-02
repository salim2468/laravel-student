<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $searchText = $request['search'] ?? "";


        if ($searchText != "") {

//            $students = Student::where('fullName','LIKE',"%$searchText%")->orWhere('address','LIKE',"%$searchText%")->get();

            $students = Student::where('fullName','LIKE',"%$searchText%")->orWhere('address','LIKE',"%$searchText%")->paginate(10);
        }else{

            $students = Student::paginate(10);
        }
            $data = compact('students','searchText');
            return view('students/index', $data);

            //return view('students/index', ['students' => $students,'searchText'=>$searchText]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'fullName' => 'required',
            'dob' => 'required|date',
            'address' => 'required'

        ]);

        $student = Student::create([
            'fullName' => $request->input('fullName'),
            'dob' => $request->input('dob'),
            'address' => $request->input('address')
        ]);
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation
        $request->validate([
            'fullName' => 'required',
            'dob' => 'required|date',
            'address' => 'required',
        ]);

        $student = Student::where('id', $id)->update([
            'fullName' => $request->input('fullName'),
            'dob' => $request->input('dob'),
            'address' => $request->input('address')
        ]);
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        if (!is_null($student)) {
            $student->delete();
        }
        return redirect('/students');
    }
}


