<?php

namespace spec\Md\BecauseChessFileSystemBridge;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FileSystemPlayerPoolSpec extends ObjectBehavior
{
    function it_should_be_a_player_pool()
    {
        $this->shouldHaveType('Md\Chess\Challenge\PlayerPool');
    }


}
