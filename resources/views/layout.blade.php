<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Arquitectos AJ')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .active a{
            color: black;
            background-color: white;
            text-decoration: none;
        }
        nav{
            background-color: #000000;
            height: 40px;
        }
        nav ul{
            text-align: center;
            list-style: none;

        }
        nav ul li{
            display: inline;
        }
        nav ul li a{
            color: white;
            padding: 20px;
            font-size: 20px;
        }
    </style>
</head>
<body>

 @include('All.navbar')
  @yield('contenido')

</body>
</html>