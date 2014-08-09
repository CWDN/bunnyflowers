<?php

class HomeController extends BaseController {

	public function index()
	{
        $mcData = $this->GetMinecraftServerData();
        $gmodData = $this->GetGmodServerData();
		return View::make('home')->with('serverdata', array('Minecraft' => $mcData, 'Gmod' => $gmodData));
    }

    function GetGmodServerData(){
        /*require app_path() . '/libs/SourceQuery/SourceQuery.class.php';*/

        // Edit this ->
        define( 'SQ_SERVER_ADDR', '5.101.136.131' );
        define( 'SQ_SERVER_PORT', 27015 );
        define( 'SQ_TIMEOUT', 1 );
        define( 'SQ_ENGINE', SourceQuery :: SOURCE );
        // Edit this <-

        $Query = new SourceQuery();

        try
        {
            $Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
            return array('Info' => $Query->GetInfo(), 'Players' => $Query->GetPlayers());
        }
        catch( Exception $e )
        {
            echo 'GMod: ' . $e->getMessage( );
        }

        $Query->Disconnect( );
    }

    function GetMinecraftServerData(){
        /*require app_path() . '/libs/MinecraftQuery/MinecraftQuery.class.php';*/

        $Query = new MinecraftQuery();

        try
        {
            $Query->Connect( '192.99.18.49', 28918 );
            return array('Info' => $Query->GetInfo(), 'Players' => $Query->GetPlayers());
        }
        catch( MinecraftQueryException $e )
        {
            echo 'Minecraft: ' . $e->getMessage( );
        }
    }

}
