<?php


namespace sqmeru\BulletLineMainSystem\Event\Player;


use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\Server;
use pocketmine\tile\Sign;

class InteractEvent implements Listener {

    public function onTap(PlayerInteractEvent $event) {
        $player = $event->getPlayer();
        $tile = $event->getBlock()->getLevel()->getTile($event->getBlock());
        $console = false;
        if ($tile instanceof Sign) {
            switch ($tile->getLine(0)) {
                case 'cmd':
                    $cmd = $tile->getLine(1);
                    Server::getInstance()->dispatchCommand($player, $cmd);
                    return true;
                case 'console':
                    $console = true;
                case 'opcmd':
                    if (!$player->isOP()) {
                        $player->sendMessage(' §c>> §fそのコマンド看板はOPのみ実行できます');
                        return true;
                    }

                    $cmd = $tile->getLine(1);
                    if ($console) {
                        Server::getInstance()->dispatchCommand(new ConsoleCommandSender(), $cmd);
                        break;
                    }
                    Server::getInstance()->dispatchCommand($player, $cmd);
                    break;
            }
        }
        return true;
    }
}