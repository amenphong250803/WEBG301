@extends('layout.layout')
@section('title', 'Create Schedule')
@section('content')
<form action = '/schedules' method = 'post' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="dayOfWeek" class="form-label">Day Of Week</label>
        <input type="text" class="form-control" id="dayOfWeek" name="dayOfWeek" placeholder="Input day of week">     
    </div>
    <div class="mb-3">
        <label for="times" class="form-label">Time</label>
        <select id="times" name="times[]" class="form-select" aria-label="Select Class">
            <option selected>Please choose one</option>
            @foreach($times as $time)
            <option value="{{$time->id}}">{{$time->time}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="classrooms" class="form-label">Classroom</label>
        <select id="classrooms" name="classrooms[]" class="form-select" aria-label="Select Class">
            <option selected>Please choose one</option>
            @foreach($classrooms as $classroom)
            <option value="{{$classroom->id}}">{{$classroom->classroom}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="classes" class="form-label">Class</label>
        <select id="classes" name="classes[]" class="form-select" aria-label="Select Class">
            <option selected>Please choose one option</option>
            @foreach($classes as $class)
            <option value="{{$class->id}}">{{$class->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="course_id" class="form-label">Course</label>
        <select id="course_id" name="course_id" class="form-select" aria-label="Select Course">
            <option selected>Please choose one option</option>
            @foreach($courses as $course)
            <option value="{{$course->id}}">{{$course->name}}</option>
            @endforeach
        </select>
    </div>
    {{-- <button type="submit" class="btnCE">Submit</button> --}}
    <center><button type="submit" class="codepro-custom-btn codepro-btn-12" ><span>Click!</span><span>Create</span></button></center>
</form>
@endsection