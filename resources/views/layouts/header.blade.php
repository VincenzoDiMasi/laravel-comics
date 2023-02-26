@php
 $nav_links = config('navbarLinks')   
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics Laravel</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div id="blue-stripe">
            <ul>
                <li>
                    <a href=""></a>
                    <a href="#">DC POWER VISA</a>
                </li>
                <li>
                    <a href="#">ADDITIONAL DC SITES</a>
                </li>
            </ul>
            
        </div>
        <div class="container">
            <figure>
                <a href="#"> <img src="/img/dc-logo.png" alt="logo"></a>
            </figure>
            <nav>
                        <ul>
                            @foreach ($nav_links as $nav_link)
                            <li >
                                <a href="{{$nav_link['link']}}" >{{$nav_link['name']}}</a>
                            </li>
                            @endforeach
                        </ul>
            </nav>
                    
        </div>
        <div id="jumbotron">
            <button class="current-series">
                <strong>CURRENT SERIES</strong> 
            </button>
        </div>
                
     </header>


   
</body>
</html>