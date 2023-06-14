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
                       class="form-control"
                       value="{{$student->fullName}}">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label>Date Of Birth</label>
                <input type="date" name="dob" class="form-control" placeholder="Enter Date of Birth"
                       value="{{$student->dob}}"
                >
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address"
                       value="{{$student->address}}">
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

@endsection
