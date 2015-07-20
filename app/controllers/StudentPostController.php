<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/14/2015
 * Time: 6:47 AM
 */

class StudentPostController  extends  Controller{
    public function send(){
        $validate=Validator::make(Input::all(),[
            'regno'=>'required|unique:students',
            'sname'=>'required',
            'gender'=>'required',
            'nation'=>'required',
            'course'=>'required',

        ]);
        if($validate->passes())
        {
            $data=Input::all();
            Student::Create([
                'regno'=>$data['regno'],
                'sname'=>$data['sname'],
                'gender'=>$data['gender'],
                'nation'=>$data['nation'],
                'course'=>$data['course'],


            ]);
            return Redirect::to('StudentReg')->with('success','Successful!!!');
        }
        else{
            return Redirect::to('StudentReg')->withErrors($validate);
        }
    }
}