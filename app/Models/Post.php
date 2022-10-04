<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * называния таблицы,усли таблица называется posts
     * а модел называется Post, то можно не переопределять это свойства
     * например можно указать таблицу users
     *  protected $table="users";
     */
    protected $table="posts";//называние таблицы связанной с моделью
    protected $guarded  = []; //защищенные поля таблицы,если массив пустой то поля можно заполнять
   // protected $fillable = []; //разрешенные поля для заполнения
}
