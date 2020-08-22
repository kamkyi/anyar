<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
          [
            'name' => 'Wai',
            'email' => 'waihyn@gmail.com',
            'password' => bcrypt('control7'),
          ],
          [
            'name' => 'Ye',
            'email' => 'yenyo@gmail.com',
            'password' => bcrypt('12345678'),
          ],
          [
            'name' => 'Khin',
            'email' => 'khin@gmail.com',
            'password' => bcrypt('12345678'),
          ],
        ];

        foreach($users as $user){
             User::create($user);
        }
        //
       // factory(User::class, 10)->create();
    }
}
