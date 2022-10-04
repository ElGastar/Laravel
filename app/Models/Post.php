<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * называния таблицы,усли таблица называется posts
     * а модел называется Post, то можно не переопределять это свойства
     * например можно указать таблицу users
     *  protected $table="users";
     */
    protected $table="posts";//
}
