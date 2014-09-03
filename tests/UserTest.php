class UserTest extends PHPUnit_Framework_TestCase
{
  public function testConstructable()
  {
    $this->assertInstanceOf('User', new \User());
  }
  
}
