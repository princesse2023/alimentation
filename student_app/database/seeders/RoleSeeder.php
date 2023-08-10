<?php

namespace Database\Seeders;

use App\Models\Produit;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'libele'=>'Administrateur',
        ]);
        Role::create([
            'libele'=>'gerant',
        ]);
}
}