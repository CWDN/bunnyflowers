<?php

class MinecraftController extends BaseController {

	public function index()
	{
		return View::make('minecraft');
	}
    public function tutorial()
    {
        return View::make('tutorial');
    }

    public function tutorials($tutorial)
    {
        $tutorial = strtolower($tutorial);
        if($tutorial != null || $tutorial != ""){
            if($tutorial == "all"){
                return View::make('tutorial');
            }
            if(View::exists('tutorials.' . $tutorial)){
                return View::make('tutorials.' . $tutorial);
            }
        }
        return View::make('tutorial');
    }

}
