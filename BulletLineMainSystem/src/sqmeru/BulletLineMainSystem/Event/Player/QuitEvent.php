<?php

namespace sqmeru\BulletLineMainSystem\Event\Player;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class QuitEvent implements Listener {

    public function onQuit(PlayerQuitEvent $event){
        $player = $event->getPlayer();
        $name = $player->getName();
        $event->setQuitMessage("§l§b【退出】§r§e" . $name . " Lefted the game");
    }

}