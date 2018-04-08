<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 10; $i++){
            DB::table('users')->insert([
                'name' => "John$i",
                'email'=> "john$i@doe.fr",
                'password' => bcrypt('0000')
            ]);
        }
    }
}
