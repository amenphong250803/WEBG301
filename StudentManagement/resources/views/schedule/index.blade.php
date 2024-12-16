@extends('layout.layout')
@section('title', 'List Schedules')
@section('content')


@if (count($schedules) > 0)
    <div class="event-schedule-area-two bg-color pad100">
            <div class="containerr">
                <!-- row end-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content" id="myTabContent">
                            <div
                                class="tab-pane fade active show"
                                id="home"
                                role="tabpanel"
                            >
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-center"
                                                    scope="col"
                                                >
                                                    Date
                                                </th>
                                                <th scope="col">Session</th>
                                                <th scope="col">Classroom</th>
                                                <th
                                                    class="text-center"
                                                    scope="col"
                                                >
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($schedules as $schedule)
                                                
                                            <tr class="inner-box">
                                                <th scope="row" class="content-table">
                                                    <div class="event-date">
                                                        <span>{{$schedule->dayOfWeek}}</span>
                                                    </div>
                                                </th>
                                                <td class="content-table">
                                                    <div class="event-wrap">
                                                        @foreach ($schedule->classes as $class)    
                                                            <h3>
                                                                <a href="{{url('/class/'.$class->id)}}">{{$class->name}}</a>
                                                            </h3>
                                                        @endforeach
                                                        
                                                        <div class="meta">
                                                            <div
                                                                class="organizers"
                                                            >
                                                                <a href="#"
                                                                >{{$schedule->course->name}}</a
                                                                >
                                                            </div>
                                                            @foreach ($schedule->times as $time)    
                                                                <div class="time">
                                                                    <span
                                                                    >{{$time->time}}</span
                                                                    >
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                @foreach ($schedule->classrooms as $classroom)    
                                                    <td class="content-table">
                                                        <div class="r-no">
                                                            <span>{{$classroom->classroom}}</span>
                                                        </div>
                                                    </td>
                                                    @endforeach
                                                <td class="content-table">
                                                     <div class="VED">
                                                        <form action="{{"/schedules/".$schedule->id}}" method="post" >
                                                        {{method_field('Delete')}}
                                                        @csrf
                                                        <button type='submit' class="VED3" onclick="return confirm('Are you sure?')">Delete</button>
                                                        </form>
                                                     </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@else
<h1>Dont have any schedule</h1>
@endif
@endsection