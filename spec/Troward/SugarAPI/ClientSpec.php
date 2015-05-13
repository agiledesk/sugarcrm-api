<?php namespace spec\Troward\SugarAPI;

use GuzzleHttp\Exception\ClientException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Troward\SugarAPI\Client;
use Troward\SugarAPI\Config;
use Troward\SugarAPI\Token;

class ClientSpec extends ObjectBehavior {

    /**
     * @var
     */
    private $config;

    function let()
    {
        $this->config = new Config('', '', '', '', '');
        $this->beConstructedWith($this->config);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Troward\SugarAPI\Client');
    }

    function it_runs_a_post_request_and_returns_successful_response()
    {
        // TODO
    }
}
