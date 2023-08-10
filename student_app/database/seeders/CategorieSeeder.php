<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
            'nom'=>'produit laitier',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        Categorie::create([
            'nom'=>'insecticide',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        Categorie::create([
            'nom'=>'cereales',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        Categorie::create([
            'nom'=>'cosmetiques',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
