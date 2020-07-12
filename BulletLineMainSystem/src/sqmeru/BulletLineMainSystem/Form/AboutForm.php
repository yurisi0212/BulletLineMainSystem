<?php
namespace sqmeru\BulletLineMainSystem\Form;

use pocketmine\form\Form;

use pocketmine\Player;

use sqmeru\BulletLineMainSystem;

class AboutForm implements Form
{
    public function __construct($name, $ping, $ip, $device)
    {
        $this->name = $name;
        $this->ping = $ping;
        $this->ip = $ip;
        $this->device = $device;
    }

    public function handleResponse(Player $player, $data): void
    {
        if($data === null){
            return;
        }
    }

    public function jsonSerialize()
    {
        return [
            'type' => 'form',
            'title' => '[BulletLineMainSystem] §cあなたのデバイス情報',
            'content' => '名前 / ' . $this->name . "\nIP / " . $this->ip . "\n現在使用しているデバイス / " . $this->device . "\nPing / " . $this->ping,
            'buttons' => [
                [
                    'text' => '§c閉じる'
                ]
            ],
        ];
    }
}