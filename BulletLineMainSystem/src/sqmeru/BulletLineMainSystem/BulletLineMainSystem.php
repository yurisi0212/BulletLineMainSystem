<?php
namespace sqmeru\BulletLineMainSystem;

use pocketmine\plugin\PluginBase;
use sqmeru\BulletLineMainSystem\Command\CommandMap;

use pocketmine\Player;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;


class BulletLineMainSystem extends PluginBase implements Listener
{
    public function onEnable(){
        $this->getLogger()->info("§d読み込みました。");
        $this->getLogger()->info("てきとういうな。めやそんはJSだ");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        CommandMap::registerCommands();
    }

    public function onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $name = $player->getName();
        $event->setJoinmessage("§l§a【入室】§r§e" . $name . " Joined the game");
    }

    public function onQuit(PlayerQuitEvent $event){
        $player = $event->getPlayer();
        $name = $player->getName();
        $event->setQuitMessage("§l§b【退出】§r§e" . $name . " Lefted the game");
    }

}