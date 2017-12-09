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
        $user = App\User::create([
        'name' => 'muax',
        'email' => 'muax000@gmail.com',
        'password' => bcrypt('2860'),
        'admin'=> 1
        ]);

       App\Profile::create([

       'user_id' => $user->id,
       'avatar' => 'uploads/avatars/displaypic.png',
       'about' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim magnam deleniti quisquam necessitatibus nisi aut aliquid maxime, sunt alias, dolorem facilis quam ad ratione aliquam non quaerat quasi reprehenderit. Velit.',
       'facebook' => 'facebook.com',
       'youtube' => 'youtube.com' 


      ]);

    }
}
