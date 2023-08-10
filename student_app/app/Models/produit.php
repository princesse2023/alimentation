<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'date de production',
        'date de peremtion',
        'photo',
        'prix',
        'category_id',
    ];
    public function category(){
        return $this->belongsTo(Categorie::class);
    }
}
