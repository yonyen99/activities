<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('posts')->insert([
            'title' =>"hello",
            'body' =>"I never do ..."
        ]);
    }
}
