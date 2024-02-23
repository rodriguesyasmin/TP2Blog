<?php

namespace App\Models;

use App\Models\CRUD;

class Article extends CRUD
{
    protected $table = 'blog_article';
    protected $primaryKey = 'id';
    protected $fillable = ['titre', 'contenu', 'date', 'blog_categorie_id', 'blog_user_id'];
}
