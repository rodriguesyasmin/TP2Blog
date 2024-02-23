<?php

namespace App\Models;

use App\Models\CRUD;

class User extends CRUD
{
    protected $table = 'blog_user';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'email', 'mot_de_passe'];
}
