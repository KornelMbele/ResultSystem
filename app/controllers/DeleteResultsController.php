<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/20/2015
 * Time: 11:26 AM
 */

class DeleteResultsController extends Controller{
    public function delete($id){
        $regno=Result::where('id',$id)->first();
        $data=$regno->regno;
//        return $data;
        Result::destroy($id);
        return Redirect::to('results')->with('deleted',$data.' is successFull Deleted from Database');
    }

}