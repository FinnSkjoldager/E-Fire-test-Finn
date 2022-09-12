<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    //protected $table = 'person';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::factory()->count(5)->create();
    }
}
