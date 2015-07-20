<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/20/2015
 * Time: 2:29 PM
 */

class UserListController extends Controller{
    public function userlist()
    {
        $data=DB::Table('users')->orderby('updated_at','desc')->Paginate(10);
        return View::make('UsersList')->with('users',$data);
       // return View::make('UsersList')->with('users',User::paginate(10));
}

    public function userdelete($id){
        $regno=USer::where('id',$id)->first();
        $data=$regno->regno;
//        return $data;
        User::destroy($id);
        return Redirect::to('userlist')->with('deleted',$data.'is deleted');
    }
    public function edit($id){
        $regno=USer::find($id);
        //$data=$regno->regno;
//        return $data;
        //User::destroy($id);
        return View::make('EditUsers')->with('user',$regno);
        //return Redirect::to('EditUsers')->with('updated',$data.'is updated successful');
    }

    public function update()
    {
$save=User::find(Input::get('id'));
        $save->regno=Input::get('regno');
        $save->u_name=Input::get('u_name');
        $save->email=Input::get('email');
        $save->nation=Input::get('nation');
        $save->gender=Input::get('gender');
        $save->password=Input::get('password');
        $save->course=Input::get('course');
        $save->role=Input::get('role');
        $data=$save->u_name;
        $save->Save();
        return Redirect::to('userlist')->with('updated',$data.'is successful updated');
    }
}