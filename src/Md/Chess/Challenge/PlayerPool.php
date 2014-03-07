<?php

namespace Md\Chess\Challenge;

use Md\Chess\Player;

interface PlayerPool
{
    public function add(Player $player);
} 