@extends('Master2')
@section("body")
@stop
<hr/>
<hr/>
{{--@if(Auth::Check() and $auth=Auth::User())--}}



    {{--<b class="alert alert-success  col-lg-12 glyphicon glyphicon-user">Someone has logged in using this Machine at:{{$auth->updated_at}}    <p></p>--}}
        {{--Please destroy this session by clicking  <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off  " title="logout"></a>button--}}
    {{--</b>--}}
{{--@endif--}}

<script src="{{asset('alert/jquery-1.11.0.js')}}"> </script>
<script src="{{asset('alert/bootstrap.js')}}"> </script>
<title></title>

@if(Auth::Check() and $auth=Auth::User())

    <b class="alert alert-success pull-right glyphicon glyphicon-user">Welcome  {{$auth->role}} [{{$auth->u_name}}] <p></p>
        <a href="{{URL::to('Cpanel')}}" class="btn btn-success glyphicon glyphicon-chevron-left pull-right" title="Bact to Cpanel">Back to Cpanel</a><p></p>
        <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off " title="logout"></a>
    </b>
<div>


<div class="alert alert-success  col-md-offset-3 col-lg-4 glyphicon glyphicon-book">
    <b class="col-md-offset-4 ">Students General Accademic Results</b>
</div>

    @if(Session::has('deleted'))
        <div  id="tan"  class="btn btn-danger">
            <i> {{Session::get('deleted')}}<i/>
        </div>
    @endif


    @if(Session::has('success'))
        <div  id="tan"  class="btn btn-warning">
            <i> {{Session::get('success')}}<i/>
        </div>
    @endif

    <table class="alert alert-info table table-bordered">
        <tr>
            <th>Regno</th>
            <th>Course_code</th>
            <th>CAT1</th>
            <th>CAT2</th>
            <th>TOTAL</th>
            <th>FINAL</th>
            <th>TOTAL</th>
            <th>GRADE</th>
            <th>GPA</th>
        </tr>
        @foreach($results as $result)
<tr>
<td>{{$result->regno}}</td>
<td>{{$result->c_code}}</td>
<td>{{$result->cat1}}</td>
<td>{{$result->cat2}}</td>
<td>{{$result->total1}}</td>
<td>{{$result->final}}</td>
<td>{{$result->total2}}</td>
<td>{{$result->grade}}</td>
<td>{{$result->gpa}}</td>

<td><a href='delete/{{$result->id}}' class="btn btn-danger glyphicon glyphicon-trash" title="Delete"></a></td>
</tr>
            @endforeach

    </table>
    {{$results->links()}}
<script>
    $('#document').ready(function(){
        $("#tan").delay(2500).slideDown(1000).delay(1900).slideUp(12000)
    });
</script></div>@endif