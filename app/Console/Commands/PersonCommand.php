<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Person;

class PersonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'person:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List personer';

    /**
     * Execute the console command.
     *
     * @return int
     */
    // RUN php artisan person:list
    public function handle()
    {
        echo "start person:list".PHP_EOL;
        //$personer = Person::all();
        $person = Person::find(1);
        echo $person.PHP_EOL;  
        echo $person->navn.PHP_EOL;  
        echo $person->personsko.PHP_EOL;  
        return;
        foreach($personer as $person)
            echo $person.PHP_EOL;  
    }
}
