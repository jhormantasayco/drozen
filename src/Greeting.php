<?php

namespace Jhormantasayco\Drozen;

class Greeting
{

	/**
	 * Block comment
	 *
	 * @var $greetings
	 */
	protected $greetings = [
		"Hola",
		"Hello",
		"Bonjour",
		"Olá"
	];

	public function __construct($greetings = NULL){

		$greetings = $greetings ? (array) $greetings : [];

		$this->greetings = array_merge($this->greetings, $greetings);
	}

	/**
	 * Show a message greeting.
	 *
	 * @return void
	 */
	public function message(){

		$randomIndex = array_rand($this->greetings);

		return $this->greetings[$randomIndex];
	}

}