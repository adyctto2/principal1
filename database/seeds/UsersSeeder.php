<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
    'name' => 'Ximena Denisse',
    'email' => 'anemix2021@gmail.com',
    'password' => bcrypt('12345'),
    'img' =>  '1.jpg'
  ]);
    }
}
