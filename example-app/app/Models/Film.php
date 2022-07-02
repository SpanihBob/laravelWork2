<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    // указываем имя таблицы с которой связывается модель
    protected $table = 'film';
    public $timestamps = false;//избавляемся от временных меток, которые нам не нужны
}

// создаем файл контроллера FilmController.php в папке Controller