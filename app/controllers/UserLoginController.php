<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/14/2015
 * Time: 9:23 AM
 */
//codes for login
class UserLoginController extends Controller
{
    public function login()
    {
        $data=Input::all();
        $log=Auth::attempt(array(
            'email'=>$data['email'],
            'password'=>$data['password']
        ));
        if($log){
                $search=($data['password']);
                $data=Result::where('regno',$search)->get();
                $count=Count($data);

                return View::make('StudentReport')->with('results',$data);
        }
        else{
            return Redirect::Route('home')->with('fail','Bad combination of username and password');
        }
    }
// codes for logout
    public function logout(){
        $user=Auth::User();
        $users=$user['u_name'];
        Auth::logout();
        return Redirect::to('index')->with('out',"Goodbye,  Welcome Back again!!!!!!  ". $users."  ");
    }
    }