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
            'email' => 'admin@admin.com',
            'password' => bcrypt('Waihyn@022008'),
          ]
        ];

        foreach($users as $user){
             User::create($user);
        }
        //
       // factory(User::class, 10)->create();
    }
}
