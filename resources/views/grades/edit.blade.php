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
                <input type="number" name="english" class="form-control input-spacing" placeholder="Enter Marks"
                       value="{{$grade->english}}"
                >
                @error('english')
                <div class="alert alert-danger" role="alert">
                    <li>
                        {{$message}}
                    </li>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Science</label>
                <input type="number" name="science" class="form-control input-spacing" placeholder="Enter Marks"
                       value="{{$grade->english}}"
                >
                @error('science')
                <div class="alert alert-danger" role="alert">
                    <li>
                        {{$message}}
                    </li>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Math</label>
                <input type="number" name="math" class="form-control input-spacing" placeholder="Enter Marks"
                       value="{{$grade->english}}"
                >
                @error('math')
                <div class="alert alert-danger" role="alert">
                    <li>
                        {{$message}}
                    </li>
                </div>
                @enderror
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>


        </div>

    </div>
@endsection
