@extends('layout.layout')
@section('title', 'Class')
@section('content')
    <div class="container-classroom">
        <table class="table-show">
                <tr class="tr-top">
                    <th class="head-table">No.</th>
                    <th class="head-table">Classroom</th>
                    <th class="head-table">Action</th>
                </tr>
                @foreach ($classes as $class)
                <tr class="tr-content">
                    <td class="content-table">
                            {{$class->id}}
                    </td>
                    <td class="content-table">
                        <a href="{{url('/class/'.$class->id)}}">
                            {{$class->name}}
                        </a>
                    </td>
                    <td class="content-table">
                        <div class="VED">
                            <a class="VED1" href="{{url("/class/".$class->id)}} "">View</a>
                            <a  class="VED2" href="{{url("/class/".$class->id."/edit")}}">Edit</a>
                            <form action="{{"/class/".$class->id}}" method="post">
                                {{method_field('Delete')}}
                                @csrf
                                <button type='submit' class="VED3" onclick="return confirm('Are you sure?')">Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection