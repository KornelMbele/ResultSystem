<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/14/2015
 * Time: 6:44 AM
 */

class MarksPostController extends   Controller{
    public function sendMarks(){
        $marks=Input::all();
        $mark1=Input::get("cat1");
        $mark2=Input::get("cat2");

        $marktotal1=$mark1 + $mark2;
        $ue=Input::get("final");
        $teu=$marktotal1 + $ue;
        if($teu>=80)
        {
            $gr="A";
            $pa=5;
            Result::Create([
                'regno'=>Input::get("regno"),
                'c_code'=>Input::get("c_code"),
                'cat1'=>Input::get("cat1"),
                'cat2'=>Input::get("cat2"),
                'total1'=>$marktotal1,
                'final'=>Input::get("final"),
                'total2'=>$teu,
                'grade'=>$gr,
                'gpa'=>$pa

            ]);

        }
        elseif ($teu>=75)
        {
            $gr="B+";
            $pa=4.5;
            Result::Create([
                'regno'=>Input::get("regno"),
                'c_code'=>Input::get("c_code"),
                'cat1'=>Input::get("cat1"),
                'cat2'=>Input::get("cat2"),
                'total1'=>$marktotal1,
                'final'=>Input::get("final"),
                'total2'=>$teu,
                'grade'=>$gr,
                'gpa'=>$pa

            ]);

        }
        elseif ($teu>=65)
        {
            $gr="B";
            $pa=4.0;
            Result::Create([
                'regno'=>Input::get("regno"),
                'c_code'=>Input::get("c_code"),
                'cat1'=>Input::get("cat1"),
                'cat2'=>Input::get("cat2"),
                'total1'=>$marktotal1,
                'final'=>Input::get("final"),
                'total2'=>$teu,
                'grade'=>$gr,
                'gpa'=>$pa

            ]);

        }
        elseif ($teu>=60)
        {
            $gr="B-";
            $pa=3.0;
            Result::Create([
                'regno'=>Input::get("regno"),
                'c_code'=>Input::get("c_code"),
                'cat1'=>Input::get("cat1"),
                'cat2'=>Input::get("cat2"),
                'total1'=>$marktotal1,
                'final'=>Input::get("final"),
                'total2'=>$teu,
                'grade'=>$gr,
                'gpa'=>$pa

            ]);

        }
        elseif ($teu>=55)
        {
            $gr="C+";
            $pa=2.5;
            Result::Create([
                'regno'=>Input::get("regno"),
                'c_code'=>Input::get("c_code"),
                'cat1'=>Input::get("cat1"),
                'cat2'=>Input::get("cat2"),
                'total1'=>$marktotal1,
                'final'=>Input::get("final"),
                'total2'=>$teu,
                'grade'=>$gr,
                'gpa'=>$pa

            ]);

        }
        elseif ($teu>=50)
        {
            $gr="C";
            $pa=2.0;
            Result::Create([
                'regno'=>Input::get("regno"),
                'c_code'=>Input::get("c_code"),
                'cat1'=>Input::get("cat1"),
                'cat2'=>Input::get("cat2"),
                'total1'=>$marktotal1,
                'final'=>Input::get("final"),
                'total2'=>$teu,
                'grade'=>$gr,
                'gpa'=>$pa

            ]);

        }
        elseif ($teu>=0)
        {
            $gr="D";
            $pa=1.5;
            Result::Create([
                'regno'=>Input::get("regno"),
                'c_code'=>Input::get("c_code"),
                'cat1'=>Input::get("cat1"),
                'cat2'=>Input::get("cat2"),
                'total1'=>$marktotal1,
                'final'=>Input::get("final"),
                'total2'=>$teu,
                'grade'=>$gr,
                'gpa'=>$pa

            ]);

        }

        return Redirect::to('marks');
    }
}