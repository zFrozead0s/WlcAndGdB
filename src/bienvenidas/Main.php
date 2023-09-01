<?php  
  
 namespace bienvenidas/main;  
  
 use pocketmine\plugin\PluginBase;  
 use pocketmine\event\Listener;  
 use pocketmine\utils\TextFormat;  
 use pocketmine\event\player\PlayerJoinEvent;  
  
 class Main extends PluginBase implements Listener{  
    public function onLoad() {  
                $this->getLogger()->info("§aThis plugin is BienvenidasV# plugin.");  
                  $this->getLogger()->info("§cMade By Frozeado.");  
          }  
          public function onEnable() {  
                  $this->getLogger()->info("§dBienvenidadV2 has been enabled.");  
                  $this->getLogger()->info("§cThis plugin's License is the MIT-License.");  
                  $this->getServer()->getPluginManager()->registerEvents($this,$this);  
          }  
  
        public function JoinEvent(PlayerJoinEvent $event) {  
        $player = $event->getPlayer(); 
        $event->setJoinMessage (TextFormat::RED . " [" . $player->getName() . "] §cHas joined to the server! "); 
      }  
  }  
