<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'name' => 'Jorge A. Pérez J.',
            'email' => 'j@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        factory(Post::class, 24)->create();

    }
}
