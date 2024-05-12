<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>carlos-sena2024</title>
</head>
<body>
    <h1 class="text-3xl text-red-600 font-bold underline">
        Hello world!
    </h1>
    <h1>Suplementacion Deportiva Bienvenidos</h1>
    <ul>
        @foreach ($productos as $producto)
            <li>
                {{ $producto['nombre'] }}
                ${{ $producto['precio'] }}
            </li>    
        @endforeach
    </ul>
</body>
</html>