<?php

use Illuminate\Database\Seeder;
use App\Entry;
class EntryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //haciendo que el factory cree las entradas
        factory(Entry::class, 100)->create();
    }
}
