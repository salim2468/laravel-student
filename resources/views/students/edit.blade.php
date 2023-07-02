@extends("layouts.app")

@section('content')

    <div style="padding: 8px;display: flex;flex-direction: column;align-items: center;">

        <h4 style="margin-bottom: 40px;text-align: center;margin-top: 5px;">

            Edit Student</h4>
        <div style="background-color: #B0A8B9; padding: 18px;border-radius: 8px;min-width: 200px; width: 400px;">

        <form method="POST" action="/students/{{$student->id}}">

            @csrf
            @method('put')
            <div class="form-group" style="margin-bottom: 10px;">
                <label>Full Name</label>

                <input type="text" name="fullName"
                       placeholder="Enter Full Name"
                       class="form-control input-spacing"
                       value="{{$student->fullName}}">
                @error('fullName')
                <div class="alert alert-danger" role="alert">
                    <li>
                        {{$message}}
                    </li>
                </div>
                @enderror
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label>Date Of Birth</label>
                <input type="date" name="dob" class="form-control input-spacing" placeholder="Enter Date of Birth"
                       value="{{$student->dob}}"
                >
                @error('dob')
                <div class="alert alert-danger" role="alert">
                    <li>
                        {{$message}}
                    </li>
                </div>
                @enderror
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label>Address</label>
                <input type="text" name="address" class="form-control input-spacing" placeholder="Enter Address"
                       value="{{$student->address}}">
                @error('address')
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
            <br>


        </div>

@endsection
