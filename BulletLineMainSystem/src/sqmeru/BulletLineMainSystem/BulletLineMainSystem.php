<?php
namespace sqmeru\BulletLineMainSystem;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use sqmeru\BulletLineMainSystem\Form\AboutForm;
use sqmeru\BulletLineMainSystem\Form\InfoForm;

class BulletLineMainSystem extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info("§d読み込みました。");
        $this->getLogger()->info("めやそんは大学生です。騙されるなよ");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $command,string $label, array $args):bool
    {
        if(!$sender instanceof Player){
          $sender->sendMessage("[BulletLineMainSystem] コンソールから実行できません。");
          return true;
        }

        switch($label){
            case "rule":
            $player->teleport($this->Main->getServer()->getLevelByName('rule')->getSafeSpawn());
            break;
            case "lobby":
            $player->teleport($this->Main->getServer()->getLevelByName('lobby')->getSafeSpawn());
            break;
            case "main":
            $player->teleport($this->Main->getServer()->getLevelByName('main')->getSafeSpawn());
            break;
            case "earth":
            $player->teleport($this->Main->getServer()->getLevelByName('earth')->getSafeSpawn());
            break;
            case "die":
            $sender->kill();
            return true;
            case "about":
            $sender->sendForm(new AboutForm($this));
            return true;
            case "info":
            $sender->sendForm(new InfoForm($this));
            return true;


        }
    }
}