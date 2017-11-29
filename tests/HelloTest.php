<<?php

class HelloTest extends \PHPUnit_Framework_TestCase
{
    protected $hello;

    public function setUp()
    {
        $this->hello = new \TRS\Hello();
    }

    public function testSayHello()
    {
      $this->assertSame("hello world", $this->hello->sayHello());
    }
}
