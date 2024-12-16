@extends('layout.layout')
@section('title', 'List Student')
@section('content')


@if (count($students) > 0)
    <div class="container-classroom">
        <table class="table-show">
                <tr class="tr-top">
                    <th class="head-table">Student ID</th>
                    <th class="head-table">Name</th>
                    <th class="head-table">Birth Year</th>
                    <th class="head-table">Photo</th>
                    <th class="head-table">Class</th>
                    <th class="head-table">Major</th>
                    <th class="head-table">Course</th>
                    <th class="head-table">Action</th>
                </tr>
                @foreach ($students as $student)
                <tr class="tr-content">
                    <td class="content-table">
                        {{$student->student_id}}
                    </td>
                    <td class="content-table">
                        {{$student->name}}
                    </td>
                    
                    <td class="content-table">
                        {{$student->birth}}
                    </td>
                    <td class="content-table">
                        <img class="img-student" src="{{url("/upload/".$student->photo)}}" alt="">
                    </td>
                    <td class="content-table">
                        <a href="{{url('/class/'.$student->classes->id)}}">
                            {{$student->classes->name}}
                        </a>
                    </td>
                    <td class="content-table">
                        {{$student->majors->name}}
                    </td>
                    <td class="content-table">
                            @foreach ($student->courses as $course)
                            {{$course->name}} 
                            <br>
                            @endforeach
                        </td>
    
                    <td class="content-table">
                        <div class="VED">
                            <a class="VED1" href="{{url("/students/".$student->id)}} ">View</a>
                            <a href="{{url("/students/".$student->id."/edit")}}" class="VED2">Edit</a>
                            <form action="{{"/students/".$student->id}}" method="post" >
                              {{method_field('Delete')}}
                              @csrf
                              <button type='submit' class="VED3" onclick="return confirm('Are you sure?')">Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@else
<h1>Dont have student</h1>
@endif
@endsection