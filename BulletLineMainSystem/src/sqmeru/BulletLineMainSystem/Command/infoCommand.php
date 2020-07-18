<?php


namespace sqmeru\BulletLineMainSystem\Command;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use sqmeru\BulletLineMainSystem\Form\InfoForm;

class infoCommand extends Command{

    public function __construct(){
        parent::__construct("info", "運営チームからのお知らせを確認します", "/info");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if(!$sender instanceof Player){
            $sender->sendMessage("実行に失敗しました。");
            return true;
        }

        $sender->sendForm(new InfoForm());
        return true;
    }
}