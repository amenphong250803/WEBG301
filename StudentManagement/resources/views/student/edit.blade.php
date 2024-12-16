@extends('layout.layout')
@section('title', 'List Student')
@section('content')
<form action="/students/{{$student->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="student_id" class="form-label">student_id</label>
        <input type="text" class="form-control" id="student_id" name="student_id" placeholder="student_id" value="{{$student->student_id}}">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$student->name}}">
    </div>
    <div class="mb-3">
        <label for="birth" class="form-label">Birth</label>
        <input type="text" class="form-control" id="birth" name="birth" placeholder="birth" value="{{$student->birth}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$student->email}}">
    </div>
    <div class="mb-3">
        <label for="classes_id" class="form-label">Class</label>
        <select id="classes_id" name="classes_id" class="form-select" aria-label="Select Class">
            <option>Please choose one</option>
            @foreach($classes as $class)
            <option {{ ($class->id == $student->classes->id)?"selected":""}} value="{{$class->id}}">{{$class->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="majors_id" class="form-label">Major</label>
        <select id="majors_id" name="majors_id" class="form-select" aria-label="Select Major">
            <option>Please choose one</option>
            @foreach($majors as $major)
            <option {{ ($major->id == $student->majors->id)?"selected":""}} value="{{$major->id}}">{{$major->name}}</option>
            @endforeach
        </select>
    </div>


    <div class="mb-3">
        <label for="courses" class="form-label">Course</label>
        <select id="courses" name="courses[]" class="multiple-select"Select Course" multiple>
            <option>Please choose one</option>
            @foreach($courses as $course)
            <option value="{{$course->id}}" @if($student->courses->contains($course->id)) selected @endif>{{$course->name}}</option>
            @endforeach
        </select>
    </div>

    <center><button type="submit" class="codepro-custom-btn codepro-btn-15" ><span>Edit</span></button></center>


</form>


@endsection