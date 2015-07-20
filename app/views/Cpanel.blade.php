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

<div class="alert alert-success  col-md-offset-3 col-lg-4 glyphicon glyphicon-resize-small">
    <i class="col-md-offset-4 ">Control Panel</i>
 </div>
@if(Auth::Check() and $auth=Auth::User())



                 <b class="alert alert-success pull-right glyphicon glyphicon-user">Welcome  {{$auth->role}} [{{$auth->u_name}}] <p></p>
                 <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off pull-right" title="logout"></a>
                 </b>
                     <hr/>


             </div>

             <div class="alert alert-info col-md-offset-3 col-lg-4">
         <a href="{{URL::to('results')}}" CLASS="glyphicon glyphicon-briefcase btn btn-warning">Students Records</a>
         <hr/>
         <a href="{{URL::to('SignUp')}}"  CLASS="glyphicon glyphicon-pencil btn btn-warning">Users Registration</a>
         <hr/>
         <a href="{{URL::to('userlist')}}"  CLASS="glyphicon glyphicon-th-list btn btn-warning">Users List</a>
                 <hr/>
         <a href="{{URL::to('mail')}}"  CLASS="glyphicon glyphicon-envelope btn btn-warning">Mails</a>
                 <hr/>
         <a href="{{URL::to('marks')}}"  CLASS="glyphicon glyphicon-th-list btn btn-warning">Scores Pin Point</a>

     </div>@endif