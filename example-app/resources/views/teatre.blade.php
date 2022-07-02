<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>       
    <div>
        <div>
            <h1>Кино</h1>
            <a href={{'http://127.0.0.1:8000'}} class="btn btn-sm btn-outline-secondary">Home</a>
        </div> 
        <div id="searchEvent">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">    
                        <script>
                            let poster = [];
                            let arr = {};
                        </script>

                        @foreach ($multiteatre as $teatre)      
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src={{ $teatre->Poster }}>
                                        <div class="card-body">
                                        <p class="card-text">{{ $teatre->Title }}</p>
                                        <p class="card-text text-truncate">{{ $teatre->Description }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" id={{ $teatre->Id }} >Подробнее</button>
                                                    </div>
                                                <small class="text-muted">{{ $teatre->Time }}</small>
                                            </div>
                                        </div>
                                </div>
                            </div>    
                            <script>                    //выводим данные Laravel (из БД) в JS
                                arr = {               
                                        'id': `{{ $teatre->Id  }}`,
                                        'Premiere': `{{ $teatre->Premiere  }}`,
                                        'Starring': `{{ $teatre->Starring  }}`,
                                        'Time': `{{ $teatre->Time  }}`,
                                        'Country': `{{ $teatre->Country  }}`,
                                        'Title': `{{ $teatre->Title  }}`,
                                        'Poster': `{{ $teatre->Poster  }}`,
                                        'Description': `{{ $teatre->Description  }}` 
                                        };        
                                        poster[ {{$teatre->Id}} ] = arr;     //добавляем обьект в массив
                                console.log(poster);
                            </script>
                        @endforeach
                    </div>        
                </div>
            </div>       
        </div>
    </div>
    <div id="completeEventInformation"></div>       <!-- div для вывода инфо о событии -->

    <script>
        let condition = true;                                                                   //состояние
        let favorite = document.getElementById("favorite");                                     //находим кнопку favorite
        let completeEventInformation = document.getElementById("completeEventInformation");     //находим div для вывода инфо о событии
        let searchEvent = document.getElementById("searchEvent");
        function condTrue() {               //  включено
                        condition = true; 
                        trueOrFalse()                       
                    }
        function condFalse() {              //  выключено
                        condition = false; 
                        trueOrFalse()                       
                    }
        function trueOrFalse() {            // вкл/выкл
            if (condition) {
                searchEvent.style.display = "block";
                completeEventInformation.style.display = "none";
            } else {
                searchEvent.style.display = "none";
                completeEventInformation.style.display = "flex";
            }
        }       
        trueOrFalse(); 
        searchEvent.addEventListener('click', (event) => {
                event.preventDefault();                                 //отключаем отправку формы при нажатии кнопки
                let target = event.target;                              //находим где был клик
                if (target.tagName == 'BUTTON') {                       //если это кнопка 
                    condFalse();                                         //переключатель переключаем
                    completeEventInformation.textContent = '';
                    let elemId = target.id;                             //находим id нажатой кнопки 
                    
                    let premiere = '';
                    if (poster[elemId].Premiere){
                        premiere = `<div><b>Premiere</b>: ${poster[elemId].Premiere}</div>`;                        
                    }                    
                    let time ='';
                    if (poster[elemId].Time){
                        time = `<div><b>Time</b>: ${poster[elemId].Time}</div>`;
                    }
                    let country='';
                    if (poster[elemId].Country){
                        country = `<div><b>Country</b>: ${poster[elemId].Country}</div>`;
                    }
                    let starring='';
                    if (poster[elemId].Starring){
                        starring = `<div><b>Starring</b>:${poster[elemId].Starring}</div>`;
                    }
                    let genre='';
                    if (poster[elemId].Genre){
                        genre = `<div><b>Genre</b>: ${poster[elemId].Genre}</div>`;
                    }
                    let stageDirector='';
                    if (poster[elemId].StageDirector){
                        stageDirector = `<div><b>StageDirector</b>: ${poster[elemId].StageDirector}</div>`;
                    }
                    let directed='';
                    if (poster[elemId].Directed){
                        directed = `<div><b>Directed</b>: ${poster[elemId].Directed}</div>`;
                    }

                    completeEventInformation.innerHTML = `<div><img style="width: 600px; margin: 10px" src="${poster[elemId].Poster}" alt="image"></div>
                                                        <div style="display:flex; flex-direction:column;">
                                                            <div>${poster[elemId].Title}</div>
                                                            ${starring}
                                                            ${premiere}
                                                            <div><b>Description</b>: ${poster[elemId].Description}</div>
                                                            ${directed}
                                                            ${time}
                                                            ${country}                                         
                                                            ${genre}
                                                            ${stageDirector}
                                                            <div><button class="btn btn-sm btn-outline-secondary" id=${poster[elemId].id} onclick="condTrue()">Back</button></div>
                                                            <div><a class="btn btn-sm btn-outline-secondary" href='http://127.0.0.1:8000/FavoritesTeatre/${poster[elemId].id}'>Add to favourites</a></div>`; 
                }
            })
    </script>
</body>