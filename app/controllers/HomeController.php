<?php

class HomeController extends BaseController {

	public function index()
	{
        $all = GameServer::all();
		return View::make('home')->with('serverdata', $all);
    }


}
