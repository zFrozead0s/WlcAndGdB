<?php  
    
namespace bienvenidas;

use pocketmine\player\Player;
use pocketmine\Server;
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
    $event->setJoinMessage (TextFormat::RED . " [" . $player->getName() . "] §cHas joined to the server! "); 
  }

}  
  
