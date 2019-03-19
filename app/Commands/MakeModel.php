<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class MakeModel extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'craft:model';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Crafts model';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('craft:model handler');
    }
}
