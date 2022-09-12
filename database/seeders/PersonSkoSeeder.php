<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PersonSko;

class PersonSkoSeeder extends Seeder
{

    function createPersonSko($person_id, $sko_id){
        PersonSko::create([
            'person_id' => $person_id,
            'sko_id' => $sko_id
        ]);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
	    $this->createPersonSko(1,1);
	    $this->createPersonSko(1,3);
	    $this->createPersonSko(2,2);
    }
}
