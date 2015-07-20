@extends('Master')
@section("contents")
 <script src="{{asset('alert/jquery-1.11.0.js')}}"> </script>
 <script src="{{asset('alert/bootstrap.js')}}"> </script>
 <title></title>
 {{--<style>--}}
 {{--#tan{--}}
 <hr/>
 {{--@if(Auth::Check() and $auth=Auth::User())--}}



     {{--<b class="alert alert-success  col-lg-12 glyphicon glyphicon-user">Someone has logged in using this Machine at:{{$auth->updated_at}}    <p></p>--}}
         {{--Please destroy this session by clicking  <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off  " title="logout"></a>button--}}
     {{--</b>--}}
 {{--@endif--}}
 <div>
     @if(Auth::Check() and $auth=Auth::User())

         <b class="alert alert-success pull-right glyphicon glyphicon-user">Welcome {{$auth->role}} [{{$auth->u_name}}] <p></p>
             <a href="{{URL::to('Cpanel')}}" class="btn btn-success glyphicon glyphicon-chevron-left pull-right" title="Bact to Cpanel">Back to Cpanel</a><p></p>
             <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off " title="logout"></a>
         </b>
     @endif
     <div class="alert alert-success  col-md-offset-2 col-lg-4 glyphicon glyphicon-th-list">
         <strong class="col-md-offset-4 ">Comments and Mail View point</strong>
     </div>
 </div>
         <hr/>
     <form action="{{URL::to("mail")}}" method="" class="col-md-offset-3">

         <label for="name">From:</label>{{$sms->name}}<<<label for="email">{{$sms->email}}</label>>>
         <textarea name="mail" value="{{$sms->comment}}"  cols="60" rows="20">{{$sms->comment}}</textarea>
         <button type="submit" class="btn btn-info glyphicon glyphicon-arrow-left col-md-offset-2" title="back" >  </button>
     </form>

         <script>
             $('#document').ready(function(){
                 $("#tan").delay(1500).slideDown(1000).delay(1200).slideUp(1200)
             });
         </script>

