@extends("layouts.app")

@section('content')

    <div style="padding: 20px; ">
        <h4>Student</h4>

        <a href="{{ route('students.create') }}"
           class="aButton" style="display: inline-flex; justify-content: center;color:black;">
            <span class="material-symbols-outlined">
                add
            </span>
            Add New Student
        </a>
        <br/>
        <br/>

        <form action="/students" method="" >
            <div class="form-group">
                <input type="search" name="search" class="from-control" value="{{$searchText}}" placeholder="Search" style="width:50%;">
                <button class="btn btn-primary" >Search</button>
            </div>
        </form>
        <br/>

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
                    <td>
                        <a href="students/{{ $student->id}}" style="color: black">
                            {{$student->fullName}}
                        </a>

                    </td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->address}}</td>
                    <td>
                        <a href="/students/{{$student->id}}/edit" class="aButton" style="display: inline-flex;justify-content: center;color:black;">
                            <span class="material-symbols-outlined">
                                edit
                            </span>

                        </a>
                    </td>
                    <td>
                        {{--TODO--}}
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
        {{ $students->appends(['search' => $searchText])->links() }}
{{--        {{$students->links()}}--}}

        {{--        <div class="row">--}}
{{--        {{$students->links()}}--}}
{{--        </div>--}}



    </div>

@endsection
