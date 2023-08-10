<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom'=>'BADO',
            'role_id'=>1,
            'prenom'=>'Karim',
            'email'=>' karim@gmail.com',
            'telephone'=>75676426,
            'password' => bcrypt('azertyui'),
        ]);
    }
}
