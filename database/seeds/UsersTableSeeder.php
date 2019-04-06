<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'first_name' => 'Freddie Mar',
            'last_name'  => 'Mañegos',
            'email'      => 'freddiemar.manegos@gmail.com',
            'password'   => bcrypt('Steven225'),
            'img'        => 'img/pic.png',
        ]);
    }
}
