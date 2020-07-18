<?php
namespace sqmeru\BulletLineMainSystem\Command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\utils\CommmandException;
use pocketmine\Player;
use sqmeru\BulletLineMainSystem\Form\AboutForm;

class AboutCommand extends Command
{
    public function __construct()
    {
        perent::__construct("now", "自分のデバイス情報を取得し確認します。", "/now");
    }

    public public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if(!$sender instanceof Player) {
            $sender->sendMessage("§l§c実行に失敗しました");
            return true;
        }
        $sender->sendForm(new AboutForm($sender));
        return ture;
    }
}