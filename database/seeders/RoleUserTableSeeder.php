<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::findOrFail(1)->roles()->sync(1); // owner

        User::findOrFail(2)->roles()->sync(2); // master1
        User::findOrFail(3)->roles()->sync(2); // master2

        User::findOrFail(4)->roles()->sync(3); // agent1
        User::findOrFail(5)->roles()->sync(3); // agent2
        User::findOrFail(6)->roles()->sync(3); // agent3
        User::findOrFail(7)->roles()->sync(3); // agent4

        User::findOrFail(8)->roles()->sync(4); // player
        User::findOrFail(9)->roles()->sync(4); // player
        User::findOrFail(10)->roles()->sync(4); // player
        User::findOrFail(11)->roles()->sync(4); // player
        User::findOrFail(12)->roles()->sync(5); // player
    }
}