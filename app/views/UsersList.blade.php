@extends('Master2')
@section("body")
@stop
<script src="{{asset('alert/jquery-1.11.0.js')}}"> </script>
<script src="{{asset('alert/bootstrap.js')}}"> </script>
<title></title>
{{--<style>--}}
{{--#tan{--}}
<hr/>
<hr/>
<div>
<div class="alert alert-success  col-md-offset-3 col-lg-4 glyphicon glyphicon-th-list">
    <strong class="col-md-offset-4 ">System Users List</strong>
</div>
    @if(Auth::Check() and $auth=Auth::User())

        <b class="alert alert-success pull-right glyphicon glyphicon-user">Welcome {{$auth->role}} [{{$auth->u_name}}] <p></p>
            <a href="{{URL::to('Cpanel')}}" class="btn btn-success glyphicon glyphicon-chevron-left pull-right" title="Bact to Cpanel">Back to Cpanel</a><p></p>
            <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off " title="logout"></a>
        </b>
    @if(Session::has('deleted'))
        <div id="tan" class="btn btn-danger">
            {{Session::get('deleted')}}</div>
    @endif
        @if(Session::has('updated'))
            <div id="tan" class="btn btn-success">
                {{Session::get('updated')}}</div>
        @endif
    <table class="alert alert-info table table-bordered">
        <tr>
            <th>Regno</th>
            <th>UserNAme</th>
            <th>E-mail</th>
            <th>Gender</th>
            <th>Role</th>
            <th>Nationality</th>
            <th>Last Login</th>
        </tr>
        @foreach($users as $result)
            <tr>
                <td>{{$result->regno}}</td>
                <td>{{$result->u_name}}</td>
                <td>{{$result->email}}</td>
                <td>{{$result->gender}}</td>
                <td>{{$result->role}}</td>
                <td>{{$result->nation}}</td>
                <td>{{$result->updated_at}}</td>
                <td><a href='edit/{{$result->id}}' class="btn btn-info glyphicon glyphicon-edit" title="edit"></a></td>
                <td><a href='userdelete/{{$result->id}}' class="btn btn-danger glyphicon glyphicon-trash" title="Delete"> </a></td>
            </tr>
        @endforeach

    </table>
    {{$users->links()}}
        <script>
            $('#document').ready(function(){
                $("#tan").delay(1500).slideDown(1000).delay(1200).slideUp(1200)
            });
        </script>
        @endif
        </div>