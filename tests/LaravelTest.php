<?php

namespace Jhormantasayco\Drozen\Tests;

use Orchestra\Testbench\TestCase;
use Illuminate\Support\Facades\Artisan;
use Jhormantasayco\Drozen\GreetingServiceProvider;
use Jhormantasayco\Drozen\Facade\Greeting;
use Jhormantasayco\Drozen\Models\Greeting as GreetingModel;

class LaravelTest extends TestCase
{

	/**
	 * Block comment
	 *
	 * @return array
	 */
	protected function getPackageProviders($app) {

	    return [
	    	GreetingServiceProvider::class
	    ];
	}

	/**
	 * Block comment
	 *
	 * @return array
	 */
	protected function getPackageAliases($app) {

	    return [
	        'Greeting' => Greeting::class
	    ];
	}

	/**
	 * Define environment setup.
	 *
	 * @param  \Illuminate\Foundation\Application  $app
	 * @return void
	 */
	protected function getEnvironmentSetUp($app){

	    include_once __DIR__.'/../database/migrations/create_greetings_table.stub.php';

	    (new \CreateGreetingsTable)->up();
	}

	/** @test */
	public function the_console_output_returns_a_string(){

		$this->artisan('greeting');

		$this->assertIsString(Artisan::output());
	}

	/** @test */
	public function the_route_exists(){

		$this->get('/greeting')
				->assertViewIs('greeting::message')
				->assertViewHas('greeting')
				->assertStatus(200);
	}

	/** @test */
	public function it_record_access_the_database(){

		$oGreeting = new GreetingModel();
		$oGreeting->greeting = "Hello";
		$oGreeting->save();

		$oNewGreeting = GreetingModel::find(1);

		$this->assertSame($oNewGreeting->greeting, 'Hello');
	}
}