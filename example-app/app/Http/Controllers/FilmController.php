<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;          //подключаем Request
// подключаем модель в контроллер
use App\Models\Film;
use App\Models\Favorites;


class FilmController extends Controller
{
    public function table()
    {
        // берем все из модели News.php
        $result = Film::all();
        // возвращаем файл news.blade.php и выводим все столбцы из таблицы в результат
        return response($result->toJson(JSON_UNESCAPED_UNICODE), 200);  //чтобы в JSON выводить данные на кириллице!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Ы
    }

    public function output()
    {
        // берем все из модели Film.php
        $result = Film::all();
        // возвращаем файл news.blade.php и выводим все столбцы из таблицы в результат
        return view('mywelcome', ['multifilm'=>$result]);
    }

    public function cinema()
    {
        // берем все из модели Film.php
        $result = Film::all();
        // возвращаем файл news.blade.php и выводим все столбцы из таблицы в результат
        return view('film', ['multifilm'=>$result]);
    }

    public function addtofavorite($id)
    {
        $result = Film::all()->where('Id', $id)->first();
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