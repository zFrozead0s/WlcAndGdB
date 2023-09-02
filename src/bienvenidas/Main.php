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
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("BienvenidasV2 has been enabled.");
        $this->getLogger()->info("This plugin's License is the MIT-License.");
        $this->saveDefaultConfig();
    }

    public function JoinEvent(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $name = $player->getName();
        $msg = $this->getConfig()->get("join_message");
        $msg = str_replace("{name}", $name, $msg);
        $event->setJoinMessage($msg);
    }

    public function QuitEvent(PlayerQuitEvent $event) {
        $player = $event->getPlayer();
        $name = $player->getName();
        $msg = $this->getConfig()->get("quit_message");
        $msg = str_replace("{name}", $name, $msg);
        $event->setQuitMessage($msg);
    }
}
