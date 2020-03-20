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
	public function true_is_true(){

		$this->assertTrue(true);
	}

	public function test_false_is_false(){

		$this->assertFalse(false);
	}

}