<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    //
    public function index(string $student_id)
    {
        return view('grades/index')->with('student_id', $student_id);

    }

    public function storeGrade(Request $request, string $student_id)
    {
        // validation
        $request->validate([
            'math' => 'required|integer|min:0|max:100',
            'science' => 'required|integer|min:0|max:100',
            'english' => 'required|integer|min:0|max:100',

        ]);
        $grade = Grade::create([
            'student_id' => $student_id,
            'math' => $request->input('math'),
            'science' => $request->input('science'),
            'english' => $request->input('english'),

        ]);
        return redirect('/students');
    }


    public function edit(string $gradeId){
        $grade = Grade::find($gradeId);
        return view('grades/edit')->with('grade',$grade);
    }

    public function update(Request $request,string $grade_id){

        // validation
        $request->validate([
                'math' => 'required|integer|min:0|max:100',
            'science' => 'required|integer|min:0|max:100',
            'english' => 'required|integer|min:0|max:100',

            ]);

        // if above validation is valid, then it will proceed to next line of code
        // otherwise throws a ValidationException
        $grade = Grade::where('id',$grade_id)->update([
            'math' => $request->input('math'),
            'science' => $request->input('science'),
            'english' => $request->input('english')
        ]);

        return redirect('/students');
    }

}
