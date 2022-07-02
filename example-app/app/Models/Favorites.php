<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    // указываем имя таблицы с которой связывается модель
    protected $table = 'favorites';
    public $timestamps = false;//избавляемся от временных меток, которые нам не нужны
}

// создаем файл контроллера FavoritesController.php в папке Controller