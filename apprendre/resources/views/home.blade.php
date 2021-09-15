<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apprendre Laravel</title>

       
    </head>
    <body>
        <h1>Salut dépuis la Côte d'Ivoire</h1>

        <p>Il est présentement {{date ('H:i A')}}.</p>
        <footer>&copy; Copyright {{ date ('Y')}} &middot; <a href="#">About Us</a></footer>
    </body>
</html>
