<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    const WRITERS_SIZE = 4;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = factory(User::class)->create(['email' => 'cms@site.com', 'password' => 'qwertyu']);
        $user->assignRole('admin');

        for ($i = 0; $i < self::WRITERS_SIZE; $i++) {
            $user = factory(User::class)->create([]);
            $user->assignRole('writer');
        }

    }
}
