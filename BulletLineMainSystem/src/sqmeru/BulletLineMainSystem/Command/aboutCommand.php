<?php


namespace sqmeru\BulletLineMainSystem\Command;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\utils\CommandException;
use pocketmine\Player;
use sqmeru\BulletLineMainSystem\Form\AboutForm;

class aboutCommand extends Command{

    public function __construct(){
        parent::__construct("about", "自分の状態を確認します", "/about");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){

        if(!$sender instanceof Player){
            $sender->sendMessage("[BulletLineMainSystem] コンソールから実行できません。");
            return true;
        }
        $sender->sendForm(new AboutForm($sender));
        return true;
    }
}