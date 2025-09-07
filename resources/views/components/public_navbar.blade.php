<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <nav class="navigation_section">

        <div class="navigation_content">

            <div class="navigation_left">
                <a class="menu_link menu_logo" href="">The Used Suspects</a>
                <div class="web_menu_links">
                    <a class="menu_link" href="">Home</a>
                    <a class="menu_link" href="">About</a>
                    <a class="menu_link" href="">Contact</a>
                    <a class="menu_link" href="">News</a>
                    <a class="menu_link" href="">Careers</a>
                </div>
            </div>
            <div class="navigation_right">
                <a class="primary_button" href="">Cars for sale<i class="bi bi-arrow-right"></i></a>
                <a class="secondary_button" href="">Login</a>
            </div>
            <button class="menu_toggle" onclick="toggleMenu()"><i class="bi bi-list"></i></button>

        </div>

    </nav>