<?php

class GameServer{
    
    private static $games = array(
        
        'minecraft' => 'GetMinecraft',
        'gmod' => 'GetGmod'
    );
    
        
    public static function get($game){
        
        if(isset(GameServer::$games[strtolower($game)])){
            $func = GameServer::$games[strtolower($game)];
            return GameServer::$func();
        }
        return false;
    }
    
    public static function all(){
        $data;
        foreach(GameServer::$games as $key => $game){
            $data[$key] = GameServer::$game();
        }
        return $data;
    }
    
    private static function GetMinecraft(){
        define('MC_SERVER_ADDR', '192.99.18.49');
        define('MC_SERVER_PORT', 28918);
        
        $Query = new MinecraftQuery();

        try
        {
            $Query->Connect(MC_SERVER_ADDR, MC_SERVER_PORT);
            $players;
            foreach($Query->GetPlayers() as $player){
                $pl = new Player();
                $pl->setName($player);
                $players[] = $pl;
            }
            
            $info = $Query->GetInfo();
            $info['IP'] = 'mc.bunnyflowers.uk';
            $info['Port'] = $info['HostPort'];
            $info['Background'] = 'images/minecraftbg.png';
            
            unset($info['HostPort']);
            
            return (object)array('Info' => (object)$info, 'Players' => $players);
        }
        catch( MinecraftQueryException $e )
        {
            echo 'Minecraft: ' . $e->getMessage( );
        } 
    }
    private static function GetGmod(){
        define('GMOD_SERVER_ADDR', '5.101.136.131');
        define('GMOD_SERVER_PORT', 27015);
        define('GMOD_TIMEOUT', 1);
        define('GMOD_ENGINE', SourceQuery :: SOURCE);

        $Query = new SourceQuery();

        try
        {
            $Query->Connect(GMOD_SERVER_ADDR, GMOD_SERVER_PORT, GMOD_TIMEOUT, GMOD_ENGINE);
            
            $players = $Query->GetPlayers();
            $pls = array();
            foreach($players as $player){
                $pl = new Player();
                $pl->setName($player['Name']);
                $pls[] = $pl;
            }
            
            $info = $Query->GetInfo();
            
            $info['IP'] = 'gmod.bunnyflowers.uk';
            $info['Port'] = $info['GamePort'];
            $info['GameType'] = $info['ModDesc'];
            $info['Background'] = 'images/gmodbg.png';
            
            unset($info['GamePort']);
            
            return (object)array('Info' => (object)$info, 'Players' => (object)$pls);
        }
        catch( Exception $e )
        {
            echo 'GMod: ' . $e->getMessage( );
        }

        $Query->Disconnect( );
    }
}
class Player{
    public $name = '';
        
    public function setName($n){
        $this->name = $n;
    }
}


?>