@extends('Master2')


@section("body")


@stop

<script src="{{asset('alert/jquery-1.11.0.js')}}"> </script>
<script src="{{asset('alert/bootstrap.js')}}"> </script>
<title></title>
{{--<style>--}}
    {{--#tan{--}}
        {{--display: none;--}}
    {{--}--}}
{{--</style>--}}
<hr/>


    @if(Auth::Check() and $auth=Auth::User())

        <b class="alert alert-success pull-right glyphicon glyphicon-user">Welcome  {{$auth->role}} [{{$auth->u_name}}] <p></p>
            <a href="{{URL::to('Cpanel')}}" class="btn btn-success glyphicon glyphicon-chevron-left pull-right" title="Bact to Cpanel">Back to Cpanel</a><p></p>
        <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off " title="logout"></a>
    </b>
    <hr/>
        @if(Session::has('success'))
            <div  id="tan"  class="btn btn-success">
                <i> {{Session::get('success')}}<i/>
            </div>
        @endif

    <div class="alert alert-success col-md-offset-2 col-lg-7 " xmlns="http://www.w3.org/1999/html">

    <form action="{{URL::to("SignUp")}}" method="post" >
        <i class="glyphicon glyphicon-flag"></i>
        <b class="col-md-offset-4 alert alert-warning "><i class="glyphicon glyphicon-folder-open"> Registration </i></b>

        <hr/>
        <input type="text" name="regno" placeholder=" Student Registration Number" class="form-control " required/>
         @if($errors->has('regno'))
            <div class="alert alert-danger"> {{$errors->first('regno')}}</div>
        @endif
        <br/>
        <input type="text" name="u_name" placeholder=" Student or User Name" class="form-control" required/>
        @if($errors->has('u_name'))
            <div class="alert alert-danger"> {{$errors->first('u_name')}}</div>
        @endif
        <br/>
        <select name="gender" class="form-control" required>
            <option value="Male">Male</option>

            <option value="Female">Female </option>
        </select>
        @if($errors->has('gender'))
            <div class="alert alert-danger"> {{$errors->first('gender')}}</div>
        @endif
        <hr/>
        <input type="text" name="email" placeholder=" Student Email" class="form-control" required/>
        @if($errors->has('email'))
            <DIV class="alert alert-danger"> {{$errors->first('email')}}</DIV>
        @endif
        <br/>
        <input type="password" name="password" placeholder=" Password.  (Recommended Use Your Regno i.e BIT/28/301/DT) " class="form-control" required/>
        <hr/>
        <input type="password" name="password_confirmation" placeholder=" Confirm your Password" class="form-control" required/>
        @if($errors->has('password'))
            <div class="alert alert-danger"> {{$errors->first('password')}}</div>
        @endif


        <hr/>

        <select name="nation" class="form-control" required>
            <option>TANZANIAN</option>
            <option>KENYAN </option>
            <option>UGANDAN</option>
            <option>NIGERIAN </option>
            <option>AMERICAN </option>
            <option>CONGOLESE</option>
            <option>CHINESE </option>
        </select>
        @if($errors->has('nation'))
            <div class="alert alert-danger"> {{$errors->first('nation')}}</div>
        @endif
        <hr/>
        <select name="course" class="form-control required" required >
            <option>BACHELOR OF INFORMATION TECHNOLOGY</option>
            <option>BACHELOR OF COMPUTER SCIENCE</option>
            <option>BACHELOR OF INFORMATION SYSTEM</option>
            <option>BACHELOR OF COMPUTER ENGINEERING </option>
            <option>DIPLOMA OF INFORMATION TECHNOLOGY</option>
            <option>DIPLOMA OF COMPUTER SCIENCE</option>
            <option>DIPLOMA OF INFORMATION SYSTEM</option>
            <option>DIPLOMA OF COMPUTER ENGINEERING </option>
            <option>CERTIFICATE OF INFORMATION TECHNOLOGY</option>
            <option>CERTIFICATE OF COMPUTER SCIENCE</option>
            <option>CERTIFICATE OF INFORMATION SYSTEM</option>
            <option>CERTIFICATE OF COMPUTER ENGINEERING </option>
        </select>
        @if($errors->has('course'))
            <div class="alert alert-danger"> {{$errors->first('course')}}</div>
        @endif
        <hr/>
        <select name="role" class="form-control" required>

            <option>Admin</option>
            <option>Student </option>
        </select>
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