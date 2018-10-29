<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'abc@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => new DateTime(),
            ]
        ]);
    }
}
