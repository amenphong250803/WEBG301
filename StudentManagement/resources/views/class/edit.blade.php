@extends('layout.layout')
@section('title', 'Add Class')
@section('content')
    <form action="/class/{{$class->id}}" method="POST">
    {{method_field('PUT')}}
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="text"
        class="form-control" name="name" id="name"  placeholder="" value="{{$class->name}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Capacity</label>
      <input type="text"
        class="form-control" name="capacity" id="capacity"  placeholder="" value="{{$class->capacity}}">
    </div>
    <center><button type="submit" class="codepro-custom-btn codepro-btn-15" ><span>Edit</span></button></center>
    </form>
@endsection