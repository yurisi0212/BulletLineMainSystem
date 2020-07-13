<?php
namespace sqmeru\BulletLineMainSystem;

use pocketmine\plugin\PluginBase;
use sqmeru\BulletLineMainSystem\Command\CommandMap;

class BulletLineMainSystem extends PluginBase
{
    public function onEnable(){
        $this->getLogger()->info("§d読み込みました。");
        $this->getLogger()->info("てきとういうな。めやそんはJSだ");
        CommandMap::registerCommands();
    }

}