<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap');
            .registrar {
            font-family: 'Roboto Slab', serif;
            /* Agrega aquí cualquier otro estilo que desees para tus h1 */
        }
            </style>
            
    </head>
    <body class="">
        <header>

        </header>
        <main>
            @yield('contenido')
        </main>
        
    </body>
</html>
