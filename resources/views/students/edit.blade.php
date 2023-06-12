@extends("layouts.app")

@section('content')

    <div class="container">

        <h4>Add New Student</h4>
        <div>
            <form method="POST" action="/students/{{$student->id}}">

            @csrf
            @method('put')
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullName" class="form-control"
                       placeholder="Enter Full Name"
                       value={{$student->fullName}}>

            </div>
            <div class="form-group">
                <label>Date Of Birth</label>
                <input type="date" name="dob" class="form-control" placeholder="Enter Date of Birth"
                       value={{$student->dob}}
                >
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address"
                       value={{$student->address}}>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

@endsection
