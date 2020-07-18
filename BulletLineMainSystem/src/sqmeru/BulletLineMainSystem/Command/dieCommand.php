<?php


namespace sqmeru\BulletLineMainSystem\Command;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\utils\CommandException;
use pocketmine\Player;

class dieCommand extends Command {


    public function __construct(){
        parent::__construct("die","自殺を行います","/die");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){

        if(!$sender instanceof Player){
            $sender->sendMessage("実行に失敗しました");
            return true;
        }

        $sender->kill();
        return true;
    }
}