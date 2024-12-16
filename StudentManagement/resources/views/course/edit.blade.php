@extends('layout.layout')
@section('title', 'Edit Course')
@section('content')

<form action="/courses/{{$courses->id}}" method="POST">
    {{method_field('PUT')}}
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="text"
        class="form-control" name="name" id="name"  placeholder="" value="{{$courses->name}}">
    </div>
    <div class="mb-3">
        <label for="majors_id" class="form-label">Major</label>
        <select id="majors_id" name="majors_id" class="form-select" aria-label="Select Class">
            <option>Please choose one</option>
            @foreach($majors as $major)
            <option {{ ($major->id == $courses->majors->id)?"selected":""}} value="{{$major->id}}">{{$major->name}}</option>
            @endforeach
        </select>
    </div>
    <center><button type="submit" class="codepro-custom-btn codepro-btn-15" ><span>Edit</span></button></center>
</form>
@endsection