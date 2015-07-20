<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/14/2015
 * Time: 7:09 AM
 */

class StudentReportController extends  Controller{
    public function Report(){
 $search=Input::get("search");
       // $data=Student::where('sname',"LIKE",'%'.$search.'%')->with('result')->get();
        $data=Result::where('regno',$search)->get();
        //var_dump($data);
        $size=Count($data);
        if($size>0){


     return View::make("StudentReport")->with('results',$data);
     //return View::make("StudentReport")->with('students',$data);
        }
        else{
            return Redirect::to('search')->with('empty','No data Match with your search index');
        }
}


}