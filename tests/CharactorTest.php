<?php
class CharactorTest extends PHPUnit_Framework_TestCase
{
  public function testConstructable()
  {
    $this->assertInstanceOf('Charactor', new \Charactor());
  }
}
