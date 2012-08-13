<?php

require_once './testString.php';
require_once '/usr/share/pear/PHPUnit/Autoload.php';

class testStringtest extends PHPUnit_Framework_TestCase {
	public function testReturnString() {
		$texto = new SaySomething();
		$this->assertEquals('hi there',$texto->greet());
	}
}
?>
