<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // hanya name, image, dan description yang bokeh diisi
    protected $fillable = ['name', 'image', 'description'];

    //categori memiliki banyak menu
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'category_menu');
    }
}
