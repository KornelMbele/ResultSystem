<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/13/2015
 * Time: 9:36 PM
 */

class Result extends Eloquent{
protected $fillable=['regno','c_code','cat1','cat2','total1','final','total2','grade','gpa'];
    public $timestamps=true;
    public function student(){
        return $this->belongsTo("Student") ;
    }
}