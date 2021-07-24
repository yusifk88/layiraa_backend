<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1;$i<=100;$i++) {
            \Illuminate\Support\Facades\DB::table('users')
                ->insert([
                    'name' => \Illuminate\Support\Str::random(10),
                    'email' => \Illuminate\Support\Str::random(10) . '@gmail.com',
                    'password' => \Illuminate\Support\Facades\Hash::make('password'),
                    'photo' => "https://picsum.photos/200"

                ]);
        }
    }
}
