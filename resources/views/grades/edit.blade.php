@extends('layouts.app')

@section('content')
    <div style="padding: 8px;display: flex;flex-direction: column;align-items: center;">
        <h3>Edit Grades</h3>
        <div style="background-color: #B0A8B9; padding: 18px;border-radius: 8px;min-width: 200px; width: 400px;">

        <form method="POST" action="{{ route('grades.update',['grade_id'=>$grade->id]) }}">
{{--            {{ route('grades.update',['grade_id'=>$mark->id]) }}--}}
            @csrf
            @method('put')
{{--            {{$grade->id}}--}}
            <div class="form-group">
                <label>English</label>
                <input type="number" name="english" class="form-control" placeholder="Enter Marks"
                       value="{{$grade->english}}"
                >
            </div>
            <div class="form-group">
                <label>Science</label>
                <input type="number" name="science" class="form-control" placeholder="Enter Marks"
                       value="{{$grade->english}}"
                >
            </div>
            <div class="form-group">
                <label>Math</label>
                <input type="number" name="math" class="form-control" placeholder="Enter Marks"
                       value="{{$grade->english}}"
                >
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        <br>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <li>
                        {{$error}}
                    </li>
                </div>


            @endforeach
        @endif
        </div>

    </div>
@endsection
