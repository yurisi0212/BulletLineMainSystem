<?php

namespace sqmeru\BulletLineMainSystem\Command;

use pocketmine\command\defaults\WorldCommand;
use pocketmine\Server;

class CommandMap {

    const plugin = "BulletLineMainSystem";

    public static function registerCommands(){
        Server::getInstance()->getCommandMap()->register(self::plugin,new dieCommand());
        Server::getInstance()->getCommandMap()->register(self::plugin,new WarpCommands("rule","ルールを確認できる『ルールワールド』へ移動します","/rule"));
        Server::getInstance()->getCommandMap()->register(self::plugin,new WarpCommands("lobby","色々な施設がある『ロビーワールド』へ移動します","/lobby"));
        Server::getInstance()->getCommandMap()->register(self::plugin,new WarpCommands("main","建築などが行える『メインワールド』へ移動します","/main"));
        Server::getInstance()->getCommandMap()->register(self::plugin,new WarpCommands("earth","資源などの回収が行える『第一期-地球資源』へ移動します","/earth"));
        Server::getInstance()->getCommandMap()->register(self::plugin,new infoCommand());

    }
}
