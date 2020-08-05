<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style='margin-bottom: 30px;'>
    <a class="navbar-brand" href="{{ route('home') }}">MarketPlace</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @auth
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(request()->is('admin/stores*')) active @endif ">
                    <a class="nav-link" href="{{ route('admin.stores.index') }}">Lojas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if(request()->is('admin/products*')) active @endif">
                    <a class="nav-link" href="{{ route('admin.products.index') }}">Produtos</a>
                </li>
                <li class="nav-item @if(request()->is('admin/categories*')) active @endif">
                    <a class="nav-link" href="{{ route('admin.categories.index') }}">Categorias</a>
                </li>
            </ul>
            <div class="my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                @if(!Auth::guest())
                    <a class='nav-link'>{{ Auth::user()->name }}</a>
                @endif  
                </li>

                <li class="nav-item">
                    <a class="nav-link" href='#' onclick="event.preventDefault(); document.querySelector('form.logout').submit(); ">Sair</a>
                    <form action="{{ route('logout') }}" method="post" class='logout' style='display:none;'>
                        @csrf
                    </form>
                </li>
            
            </ul>
            
            </div>
        </div>
    @endauth    
    </nav>

    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    
</body>
</html>