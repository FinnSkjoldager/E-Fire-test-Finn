<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sko;

class SkoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $skonavne = [
            'Air forces',
            'Ballet shoe.',
            'Bast shoe.',
            'Blucher shoe.',
            'Boat shoe.',
            'Brogan (shoes)',
            'Brogue shoe.',
            'Brothel creeper.'
        ];  
        $skofarve = [
            'Rød',
            'Grøn',
            'Blå',
            'Sort',
            'Hvid',
            'Lilla',
            'Brun',
            'Grå'
        ];  
        for ($i=0; $i < count($skonavne); $i++) { 
	    	Sko::create([
                'beskrivelse' => $skonavne[$i],
                'storrelse' => fake()->numberBetween(34, 52),
                'farve' => $skofarve[$i],
                'pris' => fake()->numberBetween(500, 2000),
                'antal' => fake()->numberBetween(0, 30),
	        ]);
    	}
    }
}
