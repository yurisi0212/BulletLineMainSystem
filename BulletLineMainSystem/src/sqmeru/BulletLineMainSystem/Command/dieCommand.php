<?php


namespace sqmeru\BulletLineMainSystem\Command;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\utils\CommandException;
use pocketmine\Player;

class dieCommand extends Command {


    public function __construct(){
        parent::__construct("die","自決(自殺)を行います","/die");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){

        if(!$sender instanceof Player){
            $sender->sendMessage("[BulletLineMainSystem] コンソールから実行できません。");
            return true;
        }

        $sender->kill();
        return true;
    }
}