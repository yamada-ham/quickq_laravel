<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'name' => 'test name',
        'email' => 'test@example.com',
        'password' => bcrypt('secret')
      ];
      DB::table('users')->insert($param);
    }
}
