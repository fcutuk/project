<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-Glas</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Scripts -->
    @vite(['resources/css/style.css', 'resources/css/secondstyle.css', 'resources/js/script.js'])
</head>
<body class="font-sans bg-gray-background text-gray-900 text-sm border-gray">
{{--@dd($posts)--}}
<div class="sidebar close">
    <div class="logo-details">

        <span class="logo_name">E-Narod</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class='bx bx-compass'></i>
                <div class="link_name"><input type="text" placeholder="Pretraži.." style="width: 150px;"></div>
            </a>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-collection'></i>
                    <span class="link_name">Tip problema</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Tip problema</a></li>
                <li><a href="#">Saobraćaj</a></li>
                <li><a href="#">Ekologija</a></li>
                <li><a href="#">Javna Oštećenja</a></li>
                <li><a href="#">Ostalo</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="link_name">Datum</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Analytics</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-book-alt'></i>
                    <span class="link_name">Urgentnost</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu" style="color: white;">
                <li><label class="container">
                        Hitno
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label></li>
                <li><label class="container">
                        Standard
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label> <label class="container" style="margin-top: 7px;">
                        Rjeseno
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
            </ul>
        </li>

        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-book-alt'></i>
                    <span class="link_name">Broj komentara</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Posts</a></li>
                <li><a href="#">High</a></li>
                <li><a href="#">Low</a></li>
            </ul>
        </li>

        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <img src="resources/views/logo.jpg" alt="profileImg" title="ZOI-CODE '84" >
                </div>
                <div class="name-job">
                    <div class="profile_name">ZOI-CODE '84</div>

                </div>
                <i class='bx bx-log-out'></i>
            </div>
        </li>
    </ul>
</div>

<div class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <div clas="dropdown">

        </div>
    </div>

@foreach($posts as $post)
    <div  class="felx-container" style="margin-top: 15px; margin-left: 200px; margin-bottom:30px; display: flex; margin-right: 150px; border: solid red 2px; border-radius: 10px; height: 300px">
        <div style="background-color: #f1f1f1;
                    font-size: 30px;
                    width: 40%;
                    height: 100%;
                    text-align: center;">
            <p>{{$post->location}}</p>
            <img src="/resources/views/{{$post->image}}.jpg" alt="picture" style="width: 600px; height:600px">
        </div>

        <div style="background-color: #f1f1f1;
                    font-size: 30px;
                    width: 40%;
                    height: 100%">
            <h2 style="text-align: center;">{{$post->title}}</h2>
            <p>{{$post->description}}</p>
            <div class="buttons" style="display: flex; justify-content: center;">
                <button>VOTE</button>
            </div>
        </div>

        <div style="background-color: #1a202c;
                    font-size: 30px;
                    width: 20%;
                    height: 100%;
                    color: white">
            <div style="margin-left: 140px;
                        margin-top: 125PX;">
                {{$post->votes}}
                VOTES
            </div>
        </div>
    </div>
    @endforeach
</div>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
