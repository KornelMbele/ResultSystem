<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/20/2015
 * Time: 10:36 AM
 */
//codes for retrieving information from database
class ResultsController extends Controller{
    public function results()
    {

return View::make('ResultsForm')->with('results',Result::paginate(10));
    }

}