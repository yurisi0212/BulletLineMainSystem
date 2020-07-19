<?php


namespace sqmeru\BulletLineMainSystem\Event;


use pocketmine\Server;
use sqmeru\BulletLineMainSystem\BulletLineMainSystem;
use sqmeru\BulletLineMainSystem\Event\Player\InteractEvent;
use sqmeru\BulletLineMainSystem\Event\Player\JoinEvent;
use sqmeru\BulletLineMainSystem\Event\Player\QuitEvent;

class EventManager{
      public static function registerEvents(BulletLineMainSystem $main){
        Server::getInstance()->getPluginManager()->registerEvents(new JoinEvent(),$main);
        Server::getInstance()->getPluginManager()->registerEvents(new QuitEvent(),$main);
        Server::getInstance()->getPluginManager()->registerEvents(new InteractEvent(),$main);
        Server::getInstance()->getPluginManager()->registerEvents(new JoinEvent(),$main);
        Server::getInstance()->getPluginManager()->registerEvents(new QuitEvent(),$main);
    }

}