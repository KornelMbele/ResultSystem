<?php
/**
 * Created by PhpStorm.
 * User: Kornel
 * Date: 6/26/2015
 * Time: 11:04 AM
 */

class CommentController extends Controller{
    public function comment()
    {
        $comment=Input::all();
        $validator=Validator::Make($comment,[
            'email'=>'required|email'
        ]);
          if($validator->passes()) {
              Comment::Create($comment);
          }


}
}