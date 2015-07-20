<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/11/2015
 * Time: 2:50 PM
 */
//codes for user registration information
class UsersController extends  Controller{
    public function Users(){
        //codes for data validation
        $validate=Validator::make(Input::all(), [
          'u_name' =>'required',
          'regno' =>'required|unique:users|min:2|max:20',
          'email' =>'email|required|unique:users',
          'password' =>'required|confirmed',
          'course' =>'required',
          'nation' =>'required',
            'role'=>'required'
        ]);
        if($validate->passes()){
        $data=Input::all();
        User::Create(array(
            'u_name'=>$data['u_name'],
            'regno'=>$data['regno'],
            'email'=>$data['email'],
            'gender'=>$data['gender'],
            'password'=>Hash::make($data['password']),
            'course'=>$data['course'],
            'nation'=>$data['nation'],
            'role'=>$data['role']
        ));
        //return Redirect::to('SignUp');
            return Redirect::to('SignUp')->with('success','Thanks Data is successful Send');
    }
        else{
            return Redirect::to('SignUp')->withErrors($validate);
        }
    }
    public function UserSignUp(){
        return View::make("UserSignUp");
    }
    public function marks(){
        return View::make("ResultFill");
    }




}