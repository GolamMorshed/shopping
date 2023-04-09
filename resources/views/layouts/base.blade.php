<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="{{asset('nav_design/style.css')}}">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="default.asp">Home</a></li>
                <li><a href="news.asp">News</a></li>
                <li><a href="contact.asp">Contact</a></li>
                <li><a href="about.asp">About</a></li>
            </ul>
        </nav>

        @yield('content')
    </body>
</html>
