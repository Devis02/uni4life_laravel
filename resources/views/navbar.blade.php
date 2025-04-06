<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleFeed.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleSaldo.css') }}">
    <title>Uni4Life - Feed</title>
</head>
<body>
    <header>
        <div class="banner">
            <a href="/feed">
                <div><img  id="logobranco" src="{{ asset('images/UNI4LIFE_logo_branco.png') }}" alt=""></div>
            </a>
            
        </div>
    </header>
    <div class="container">
        <nav class="sidebar">
            <h1 id="logoFeed">Olá,</h1>
            <ul><b>
                <a href="/feed" class='link'>
                    <div>
                        <li><img class="iconsSideBar" src="{{ asset('images/home.png') }}" alt="">PÁGINA INICIAL</li>
                    </div>
                </a>    
            
                <li> <img class="iconsSideBar" src="" alt="">EXPLORAR</li>
                <li> <img class="iconsSideBar" src="" alt="">BIBLIOTECA</li>
                <a href="/saldo" class ="link">
                    <div>
                        <li> <img class="iconsSideBar" src="{{ asset('images/dolar.png') }}" alt="">SALDO</li>
                    </div>
                </a>
                <li> <img class="iconsSideBar" src="" alt="">CRIAR</li>
                <a href="/perfil" class="link">
                    <li> <img class="iconsSideBar" src="{{ asset('images/perfil.png') }}" alt="">PERFIL</li>
                </a>
                <a href="/logout" class="link">
                    <div class="logout">
                        <li> <img class="iconsSideBar" src="" alt="">LOGOUT</li>
                    </div>
                </a>
                
            </b></ul>
        </nav>
    </div>

</html>