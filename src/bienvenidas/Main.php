<?php  
    
namespace bienvenidas;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;  
use pocketmine\event\Listener;  
use pocketmine\utils\TextFormat;  
use pocketmine\event\player\PlayerJoinEvent;  
use pocketmine\utils\Config;
  
class Main extends PluginBase implements Listener {

  public function onEnable() : void {
    $this->getServer()->getPluginManager()->registerEvents($this,$this); 
    $this->getLogger()->info("BienvenidasV2 has been enabled.");  
    $this->getLogger()->info("This plugin's License is the MIT-License.");   
  }  
  $playerName = $player->getName();

  public function JoinEvent(PlayerJoinEvent $event) {  
    $player = $event->getPlayer(); 
    $event->setJoinMessage ("[§a+§r] §b» §l§a" . $player->getName() . ""); 
  }
  
public function QuitEvent(PlayerQuitEvent $event) {
    $player = $event->getPlayer(); 
    $event->setQuitMessage ("[§4-§r] §b» §l§4" . $player->getName() . ""); 
  }
 
}  
  
