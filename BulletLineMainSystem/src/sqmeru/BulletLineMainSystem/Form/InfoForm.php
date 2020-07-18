<?php
namespace sqmeru\BulletLineMainSystem\Form;

use pocketmine\form\Form;

use pocketmine\Player;

class InfoForm implements Form{

    public function handleResponse(Player $player, $data): void
    {
        if ($data === null) {
            return;
        }

        $player->sendForm(new self);
    }

    public function jsonSerialize()
    {
        return [
            'type' => 'form',
            'title' => '§bMainSystem§f>>§c運営チームからのお知らせ',
            'content' => "現在、βテスト中です",
            'buttons' => [
                [
                    'text' => '§c閉じる'
                ]
            ],
        ];
    }
}