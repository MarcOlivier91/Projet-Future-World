<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'categorie',
        'marque',
        'nom',
        'description',
        'quantite',
        'image',
        'prix',
        'timestamps',
    ];

    public $table = "product";
}
