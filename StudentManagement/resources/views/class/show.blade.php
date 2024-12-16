@extends('layout.layout')
@section('title', 'Class '.$classes->name)
@section('content')
    <div class="container-show">
        <div class="container-classroom">
        <table class="table-show">
                <tr class="tr-top">
                    <th class="head-table">Student ID</th>
                    <th class="head-table">Name</th>
                    <th class="head-table">Birth Year</th>
                    <th class="head-table">Photo</th>
                    <th class="head-table">Major</th>
                    <th class="head-table">Course</th>
                </tr>
                {{-- @foreach ($classes as $class) --}}
                @foreach($classes->students as $student)
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
                            {{$student->majors->name}}  
                        </td>
                        <td class="content-table">
                            @foreach ($student->courses as $course)
                                {{$course->name}}  
                                <br>
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                {{-- @endforeach --}}
        </table>
    </div>
    </div>
@endsection