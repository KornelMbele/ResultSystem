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


        <div class="alert alert-success  col-md-offset-3 col-lg-4 glyphicon glyphicon-envelope">
            <b class="col-md-offset-4 ">Mails Form</b>
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
                <th>Mail Sender</th>
                <th>Email</th>
                <th>Massage</th>
                <th>Date Posted</th>

            </tr>
            @foreach($results as $result)
                <tr>

                    <td><a href='read/{{$result->id}}' title="Click to read in full">{{$result->name}}</a></td>
                    <td><a href='read/{{$result->id}}' title="Click to read in full">{{$result->email}}</a></td>
                     <td><a href='read/{{$result->id}}' title="Click to read in full">{{$result->comment}}</a></td>
                    <td><a href='read/{{$result->id}}' title="Click to read in full">{{$result->created_at}}</a></td>
                    </a>
                    <td><a href='read/{{$result->id}}' class="btn btn-info glyphicon glyphicon-eye-open" title="Read"></a></td>
                    <td><a href='delete1/{{$result->id}}' class="btn btn-danger glyphicon glyphicon-trash" title="Delete"></a></td>
                </tr>
            @endforeach

        </table>
        {{$results->links()}}
        <script>
            $('#document').ready(function(){
                $("#tan").delay(2500).slideDown(1000).delay(1900).slideUp(12000)
            });
        </script></div>@endif