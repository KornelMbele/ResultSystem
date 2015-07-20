<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/14/2015
 * Time: 6:50 AM
 */

class MarksFillController extends  Controller{
    public function marks(){
        return View::make("ResultFill")->with('success','Informations Successfully saved and Stored');
    }
}