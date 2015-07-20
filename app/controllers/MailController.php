<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/21/2015
 * Time: 10:30 AM
 */

class MailController extends Controller{
    public function mail()
    {
        $comment=Input::all();
        $validator=Validator::Make($comment,[
            'email'=>'required|email'
        ]);
        if($validator->passes()) {
            Comment::Create($comment);

        $name=$comment['name'] ;
       // var_dump($name);

        return Redirect::to('index')->with('success',$name.' Your Mail is Successful Send!');
}
        return Redirect::to('index')->with('failed','Invalid email,Please use genuine email for sending us your comments');
    }
    public function mails()
    {
        $data=DB::Table('comments') ->orderBy('created_at', 'desc')->paginate(7);
        return View::make('MailReport')->with('results',$data);
        //return View::make('MailReport')->with('results',Comment::paginate(3));
    }
    public function delete1($id){
        $regno=Comment::where('id',$id)->first();
        $data=$regno->email;
//        return $data;
        Comment::destroy($id);
        return Redirect::to('mail')->with('deleted',$data.' is successFull Deleted from Database');
    }
}