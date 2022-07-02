<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
    <!-- <body class="container">
        <h1>news.blade.php</h1> -->
        <!-- <a class="btn btn-primary" href={{'http://127.0.0.1:8000/createform'}}>Add News</a> -->
        <!-- <hr> -->
             <!-- $products - то что мы передаем из контроллера -->
              <!-- @foreach ($multifilm as $film)                
            <h2> {{ $film->Genre }}</h2>
            <h2> {{ $film->Premiere }}</h2>
            <h2> {{ $film->Starring }}</h2>
            <h2> {{ $film->Description }}</h2>
            <h2> {{ $film->Country }}</h2>
            <h2> {{ $film->Title }}</h2>
            <h2> {{ $film->Poster }}</h2>                                
        <hr>
        @endforeach -->
    <!-- <script>
        Document.write({{
            @foreach ($multifilm as $film)                
            <h2> {{ $film->Genre }}</h2>
            <h2> {{ $film->Premiere }}</h2>
            <h2> {{ $film->Starring }}</h2>
            <h2> {{ $film->Description }}</h2>
            <h2> {{ $film->Country }}</h2>
            <h2> {{ $film->Title }}</h2>
            <h2> {{ $film->Poster }}</h2>                                
        <hr>
        @endforeach}});
    </script>
</body> -->


<body id="body">
<h3><pre>
    Задание:  
    events: [
	{
		-id: number
		-type: object
		--кино
		--спектакли
		--концерты
		-info: object
		--date
		--description
		-favorite: boolean
	},
]
1) Создайте React приложение, отображающее события (концерты, спектакли, кино, и т.д.) в вашем городе. 
События должны быть поделены по категориям. При клике на конкретном событии должна отображаться информация 
об событии. Должна быть возможность добавить событие в список избранных событий. Необходимо при создании
приложения использовать компоненты, props, state, маршруты (redux по желанию)

2) На Angular реализоваь точно такое же приложение, но без маршрутов

3) Реализовать точно такое же приложение на чистом JS
	*почитать про уровни абстракции и максимально их использовать
</pre>   
</h3>  
<div class="header">
    <div>
        <h1 class="headerH1">Афиша Ижевска</h1>
    </div>
    <form id="searchForm" action="">
        <button class="myButton" id="cinema">Cinema</button>    
        <button class="myButton" id="performance">Performance</button>
        <button class="myButton" id="concert">Concert</button>
        <button class="myButton" id="favorites">&#10084; Favorites</button>
    </form>
</div>
    <!-- <div id="foundEvents"></div>                    div для вывода событий -->
    <!-- <div id="completeEventInformation" class="completeInfo"></div>       div для вывода инфо о событии -->
       
    <!-- <script>
        let condition = true;                                                                   //состояние
        const searchForm =  document.getElementById('searchForm');                              //находим форму с кнопками
        const searchEvent = document.getElementById('foundEvents');                             //находим div для вывода событий
        const completeEventInformation = document.getElementById("completeEventInformation");   //находим div для вывода инфо о событии
        function condTrue() {
                        condition = true; 
                        trueOrFalse()                       
                    }
        function condFalse() {
                        condition = false; 
                        trueOrFalse()                       
                    }
        function trueOrFalse() {
            if (condition==true) {
                searchEvent.style.display = "grid";
                completeEventInformation.style.display = "none";
            } else {
                searchEvent.style.display = "none";
                completeEventInformation.style.display = "grid";
            }
        }
            
        const poster = {
            cinema: $multifilm,
            performance: ,
            concert: ,
            favorites:[]
            }
        let idName; 
        console.log(poster.cinema);
        searchForm.addEventListener('click', (event) => {                       //функция нажатия кнопки submit
            event.preventDefault();                                             //отменяем перезагрузку страницы
            let target = event.target;                                          //находим где был клик
            if (target.tagName == 'BUTTON') { 
                condTrue();              
                idName = target.id;                                             //находим id нажатой кнопки 
                searchEvent.innerHTML='';
                poster[idName].map(al =>  { 
                    const chaildDiv = document.createElement('div');            //создаем div
                    searchEvent.append(chaildDiv);                              //вставляем его в родительский div(из html) 
                    chaildDiv.innerHTML=`   <div><img src="${al.Poster}" alt="image"></div>
                                            <div>${al.Title}</div>
                                            <div><button id=${al.id}>info</button></div>`
                return idName;                         
                })         
            }            
            foundEvents.addEventListener('click', (event) => {
                let target = event.target;                              //находим где был клик
                if (target.tagName == 'BUTTON') {                       //если это кнопка 
                    condFalse();
                    completeEventInformation.textContent = '';
                    let elemId = target.id;                             //находим id нажатой кнопки 
                     
                    let premiere = '';
                    if (poster[idName][elemId-1].Premiere){
                        premiere = `<div><b>Premiere</b>: ${poster[idName][elemId-1].Premiere}</div>`;                        
                    }                    
                    let time ='';
                    if (poster[idName][elemId-1].Time){
                        premiere = `<div><b>Time</b>: ${poster[idName][elemId-1].Time}</div>`;
                    }
                    let country='';
                    if (poster[idName][elemId-1].Country){
                        country = `<div><b>Country</b>: ${poster[idName][elemId-1].Country}</div>`;
                    }
                    let starring='';
                    if (poster[idName][elemId-1].Starring){
                        starring = `<div><b>Starring</b>:${poster[idName][elemId-1].Starring}</div>`;
                    }
                    let genre='';
                    if (poster[idName][elemId-1].Genre){
                        genre = `<div><b>Genre</b>: ${poster[idName][elemId-1].Genre}</div>`;
                    }
                    let stageDirector='';
                    if (poster[idName][elemId-1].StageDirector){
                        stageDirector = `<div><b>StageDirector</b>: ${poster[idName][elemId-1].StageDirector}</div>`;
                    }
                    let directed='';
                    if (poster[idName][elemId-1].Directed){
                        directed = `<div><b>Directed</b>: ${poster[idName][elemId-1].Directed}</div>`;
                    }                    
                    
                    completeEventInformation.innerHTML = `<div><img style="width: 80%; margin: 10px" src="${poster[idName][elemId-1].Poster}" alt="image"></div>
                                                        <div style="display:flex; flex-direction:column;">
                                                            <div class="filmName">${poster[idName][elemId-1].Title}</div>
                                                            ${starring}
                                                            ${premiere}
                                                            <div><b>Description</b>: ${poster[idName][elemId-1].Description}</div>
                                                            ${directed}
                                                            ${time}
                                                            ${country}                                         
                                                            ${genre}
                                                            ${stageDirector}
                                                            <div style="margin:auto;"><button class="button" id=${poster[idName][elemId-1].id} onclick="condTrue()">Back</button></div>
                                                            <div style="margin:auto;"><button id="favorite">Add to favourites</button></div>`; 

                    favorite.addEventListener("click",function(){               //функция добавления события в избранное
                        if(!poster.favorites.includes(poster[idName][elemId-1])) {   //если событие в списке отсутствует(includes()), 
                            poster.favorites.push(poster[idName][elemId-1]);         //добавляем событие
                            // console.log(poster.favorites);
                        }                       
                    })
                }
            })
        })   
    </script> -->
<!-- </body> -->
</html>
