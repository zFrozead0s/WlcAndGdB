<?php  
    
namespace bienvenidas;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;  
use pocketmine\event\Listener;  
use pocketmine\utils\TextFormat;  
use pocketmine\event\player\PlayerJoinEvent;  
  
class Main extends PluginBase implements Listener {

  public function onEnable() : void {
    $this->getServer()->getPluginManager()->registerEvents($this,$this); 
    $this->getLogger()->info("§dBienvenidasV2 has been enabled.");  
    $this->getLogger()->info("§cThis plugin's License is the MIT-License.");   
  }  
  
  public function JoinEvent(PlayerJoinEvent $event) {  
    $player = $event->getPlayer(); 
    $event->setJoinMessage (TextFormat::RED . " [" . $player->getName() . "] §bHas joined to the server! "); 
  }

public function QuitEvent(PlayerQuitEvent $event) {  
    $player = $event->getPlayer(); 
    $event->setQuitMessage (TextFormat::RED . "§4- §b» §l§4" $player->getName""); 
  }

}  
  
