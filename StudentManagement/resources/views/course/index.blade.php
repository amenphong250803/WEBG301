@extends('layout.layout')
@section('title','List course')
@section('content')
<div class="container-classroom">
    <table class="table-show">
            <tr class="tr-top">
                <th class="head-table">Course Name</th>
                <th class="head-table">Major</th>
                <th class="head-table">Action</th>
            </tr>
            @foreach ($courses as $course)
            <tr class="tr-content">
                <td class="content-table">
                    {{$course->name}}
                </td>
                <td class="content-table">
                    {{$course->majors->name}}
                </td>
                <td  class="content-table">
                    <div class="VED">
                        <a href="{{url("/courses/".$course->id."/edit")}}"  class="VED2">Edit</a>
                        <form action="{{"/courses/".$course->id}}" method="post" >
                          {{method_field('Delete')}}
                          @csrf
                          <button type='submit'  class="VED3" onclick="return confirm('Are you sure?')">Delete</button>
                    </div>
                </td>
            </tr>
            @endforeach
    </table>
</div>
    
@endsection