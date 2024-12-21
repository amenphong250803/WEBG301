@extends('layout.layout')
@section('title','Create Major')
@section('content')

<form action="/major" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Major Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Major Name">
    </div>
    <center><button type="submit" class="codepro-custom-btn codepro-btn-12" ><span>Click!</span><span>Create</span></button></center>
</form> 
@endsection