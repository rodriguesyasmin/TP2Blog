<?php

namespace App\Models;

use App\Models\CRUD;

class Categorie extends CRUD
{
    protected $table = 'blog_categorie';
    protected $primaryKey = 'id';
    protected $fillable = ['nom'];
}
