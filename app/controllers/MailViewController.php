<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 7/5/2015
 * Time: 11:47 AM
 */

class MailViewController extends Controller{

    public function  read($id){
        return View::make("MailView")->with('sms',Comment::find($id));
    }
}