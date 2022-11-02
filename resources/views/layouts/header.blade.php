<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="{{ url('images/icon.png') }}">
    @vite(['resources/css/home.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Instagram</title>
</head>

<body>
    <header>
        <div class="first">
            <a href="/">
                <img class="logo" src="{{ url('images/logo.png') }}" alt="logo"/>
            </a>
            <span class="logo-nav">
                <i class="fa-solid fa-angle-down"></i>
            </span>
        </div>
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Search">
        </div>
        <div class="nav">
            <ul>
                <li class="menu-icon">

                    <i class="fa-solid fa-house"></i>
                </li>
                <li class="menu-icon">

                    <i class="fa-brands fa-facebook-messenger"></i>
                </li>
                <li class="menu-icon">

                    <i class="fa-regular fa-square-plus"></i>
                </li>
                <li class="menu-icon">

                    <i class="fa-regular fa-compass"></i>
                </li>
                <li class="menu-icon">

                    <i class="fa-regular fa-heart"></i>
                </li>
                <li>
                    <a href="/profile">
                        <img class="menu-icon dp" src="{{ url('images/dp.jpg') }}" alt="Profile Picture">
                    </a>
                </li>
            </ul>
        </div>
    </header>