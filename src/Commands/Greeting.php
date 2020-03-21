<?php

namespace Jhormantasayco\Drozen\Commands;

use Jhormantasayco\Drozen\Facade\Greeting as GreetingFacade;
use Illuminate\Console\Command;

class Greeting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greeting';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show a greeting message';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(){

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param  \App\DripEmailer  $drip
     * @return mixed
     */
    public function handle(){

        $this->info(GreetingFacade::message());
    }
}