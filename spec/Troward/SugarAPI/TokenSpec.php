<?php namespace spec\Troward\SugarAPI;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Troward\SugarAPI\Config;
use Troward\SugarAPI\Token;

/**
 * Class TokenSpec
 * @package spec\Troward\SugarAPI
 */
class TokenSpec extends ObjectBehavior
{
    /**
     * @var
     */
    private $config;

    /**
     *
     */
    function let()
    {
        $this->config = new Config('', '', '', '', '');
        $this->beConstructedWith($this->config);
    }

    /**
     *
     */
    function it_is_initializable()
    {
        $this->shouldHaveType('Troward\SugarAPI\Token');
    }

    /**
     *
     */
    function it_creates_a_new_token()
    {
        $newToken = (new Token($this->config))->retrieve();

        // TODO
    }

}
