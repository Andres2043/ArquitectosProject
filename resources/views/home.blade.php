@extends('layout')

@section('title','Home')


@section('contenido')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <br>
    <h1 style="font-size: 80px; font-family: 'Century Gothic'; text-align: center">BIENVENIDOS...</h1>
    <br>
    <br>
    <h1 style="font-size: 80px; font-family: 'Century Gothic'; text-align: center">Hernando Heredia Arquitectos LTDA.</h1>
    <br>
    <br>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://gonorsa.es/wp-content/uploads/2016/01/GONORSA-V.-Balf%C3%A9-13-3-hab-6-1500x400.jpg"
                         alt="Panoramica">
                </div>
                <div class="item">
                    <img src="http://gonorsa.es/wp-content/uploads/2015/12/IMG_4771-1500x400.jpg" alt="Hall">
                </div>
                <div class="item">
                    <img src="http://gonorsa.es/wp-content/uploads/2015/12/IMG_4749-1500x400.jpg" alt="Alcobas">
                </div>
                <div class="item">
                    <img src="http://gonorsa.es/wp-content/uploads/2015/12/IMG_4751-1500x400.jpg" alt="Baños">
                </div>
                <div class="item">
                    <img src="http://gonorsa.es/wp-content/uploads/2015/12/IMG_4774-1500x400.jpg" alt="Pasillo">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <br>
        <br>
        <h2 style="text-align: center; font-family: 'Century Gothic'; font-size: 50px;">Elige Tu Proyecto</h2>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3" style="border:solid 2px black; margin: 15px;">
                <h4 style="font-family: 'Century Gothic'"><strong>Proyecto -</strong></h4>
                <h4 style="font-family: 'Century Gothic'"><strong>Cerezos</strong></h4>
                <img src="http://photos.verinmuebles.com/bl-1438806134-25980.jpg" alt="" style="width: 230px">
                <br>
                <br>
                <button class="btn btn-success"><a href=""></a>Ver</button>
                <br>
                <br>
            </div>
            <div class="col-md-3" style="border:solid 2px black; margin: 15px;">
                <h4 style="font-family: 'Century Gothic'"><strong>Proyecto -</strong></h4>
                <h4 style="font-family: 'Century Gothic'"><strong>Cambulos</strong></h4>
                <img src="https://imganuncios.mitula.net/vendo_apartamento_ciudadela_colsubsidio_6910026522936794113.jpg"
                     alt="" style="width: 230px">
                <br>
                <br>
                <button class="btn btn-success"><a href=""></a>Ver</button>
                <br>
                <br>
            </div>
            <div class="col-md-3" style="border:solid 2px black; margin: 15px;">
                <h4 style="font-family: 'Century Gothic'"><strong>Proyecto -</strong></h4>
                <h4 style="font-family: 'Century Gothic'"><strong>Las Margaritas</strong></h4>
                <img src="https://i.ytimg.com/vi/OhsxnbkXKeg/hqdefault.jpg" alt="" style="width: 230px">
                <br>
                <br>
                <button class="btn btn-success"><a href=""></a>Ver</button>
                <br>
                <br>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3" style="border:solid 2px black; margin: 15px;">
                <h4 style="font-family: 'Century Gothic'"><strong>Proyecto -</strong></h4>
                <h4 style="font-family: 'Century Gothic'"><strong>San Isidro</strong></h4>
                <img src="https://imganuncios.mitula.net/casa_en_venta_en_cucuta_via_tennis_san_isidro_8020115520611314273.jpg"
                     alt="" style="width: 230px">
                <br>
                <br>
                <button class="btn btn-success"><a href=""></a>Ver</button>
                <br>
                <br>
            </div>
            <div class="col-md-3" style="border:solid 2px black; margin: 15px;">
                <h4 style="font-family: 'Century Gothic'"><strong>Proyecto -</strong></h4>
                <h4 style="font-family: 'Century Gothic'"><strong>Santa Helena</strong></h4>
                <img src="https://imganuncios.mitula.net/casa_facatativa_conjunto_residencial_parque_de_santa_helena_9010085531326424431.jpg"
                     alt="" style="width: 230px">
                <br>
                <br>
                <button class="btn btn-success"><a href=""></a>Ver</button>
                <br>
                <br>
            </div>
            <div class="col-md-3" style="border:solid 2px black; margin: 15px;">
                <h4 style="font-family: 'Century Gothic'"><strong>Proyecto -</strong></h4>
                <h4 style="font-family: 'Century Gothic'"><strong>Los Alpes</strong></h4>
                <img src="https://i.ytimg.com/vi/VleNob06riQ/hqdefault.jpg"
                     alt="" style="width: 230px">
                <br>
                <br>
                <button class="btn btn-success"><a href=""></a>Ver</button>
                <br>
                <br>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div style="background-color: black">
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 style="color: white; font-family: 'Century Gothic'">Hernando Heredia Arquitectos</h4>
                    <a href="" style="
                    font-family: 'Century Gothic'; color: white;">Quines Somos</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Proyectos</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Contacto</a>
                </div>
                <div class="col-md-4">
                    <h4 style="color: white; font-family: 'Century Gothic'">Nuestros Proyectos</h4>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Cerezos</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Cambulos</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Las Margaritas</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">San Isidro</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Santa Elena</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Los Alpes</a>
                    <br>
                </div>
                <div class="col-md-4">
                    <h4 style="color: white; font-family: 'Century Gothic'">Servicios</h4>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Compras OnLine</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Servio de Chat</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Compras Desde el Exterior</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Remueve Tu Informacion</a>
                    <br>
                    <a href="" style="font-family: 'Century Gothic'; color: white;">Visitamos Tu Empresa</a>
                    <br>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
    </html>
    @endsection
