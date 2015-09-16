<?php

namespace Eduardober\Ola\Console\Commands;

use Illuminate\Console\Command;

class Ola extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ola';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'manda um ola';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Ola para voce');
    }
}
