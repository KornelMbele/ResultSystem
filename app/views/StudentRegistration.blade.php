@extends('Master2')
@section("body")
@stop
<hr/>
<hr/>
<hr/>





<div class="alert alert-success col-md-offset-2 col-lg-6" xmlns="http://www.w3.org/1999/html">
        <form action="{{URL::to('sendStd')}}" method="post" >
            @if(Session::has('success'))
                <div id="tan"  class="alert alert-danger ">
                   <i> {{Session::get('success')}}<i/>
                </div>
            @endif
            <i class="glyphicon glyphicon-flag"></i>
            <b class="col-md-offset-4 alert alert-warning "><i class="glyphicon glyphicon-folder-open"> Registration </i></b>

            <hr/>
            <input type="text" name="regno" placeholder=" Student Registration Number" class="form-control" required/>
                @if($errors->has('regno'))
                    <div class="alert alert-danger"> {{$errors->first('regno')}}</div>
                @endif
            <br/>
            <input type="text" name="sname" placeholder=" Student Full Name" class="form-control" required/>
                @if($errors->has('sname'))
                    <div class="alert alert-danger"> {{$errors->first('sname')}}</div>
                @endif
            <br/>
            <select name="gender" class="form-control" required>
                @if($errors->has('gender'))
                    <div class="alert alert-danger"> {{$errors->first('gender')}}</div>
                @endif
                <option value="Male">Male</option>

                <option value="Female">Female </option>
            </select>
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
            <hr/>
            <select name="course" class="form-control" required>
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
            <hr/>



            <button type="submit" class="btn btn-success col-md-offset-4"><b class="glyphicon glyphicon-send">Submit</b></button>
            <button type="reset" class="btn btn-info col-md-offset-4" ><b class="glyphicon glyphicon-refresh"> Clear</b>
        </form>
    </div>
<script>
    $('#document').ready(function(){
        $("#tan").delay(2500).slideDown(1000).delay(1900).slideUp(12000)
    });
</script>