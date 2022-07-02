<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    // указываем имя таблицы с которой связывается модель
    protected $table = 'musica';
    public $timestamps = false;//избавляемся от временных меток, которые нам не нужны
}

// создаем файл контроллера MusicaController.php в папке Controller