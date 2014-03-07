<?php

namespace spec\Md\Chess;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Md\Chess\Player');
    }
}
