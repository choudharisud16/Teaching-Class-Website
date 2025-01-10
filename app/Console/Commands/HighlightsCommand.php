<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HighlightsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store:highlights';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exports the excel sheet regarding highlights';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
