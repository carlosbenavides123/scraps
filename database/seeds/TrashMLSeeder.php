<?php

use Illuminate\Database\Seeder;
use App\TrashML;

class TrashMLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TrashML::class, 1000)->create();
    }
}
