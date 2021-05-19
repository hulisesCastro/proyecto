<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta>
        <meta>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>tailwind</title>
    </head>
    <body>

        <div class="container">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-2 gap-0.5">
    <div class="bg-blue-500 sm:col-sapan-2 md:col-span-3 lg:col-span-4">A</div>
    <div class="bg-blue-600 row-span-3 col-start-2 row-start-4">B</div>
    <div class="bg-blue-700 col-span-3 col-start-2">C</div>
    <div class="bg-blue-800 row-start-10">D</div>

</div>
</div>

    </body>
</html>