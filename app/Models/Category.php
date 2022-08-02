<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // route model binding => mengubah nilai default pencarian menjadi slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
