<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/20/2015
 * Time: 7:08 PM
 */

class IndexController extends Controller{
    public function  index(){
       return View::make('Index');
}
}