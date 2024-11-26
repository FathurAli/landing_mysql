<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi
    protected $table = 'menus';

    // Relasi ke submenu (children)
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // Relasi ke parent menu
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
}