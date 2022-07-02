<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;          //подключаем Request
// подключаем модель в контроллер
use App\Models\Teatre;
use App\Models\Favorites;


class TeatreController extends Controller
{
    public function teatre()
    {
        // берем все из модели Musica.php
        $result = Teatre::all();
        // возвращаем файл news.blade.php и выводим все столбцы из таблицы в результат
        return view('teatre', ['multiteatre'=>$result]);
    }
    public function addtofavorite($id)
    {
        $result = Teatre::all()->where('Id', $id)->first();
        $mouse = Favorites::all()->where('Title', $result->Title)->first(); //если есть фильм с таким названием
        if($mouse)return redirect('http://127.0.0.1:8000/');//если есть фильм с таким названием то возвращаем redirect
        else                                                //иначе добавляем в избранное
        $req = Favorites::insertGetId([
            'Premiere'=>$result->Premiere,
            'Starring'=>$result->Starring,
            'Time'=>$result->Time,
            'Country'=>$result->Country,
            'Title'=>$result->Title,
            'Poster'=>$result->Poster,
            'Description'=>$result->Description
        ]);
        return redirect('http://127.0.0.1:8000/');  //функция redirect() создает переадресацию на ссылку или файл  
    }  
}