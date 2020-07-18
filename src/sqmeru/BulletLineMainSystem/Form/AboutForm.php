<?php
namespace sqmeru\BulletLineMainSystem\Form;

use pocketmine\form\Form;

use pocketmine\Player;

use sqmeru\BulletLineMainSystem;

class AboutForm implements Form{

    /**
     * @var Player
     */
    private $player;

    public function __construct(Player $player){
        $this->player=$player;
    }

    public function handleResponse(Player $player, $data): void{
        if($data === null){
            return;
        }
    }

    public function jsonSerialize(){
        $device=[
            "Unknown",
            "Android",
            "iOS",
            "OSX",
            "FireOS",
            "GearVR",
            "HoloLens",
            "Windows10",
            "Windows",
            "Dedicated",
            "Orbis",
            "NX"
        ];

        return [
            'type' => 'form',
            'title' => '§bMainSystem§f>>§cあなたのデバイス情報',
            'content' => '名前 / ' . $this->player->getName() . "\nIP / " . $this->player->getAddress() . "\n現在使用しているデバイス / " . $device[$this->player->getDeviceOS()] . "\nPing / " . $this->player->getPing(),
            'buttons' => [
                [
                    'text' => '§c閉じる'
                ]
            ],
        ];
    }
}