@extends('Master2')
@section("body")
@stop
<hr/>
@if(Auth::Check() and $auth=Auth::User())



    <b class="alert alert-success  col-lg-12 glyphicon glyphicon-user">Someone has logged in using this Machine at:{{$auth->updated_at}}    <p></p>
        Please destroy this session by clicking  <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off  " title="logout"></a>button
    </b>
@endif
<script src="{{asset('alert/jquery-1.11.0.js')}}"> </script>
<script src="{{asset('alert/bootstrap.js')}}"> </script>
<style>
    #tan{
        display: none;
    }
</style>


     <div class="alert alert-info col-md-offset-3 col-lg-5" xmlns="http://www.w3.org/1999/html">
         <form action="{{URL::to("login")}}" method="post" class="alert alert-info">
         <b class="col-md-offset-4 alert alert-warning"><i class="glyphicon glyphicon-lock"> Login here </i></b>
         <hr/>
     <input type="text" name="email" placeholder=" User Name" class="form-control"/>
     <hr/>
     <input type="password" name="password" placeholder=" Password" class="form-control"/><br/>
             <hr/>
             <input type="checkbox" name="rem"/>Remember me.
             <hr/>
     <button type="submit" class="btn btn-success col-md-offset-4"><b class="glyphicon glyphicon-send">Submit</b></button>
     <button type="reset" class="btn btn-info col-md-offset-4" ><b class="glyphicon glyphicon-refresh"> Clear</b></button>
             <hr/>
             @if(Session::has('fail'))
                 <i id="tan" class="alert alert-danger">{{Session::get('fail')}}</i>
                 @endif
         </form>
         <script>
             $('#document').ready(function(){
                 $("#tan").delay(1200).slideDown(1000).delay(1200).slideDown(1200).delay(1200).slideDown(1000).delay(1200).slideUp(1200).slideDown(1000).delay(1200).slideUp(1200)
             });
         </script>
     </div>
     {{--<a href=""  data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-lock"></i> Login</a>--}}
     {{--<a href=""  data-toggle="modal1" data-target="#myModal1"><i class="glyphicon glyphicon-exclamation-sign"></i>Register</a>--}}

     {{--<!--.........confirmation panel.........................-->--}}

     {{--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">--}}
         {{--<div class="modal-dialog">--}}
             {{--<div class="modal-content">--}}
                 {{--<div class="modal-header col-lg-pull-4">--}}
                     {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>--}}
                     {{--<h4 class="modal-title col-md-offset-4" id="myModalLabel"> <font color="#00bfff"><i class="glyphicon glyphicon-lock"></i></font> Login</h4>--}}
                 {{--</div>--}}
                 {{--<div class="modal-body">--}}

                         {{--<form action="{{URL::to("login")}}" method="post" class="alert alert-info">--}}
                             {{--<b class="col-md-offset-4 alert alert-warning"><i class="glyphicon glyphicon-lock"> Login here </i></b>--}}
                             {{--<hr/>--}}
                             {{--<input type="text" name="email" placeholder=" User Name" class="form-control"/>--}}
                             {{--<hr/>--}}
                             {{--<input type="password" name="password" placeholder=" Password" class="form-control"/><br/>--}}
                             {{--<hr/>--}}
                             {{--<input type="checkbox" name="rem"/>Remember me.--}}
                             {{--<hr/>--}}
                             {{--<button type="submit" class="btn btn-success col-md-offset-4"><b class="glyphicon glyphicon-send">Submit</b></button>--}}
                             {{--<button type="reset" class="btn btn-info col-md-offset-4" ><b class="glyphicon glyphicon-refresh"> Clear</b></button>--}}
                             {{--<hr/>--}}
                             {{--@if(Session::has('fail'))--}}
                                 {{--<i class="alert alert-danger">{{Session::get('fail')}}</i>--}}
                             {{--@endif--}}
                         {{--</form>--}}
                     {{--</div>--}}
                 {{--</div>--}}
                 {{--<div class="modal-footer">--}}


                 {{--</div>--}}
             {{--</div>--}}
             {{--<!-- /.modal-content -->--}}
         {{--</div>--}}
         {{--<!-- /.modal-dialog -->--}}

{{--<!--model mpyaaaa-->--}}


