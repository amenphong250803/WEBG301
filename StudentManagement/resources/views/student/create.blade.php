@extends('layout.layout')
@section('title', 'List Student')
@section('content')
<form action = '/students' method = 'post' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="student_id" class="form-label">Student ID</label>
        <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Input student ID">     
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Input name">
    </div>
    <div class="mb-3">
        <label for="birth" class="form-label">Birth</label>
        <input type="text" class="form-control" id="birth" name="birth" placeholder="Input birth">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Input email">
    </div>
    <div class="mb-3">
        <label for="classes" class="form-label">Class</label>
        <select id="classes" name="classes_id" class="form-select" aria-label="Select Class">
            <option selected>Please choose one</option>
            @foreach($classes as $class)
            <option value="{{$class->id}}">{{$class->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="majors" class="form-label">Major</label>
        <select id="majors" name="majors_id" class="form-select" aria-label="Select Major">
            <option selected>Please choose one</option>
            @foreach($majors as $major)
            <option class="select-option" value="{{$major->id}}">{{$major->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="courses" class="form-label">Course</label>
        <select id="courses" name="courses[]" class="form-select" aria-label="Select Course">
            <option selected>Please choose one</option>
            @foreach($courses as $course)
            <option class="select-option" value="{{$course->id}}">{{$course->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="upload-file">
        <label for="photo" class="lable-file">Photo</label>
        <input type="file" class="form-file" id="photo" name="photo" placeholder="Photo">
    </div>
    {{-- <button type="submit" class="btnCE">Submit</button> --}}
    <center><button type="submit" class="codepro-custom-btn codepro-btn-12" ><span>Click!</span><span>Create</span></button></center>
</form>
@endsection