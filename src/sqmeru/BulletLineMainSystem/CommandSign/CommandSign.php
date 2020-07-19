<?php

namespace sqmeru\BulletLineMainSystem\CommandSign;

use pocketmine\plugin\PluginBase;

Class Main extends PluginBase 
{
    public function onEnable() 
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
    }
}