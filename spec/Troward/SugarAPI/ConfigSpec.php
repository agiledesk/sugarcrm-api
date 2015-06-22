<?php namespace spec\Troward\SugarAPI;

/**
 * Class ConfigSpec
 * @package spec\Troward\SugarAPI
 */
class ConfigSpec extends BaseSpec
{
    /**
     *
     */
    function let()
    {
        $this->beConstructedWith(
            $this->credentials['url'], $this->credentials['username'],
            $this->credentials['password'], $this->credentials['consumer_key'],
            $this->credentials['consumer_secret']
        );
    }

    /**
     *
     */
    function it_is_initializable()
    {
        $this->shouldHaveType('Troward\SugarAPI\Config');
    }

    /**
     *
     */
    function it_should_return_the_url()
    {
        $this->getUrl()->shouldBeString();
    }

    /**
     *
     */
    function it_should_return_the_username()
    {
        $this->getUsername()->shouldBeString();
    }

    /**
     *
     */
    function it_should_return_the_password()
    {
        $this->getPassword()->shouldBeString();
    }

    /**
     *
     */
    function it_should_return_the_consumer_key()
    {
        $this->getConsumerKey()->shouldBeString();
    }

    /**
     *
     */
    function it_should_return_the_consumer_secret()
    {
        $this->getConsumerSecret()->shouldBeString();
    }
}
