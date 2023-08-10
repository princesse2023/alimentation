<?php

namespace Database\Seeders;

use App\Models\Produit;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit::create([
            'nom'=>'lipton',
            'prix'=> 150,
            'category_id'=>1,
            'date_production'=>Carbon::create('2021','01','02'),
            'date_peremtion'=>Carbon::create('2021','01','02'),
            'photo'=>'tyuitr'

        ]);
        Produit::create([
            'nom'=>'sucre',
            'prix'=> 200,
            'category_id'=>2,
            'date_production'=>Carbon::create('2021','01','02'),
            'date_peremtion'=>Carbon::create('2021','01','02'),
            'photo'=>'tyuitr'

        ]);
        Produit::create([
            'nom'=>'riz',
            'prix'=> 10000,
            'category_id'=>3,
            'date_production'=>Carbon::create('2021','01','02'),
            'date_peremtion'=>Carbon::create('2021','01','02'),
            'photo'=>'tyuitr'

        ]);
        Produit::create([
            'nom'=>'pommade',
            'prix'=> 3000,
            'category_id'=>4,
            'date_production'=>Carbon::create('2021','01','02'),
            'date_peremtion'=>Carbon::create('2021','01','02'),
            'photo'=>'tyuitr'

        ]);


       

    }
}
