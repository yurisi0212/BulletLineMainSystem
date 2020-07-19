<?php


namespace sqmeru\BulletLineMainSystem\Command;


use  pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;

class WarpCommands extends Command{

    public function __construct(string $name, string $description = "", string $usageMessage = null){
        parent::__construct($name, $description, $usageMessage);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if(!$sender instanceof Player){
            $sender->sendMessage("実行に失敗しました");
            return true;
        }

        $sender->teleport(Server::getInstance()->getLevelByName($commandLabel)->getSafeSpawn());
        return true;
    }
}