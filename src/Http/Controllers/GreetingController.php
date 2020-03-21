<?php

namespace Jhormantasayco\Drozen\Http\Controllers;
use Jhormantasayco\Drozen\Facade\Greeting;

class GreetingController
{

    /**
     * Block comment
     *
     * @return void
     */
    public function __invoke() {

    	return view('greeting::message', [
    		'greeting' => Greeting::message()
    	]);

        return Greeting::message();
    }

}