@extends('layout.layout')
@section('title','Edit Major')
@section('content')

<form action="/major/{{$major->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Major Name</label>
        <input type="text" class="form-control" id="name" value="{{$major->name}}" name="name" placeholder="Major Name">
    </div>
    <center><button type="submit" class="codepro-custom-btn codepro-btn-15" ><span>Edit</span></button></center>
    </form>
</form>
@endsection