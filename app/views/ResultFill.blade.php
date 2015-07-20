@extends('Master2')
@section("body")
@stop
<script src="{{asset('alert/jquery-1.11.0.js')}}"> </script>
<script src="{{asset('alert/bootstrap.js')}}"> </script>
<title></title>
<hr/>
@if(Auth::Check() and $auth=Auth::User())

    <b class="alert alert-success pull-right glyphicon glyphicon-user">Welcome  {{$auth->u_name}} <p></p>
        <a href="{{URL::to('Cpanel')}}" class="btn btn-success glyphicon glyphicon-chevron-left pull-right" title="Bact to Cpanel">Back to Cpanel</a><p></p>
        <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off " title="logout"></a>
        @if(Session::has('success'))
            <div  id="tan"  class="btn btn-warning">
                <i> {{Session::get('success')}}<i/>
            </div>
        @endif
    </b>


    <div class="alert alert-success col-md-offset-2 col-lg-6" xmlns="http://www.w3.org/1999/html">
        <form action="{{URL::to("sendMarks")}}" method="post" >
            <i class="glyphicon glyphicon-flag"></i>
            <b class="col-md-offset-4 alert alert-info glyphicon glyphicon-edit"><i class="glyphicon glyphicon-education"> Scores Filling Pane </i></b>
            <hr/>
            <input type="text" name="regno" placeholder=" Student Registration Number" class="form-control" required/>
            <br/>
            <input type="text" name="c_code" placeholder=" Course Code" class="form-control" required/>
            <br/>
            <input type="number" name="cat1" placeholder=" CAT ONE marks" class="form-control"/>
            <br/>
            <input type="number" name="cat2" placeholder=" CAT TWO marks" class="form-control"/>
            <br/>

            <input type="number" name="final" placeholder=" FINAL EXAMS marks" class="form-control"/>
            <br/>
            <hr/>


            <button type="submit" class="btn btn-success col-md-offset-4"><b class="glyphicon glyphicon-send">Submit</b></button>
            <button type="reset" class="btn btn-info col-md-offset-4" ><b class="glyphicon glyphicon-refresh"> Clear</b>
        </form>
        <script>
            $('#document').ready(function(){
                $("#tan").delay(1500).slideDown(1000).delay(1200).slideUp(1200)
            });
        </script>
    </div>@endif