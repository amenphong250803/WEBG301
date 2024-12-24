@extends('layout.layout')
@section('title', 'Add Class')
@section('content')
    <form action="/class" method="post">
        @csrf
        <div class="mb-3" style="margin: 10px 0">
            <label for="name" class="form-label">Class Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Class name">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Capacity Of Class</label>
            <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Class name">
        </div>
        <center><button type="submit" class="codepro-custom-btn codepro-btn-12" ><span>Click!</span><span>Create</span></button></center>
    </form>
@endsection