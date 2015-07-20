@extends('Master2')
@section("body")
@stop
<hr/>

@if(Auth::Check() and $auth=Auth::User())
@if($auth->role=='Admin')

         <div class="alert alert-success col-md-offset-0 ">
             <b class="alert alert-info  glyphicon glyphicon-user">  Welcome {{$auth->role}} [{{$auth->u_name}}] </b>

             <a href="{{URL::to('Cpanel')}}" class="btn btn-info col-md-offset-6 " title="Cpanel"> <i class="glyphicon glyphicon-scissors">Control Panel</i> </a>


         </div>

         @elseif($auth->role=='Student')

        <b class="alert alert-success pull-right">Welcome  {{$auth->u_name}} <p></p>
        <a href="{{URL::to('index')}}" class="btn btn-info col-md-offset-6 glyphicon glyphicon-home" title="home" ></a>
        <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off" title="logout"></a>

        <div class="alert alert-info col-md-offset-1 glyphicon glyphicon-eye-open">
     <div class="alert alert-success col-lg-3col-md-offset-1 glyphicon glyphicon-user">


         <b>RegNo:</b> {{$auth->regno}}<strong> </strong><p></p>

             <b>Name:</b>  {{$auth->u_name}} <p></p>
             <b>Gender:</b>   {{$auth->gender}}<p></p>
             <b>Nationality</b>   {{$auth->nation}}<p></p>
             <b>Course:</b>   {{$auth-> course}}<p></p>



     </div>
     <div class="alert alert-success col-lg-2 pull-right">

         Kampala  <p></p>

         International <p></p>
         University  <p></p>
         Dar Es Salaam <p></p>
        Constituent College <p></p>

     </div>

     <div class="alert alert-warning col-lg-9  col-md-offset-2">
          <table class="table table-bordered">
              <tr>
                  <th>C_CODE</th>
                  <th>CAT1</th>
                  <th>CAT2</th>
                  <th>TOTAL</th>
                  <th>FINAL_EXAMS</th>
                  <th>TOTAL</th>
                  <th>GRADE</th>
                  <th>GPA</th>
              </tr>
              @foreach($results as $result)
              <tr>

                      <td>{{$result->c_code}}</td>
                      <td>{{$result->cat1}}</td>
                      <td>{{$result->cat2}}</td>
                      <td>{{$result->total1}}</td>
                      <td>{{$result->final}}</td>
                      <td>{{$result->total2}}</td>
                      <td>{{$result->grade}}</td>
                      <td>{{$result->gpa}}</td>



                  @endforeach


              </tr>
<TR CLASS="alert alert-info">
   <TH> </TH><TH> </TH><TH> </TH><TH> </TH><TH> </TH><TH> </TH><TH>  </TH><TH > </TH>

</TR>

          </table>

     </div>
@endif

@endif