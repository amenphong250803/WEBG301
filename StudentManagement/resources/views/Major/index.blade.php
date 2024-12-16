@extends('layout.layout')
@section('title','List Major')
@section('content')
<div class="table-responsive">
    <table class="table-show">
        <thead class="table-light">
            <tr class="tr-top">
                <th class="head-table">Major Name</th>
                <th class="head-table">Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                  @foreach ($majors as $major)
                  <tr class="tr-content" >
                    <td class="content-table">
                      {{$major->name}}
                    </td class="content-table">
                    <td class="content-table">
                      <div class="VED">

                        <a href="{{url("/major/".$major->id."/edit")}}"  class="VED2">Edit</a>
                        <form action="{{url("/major/".$major->id)}}" method="post">
                          {{ method_field('DELETE') }}
                          @csrf
                          <button type="submit" class="VED3" onclick="return confirm('Are you sure?');">Delete</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
            <tfoot>
            </tfoot>
    </table>
  </div>
@endsection