<?php

namespace sqmeru\BulletLineMainSystem\Event\Player;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class JoinEvent implements Listener {

    public function onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $name = $player->getName();
        $event->setJoinmessage("§l§a" . $name . "がオンラインになりました。");
    }
}