<?php
/*
 * CustomAlerts (v1.1) by EvolSoft
 * Developer: EvolSoft (Flavius12)
 * Website: http://www.evolsoft.tk
 * Date: 29/12/2014 09:28 AM (UTC)
 * Copyright & License: (C) 2014 EvolSoft
 * Licensed under MIT (https://github.com/EvolSoft/CustomAlerts/blob/master/LICENSE)
 */

namespace CyberTech;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDeathEvent;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\permission\Permission;
use pocketmine\permission\PermissionAttachment;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
//use pocketmine\event\player\PlayerQuitEvent;
/*use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;
;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerJoinEvent;*/

class Main extends PluginBase implements Listener{


    public function onEnable() {
         $this->getLogger()->info("onEnable() has been called!");
        // $this->getServer()->getPluginManager()->registerEvents($this, $this);
        // $this->api->addHandler("player.interact", array($this, "playerinteract"));
        // $this->api->
         //$this->loadYml();
         //$this->getServer()->getPluginManager()->registerEvents(new Main($this), $this);
         $this->getServer()->getPluginManager()->registerEvents($this, $this);
         return true;
    }
    
    public function onDisable() {
        $this->getLogger()->info("onDisable() has been called!");
        return true;
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    switch($command->getName()){
        case "login":
            $this->DatabaseConnect();
            $this->getServer()->broadcastMessage("DATABASE CONNECT!");
            return true;
            if (isset($args[0]) && $args[0] !== ""){
                
            }
            
        
    }
    }
    
    
    
    public function DatabaseConnect() {
        $url = 'http://www.yungtechboy1.com/MCPE.php';
        $myvar1 = "asd";
        $myvar2 = "qwe";
        $myvars = 'myvar1=' . $myvar1 . '&myvar2=' . $myvar2;

        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec( $ch );
        $this->getServer()->broadcastMessage("RESPONSE! $response");
    }
    }