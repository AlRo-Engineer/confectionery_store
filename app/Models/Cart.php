<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts'; // указываем, что модель должна работать с таблицей 'carts'

    protected $fillable = ['session_id']; // указываем, что поле 'session_id' может быть массово назначено
}
