<?php

namespace Jhormantasayco\Drozen\Tests;

use PHPUnit\Framework\TestCase;
use Jhormantasayco\Drozen\Greeting;

class GreetingTest extends TestCase
{

	/** @test */
	public function it_greetings_say(){

		$oGreeting = new Greeting();

		$this->assertIsString($oGreeting->message());
	}

	/** @test */
	public function it_success(){

		$this->assertTrue(true);
	}

	public function test_it_false(){

		$this->assertFalse(false);
	}

}