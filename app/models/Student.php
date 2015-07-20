<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/13/2015
 * Time: 9:32 PM
 */

class Student extends Eloquent{
    protected $fillable=['regno','sname','gender','nation','course'];
    public $timestamps=true;

    public function result(){
      return $this->hasMany("Result") ;
}
}