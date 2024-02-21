<?php

namespace App\Models;

use App\Models\CRUD;

class Client extends CRUD
{
    protected $table = 'blog_commentaire';
    protected $primaryKey = 'id';
    protected $fillable = ['contenu', 'date', 'blog_article_id', 'blog_user_id'];
}
