<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/14/2015
 * Time: 6:48 AM
 */

class StudentFormController extends  Controller{
    public function StdReg(){
        return View::make('StudentRegistration');
    }
}