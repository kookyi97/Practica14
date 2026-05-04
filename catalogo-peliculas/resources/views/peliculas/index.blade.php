<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Películas</title>
</head>
<body>

<h1> Catálogo de Películas</h1>

@foreach($peliculas as $pelicula)
    <div style="border:1px solid #ccc; padding:10px; margin:10px;">
        <h2>{{ $pelicula->nombre }}</h2>
        <p>{{ $pelicula->descripcion }}</p>
        <small>Año: {{ $pelicula->anio }}</small>
    </div>
@endforeach

</body>
</html>