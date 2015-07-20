@extends('Master2')


@section("body")

@stop
<hr/>


<hr/>
<hr/>
     <form action="{{URL::to('Report')}}" method="get" class="alert alert-info col-lg-3">
         <input type="text" name="search" class="form-control" placeholder="Search result"/>
         <button type="submit" class="btn btn-info"><b class="glyphicon glyphicon-search"></b> </button>
@if(Session::has('empty'))
    <b class="btn btn-danger">{{Session::get('empty')}}</b>
    @endif
     </form>