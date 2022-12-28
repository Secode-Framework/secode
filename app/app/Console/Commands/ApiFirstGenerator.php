<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Secode\Parser\Parser;

class ApiFirstGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'secode:apifirst-generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $parser = new Parser();
        $parser->setDtoClassPath(app_path('Dto'));
        $parser->setControllerInterfacePath(app_path('Http\Controllers'));
        $parser->setApiRoutesYmlPath(seCodePath());

        $parser->ymlToCode(seCodePath('apifirst.yml'));
        return Command::SUCCESS;
    }
}
