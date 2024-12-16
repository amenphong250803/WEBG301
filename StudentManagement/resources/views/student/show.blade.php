@extends('layout.layout')
@section('title', 'Information Of Student')
@section('content')
<div class="student-profile py-4">
    <div class="container">
    <div class="roww">
            <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                <img
                    class="profile_img"
                    src="{{url("/upload/".$student->photo)}}"
                    alt="student dp"
                />
                <h3>{{$student->name}}</h3>
                </div>
                <div class="card-body">
                <p class="mb-0">
                    <strong class="pr-1">Student ID:</strong>{{$student->student_id}}
                </p>
                <p class="mb-0"><strong class="pr-1">Birth of year: </strong>{{$student->birth}}</p>
                <p class="mb-0"><strong class="pr-1">Email: </strong>{{$student->email}}</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection