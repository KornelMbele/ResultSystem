<?php

class HomeController extends BaseController {


	public function showWelcome()
	{
		return View::make('hello');
	}

    public function home(){
        return View::make("Home");
}
}
