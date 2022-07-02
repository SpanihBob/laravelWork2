<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Teatre extends Model
{
    // указываем имя таблицы с которой связывается модель
    protected $table = 'teatre';
    public $timestamps = false;//избавляемся от временных меток, которые нам не нужны
}

// создаем файл контроллера TeatreController.php в папке Controller