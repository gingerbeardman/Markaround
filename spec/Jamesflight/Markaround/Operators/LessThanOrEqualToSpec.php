<?php

namespace spec\Jamesflight\Markaround\Operators;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LessThanOrEqualToSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jamesflight\Markaround\Operators\LessThanOrEqualTo');
    }

    function it_can_compare_two_different_integer_strings()
    {
        $this->compare('01', '06')->shouldBe(true);
    }

    function it_can_compate_two_same_integer_strings()
    {
        $this->compare('1', '1')->shouldBe(true);
    }

    function it_can_compare_two_strings()
    {
        $this->compare('b', 'a')->shouldBe(false);
    }

    function it_can_mix_datatypes()
    {
        $this->compare(5, '1')->shouldBe(false);
    }
}
