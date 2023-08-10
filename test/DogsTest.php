require_once '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class DogsTest extends TestCase {
	public function testMopsSound() {
	  $dog = new Mops();
	  $this->assertEquals("woof! woof!", $dog->sound());
	}
}
