<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>E-GLAS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondstyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
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
                    <img src="image/logo-zoi.jpg" alt="profileImg" title="ZOI-CODE '84">
                </div>
                <div class="name-job">
                    <div class="profile_name">ZOI-CODE '84</div>

                </div>
                <i class='bx bx-log-out'></i>
            </div>
        </li>
    </ul>
</div>
<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <div clas="dropdown">

        </div>

    </div>
    <div class="container" style="margin: 30px;width: 95%;">
        <div class="row">
            <div class="col-md-4">
                <div class="left-side">
                    <img src="" alt="">
                    <p>LOKACIJA</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="middle">
                    <h3>TITLE</h3>
                    <p>Description</p>
                    <div class="buttons">
                        <button>"VOTE"</button>
                        <button>button</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" background-color: red;
                                      border-radius: 1px;
                                      border-top-right-radius: 53px;
                                      border-bottom-right-radius: 53px;">
                <div class="right-side">
                    <h2>48</h2>
                    <h1>VOTES</h1>
                </div>
            </div>
        </div>
    </div>



    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
