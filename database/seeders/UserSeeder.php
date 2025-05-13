<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'surname' => 'гаврилович',
            'name' => 'софья',
            'patronymic' => 'валентиновна',
            'email' => 'user@mail.ru',
            'password' => Hash::make('123123123'),
            'birthday' => '2006.06.06'
        ]);
    }
}
