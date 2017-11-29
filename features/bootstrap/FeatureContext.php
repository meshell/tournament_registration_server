<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

require_once(__DIR__.'/../../vendor/autoload.php');
require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    private $hello;
    private $result;

    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^a hello dummy$/
     */
    public function aHelloDummy()
    {
        $this->hello = new \TRS\Hello();
    }

    /**
     * @When /^I command the dummy to say hello$/
     */
    public function iCommandTheDummyToSayHello()
    {
        $this->result = $this->hello->sayHello();
    }

    /**
     * @Then /^the dummy should say "([^"]*)"$/
     */
    public function theDummyShouldSay($arg1)
    {
      assertSame($arg1, $this->result);
    }

}