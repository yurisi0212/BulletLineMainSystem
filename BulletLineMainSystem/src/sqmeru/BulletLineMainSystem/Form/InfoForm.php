<?php
namespace sqmeru\BulletLineMainSystem\Form;

use pocketmine\form\Form;

use pocketmine\Player;

use sqmeru\BulletLineMainSystem;
use sqmeru\BulletLineMainSystem\Form\InfoForm;

class NewsForm implements Form
{
    public function __construct(Main $Main)
    {
        $this->Main = $Main;
    }

    public function handleResponse(Player $player, $data): void
    {
        if ($data === null) {
            return;
        }

        $player->sendForm(new MenuForm($this->Main));
    }

    public function jsonSerialize()
    {
        return [
            'type' => 'form',
            'title' => '[BulletLineMainSystem] §bお知らせ',
            'content' => "現在、βテスト中です",
            'buttons' => [
                [
                    'text' => '§c戻る'
                ]
            ],
        ];
    }
}