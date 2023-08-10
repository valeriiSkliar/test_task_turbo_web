use PHPUnit\Framework\TestCase;

class DogTest extends TestCase {
	public function testMopsSound() {
	  $dog = new Mops();
	  $this->assertEquals("woof! woof!", $dog->sound());
	}
}
