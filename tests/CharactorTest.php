<?php
class CharactorTest extends PHPUnit_Framework_TestCase
{
  public function testConstructable()
  {
    $this->assertInstanceOf('Charactor', new \Charactor());
  }
  
  public function testHasAttributes()
  {
    $attributes=['hp','bp','atk','def'];
    foreach($attributes as $attribute){
      $this->assertClassHasAttribute($attribute,'Charactor');
    }
  }
  
}
