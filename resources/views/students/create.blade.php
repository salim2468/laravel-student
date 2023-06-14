@extends("layouts.app")

@section('content')

    <div style="padding: 8px;display: flex;flex-direction: column;align-items: center;">

        <h4>Add New Student</h4>

        <div style="background-color: #B0A8B9; padding: 18px;border-radius: 8px;min-width: 200px; width: 400px;">
            <form method="POST" action="{{ route('students.store') }}">

                @csrf
                <div class="form-group" style="margin-bottom: 10px;">
                    <label>Full Name</label>
                    <input type="text" name="fullName" class="form-control" placeholder="Enter Full Name">
                </div>

                <div class="form-group" style="margin-bottom: 10px;">
                    <label>Date Of Birth</label>
                    <input type="date" name="dob" class="form-control" placeholder="Enter Date of Birth">
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address">
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
