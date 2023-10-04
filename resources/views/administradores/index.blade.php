<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/navbar.js') }}"></script>
</head>
<body>
    <header>
        <h3>Administradores</h3>
        <div class="container">
            <div class="navbar">
                <a href="{{ route('cat.create') }}" class="btn">Crear Categoria</a>
                <a href="{{ route('admins.showcats') }}" class="btn">Ver categorias</a>
            </div>
        </div>
    </header>

    <br>
    <br>
    <div style="text-align: center; ">

    <br>
    <br>
    <h2>Comentarios</h2>
    <div style=" text-align: center">
        <table style="text-align: center; border:2px solid black">
            <tr>
                <td style="border:2px solid black; padding:5px">Descripcion</td>
                <td style="border:2px solid black; padding:5px">Fecha Y Hora</td>
                <td style="border:2px solid black; padding:5px">Tipo</td>
            </tr>
            @forelse ($comentario as $coment)
                <tr>
                <td style="border-right:2px solid black; padding:10px">{{$coment->descripcion}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$coment->fechahora}}</td>
                <td style="border-right:2px solid black; padding:10px">{{$coment->tipo}}</td>
                </tr>
             @empty
            @endforelse
        </table>
    </div>
    <br><br><br>
    <footer>
        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="contact-info">
                        <h3>Contacto</h3>
                       
                    </div>
                    <div class="description">
                        <h3>Descripción</h3>
                      
                    </div>
                    <div class="legal-terms">
                        <h3>Términos Legales</h3>
                    
                    </div>
                </div>
            </div>
        </footer>
    
</body>
</html>
