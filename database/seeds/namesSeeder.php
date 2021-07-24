<?php

use Illuminate\Database\Seeder;

class namesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Name::class,100)->create();
    }
}
