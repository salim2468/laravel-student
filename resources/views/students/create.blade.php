@extends("layouts.app")

@section('content')

    <div class="container">

        <h4>Add New Student</h4>
        <div>
            <form method="POST" action="{{ route('students.store') }}">

                @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="fullName" class="form-control" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="date" name="dob" class="form-control" placeholder="Enter Date of Birth">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address">
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>

@endsection
