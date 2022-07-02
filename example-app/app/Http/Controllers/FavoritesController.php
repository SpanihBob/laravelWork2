<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;          //подключаем Request
// подключаем модель в контроллер
use App\Models\Favorites;


class FavoritesController extends Controller
{
    public function favorites()
    {
        // берем все из модели Musica.php
        $result = Favorites::all();
        // возвращаем файл news.blade.php и выводим все столбцы из таблицы в результат
        return view('favorites', ['multifavorites'=>$result]);
    }
    public function destroy($id)
    {
        $article = Favorites::where('Id', '=', $id)->delete();
        //возвращаем таблицу, указывая имя маршрута с таблицей
        return redirect('http://127.0.0.1:8000/');  //функция redirect() создает переадресацию на ссылку или файл        
    }
}