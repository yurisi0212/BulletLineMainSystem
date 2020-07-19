<?php
namespace sqmeru\BulletLineMainSystem;

use pocketmine\plugin\PluginBase;

use sqmeru\BulletLineMainSystem\Command\CommandMap;
use sqmeru\BulletLineMainSystem\Event\EventManager;


class BulletLineMainSystem extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("§d読み込みました。");
        $this->getLogger()->info("てきとういうな。めやそんはJSだ");
        $this->getLogger()->info("ところでめやそん小学校通ってないみたいなんですけどだいじょうぶなんですかね");
        EventManager::registerEvents($this);
        CommandMap::registerCommands();
    }

}