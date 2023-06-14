@extends('layouts.app')


@section('content')
    <div style="padding: 20px; ">

        <h3>
            Student Name: {{ $student->fullName }}
        </h3>

        @forelse($student->gradeModels as $grade)
            <br>
            <a href="{{route('grades.edit',['grade_id'=>$grade->id])}}" class="aButton" style="color:black;">Edit</a>
            <br>
            <br>

            <table class="table table-striped">
                <tr>
                    <th>Subject</th>
                    <th>Marks</th>
                </tr>
                <tr>
                    <td>English</td>
                    <td>{{$grade->english}}</td>
                </tr>
                <tr>
                    <td>Math</td>
                    <td>{{$grade->math}}</td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>{{$grade->science}}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    @php
                        $total = $grade->english + $grade->math + $grade->science;
                    @endphp
                    <td>{{$total}}</td>
                </tr>
            </table>

        @empty


        <br>
            <a href="{{route('grades.index',['student_id'=>$student->id])}}" class="aButton" style="color:black;">
                    Add Grade of {{$student->fullName}}
            </a>
        <br>
        <br>

            <div class="alert alert-danger" role="alert">
                No Grades of {{$student->fullName}} is available
            </div>
        @endforelse
    </div>

@endsection

