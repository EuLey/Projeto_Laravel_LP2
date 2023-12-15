<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


    
    <!-- Fonte do Google -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Grotesk" rel="stylesheet">

    <!-- CSS Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- CSS da aplicação -->

    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

</head>
    <body>
        <header>
            <nav>
            <div class="logo"><img src="img/logotur.png" width="200" height="200" alt="TurbCenter"></div>
                <div class= "mobile-menu">
                    <div class= "line1"></div>
                    <div class= "line2"></div>
                    <div class= "line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="/">Garagem</a></li>
                    <li><a href="/events/create">Criar Eventos</a></li>
                    @auth
                    <li><a href="/dashboard">Meus eventos</a></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" 
                         class="nav-link"
                         onclick="event.preventDefault();
                                this.closest('form').submit();">
                                <li>Sair</li>
                            </a>
                    </form>
                    @endauth
                    @guest
                    <li><a href="/login">Entrar</a></li>
                    <li><a href="/register">Cadastrar</a></li>
                    @endguest
                </ul>
            </nav>
        </header>
        <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content');
            </div>
        </div>
    </main>
    <script src="/js/mobile_navbar.js"></script>
    <Footer>
        TurbCenter &copy; 2023
    </Footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
