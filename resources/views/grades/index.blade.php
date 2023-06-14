@extends('layouts.app')

@section('content')
    <div style="padding: 8px;display: flex;flex-direction: column;align-items: center;">

    <h4>Add Grade of Student-ID: {{$student_id}}</h4>
        <div style="background-color: #B0A8B9; padding: 18px;border-radius: 8px;min-width: 200px; width: 400px;">

        <form method="POST" action="{{ route('grades.store',['student_id'=>$student_id]) }}">

        @csrf
        <div class="form-group">
            <label>English</label>
            <input type="number" name="english" class="form-control" placeholder="Enter Marks">
        </div>
        <div class="form-group">
            <label>Science</label>
            <input type="number" name="science" class="form-control" placeholder="Enter Marks">
        </div>
        <div class="form-group">
            <label>Math</label>
            <input type="number" name="math" class="form-control" placeholder="Enter Marks">
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
        </div>
</div>

@endsection
