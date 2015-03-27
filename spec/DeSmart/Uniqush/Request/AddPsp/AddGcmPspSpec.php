<?php

namespace spec\DeSmart\Uniqush\Request\AddPsp;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AddGcmPspSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('test', '123', 'qwe');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\AddPsp\AddGcmPsp');
        $this->shouldImplement('DeSmart\Uniqush\Request\RequestInterface');
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldReturn('/addpsp');
    }

    function it_returns_query()
    {
        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'pushservicetype' => 'gcm',
            'projectid' => '123',
            'apikey' => 'qwe',
        ));
    }
}
