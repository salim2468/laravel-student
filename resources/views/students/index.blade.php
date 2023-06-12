@extends("layouts.app")

@section('content')

    <div style="padding: 8px; ">
        <h4>Student</h4>

        <a href="{{ route('students.create') }}">Add New Student</a>
        <table class="table table-striped">
            <tr>
                <th>Student Name</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @forelse($students as $student)
                <tr>
                    <td >{{$student->fullName}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->address}}</td>
                    <td><a href="/students/{{$student->id}}/edit"> Edit</a></td>
                    <td>

                    <form method="post" action="{{ route('students.update', ['student' => $student->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                    </td>

{{--                    <td><a href=""> Delete</a></td>--}}
                </tr>
            @empty
                <p>
                    No Student
                </p>
            @endforelse()
        </table>

    </div>

@endsection
