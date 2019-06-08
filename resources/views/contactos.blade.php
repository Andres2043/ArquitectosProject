@extends('layout')

@section('title','Contactos')

@section('contenido')
   <div class="container">
       <br>
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <h1 style="font-size: 80px; font-family: 'Century Gothic'; text-align: center">Contactenos</h1>
                <hr>
                <p style="font-size: 20px; font-family: 'Century Gothic'; text-align: justify-all">Para conocer en detalle nuestro servicio, por favor comuníquese con la Servicio al Cliente en la
                   línea: 3183382975</p>
                <hr>
                <br>
            </div>
        </div>
       <div class="row">
            <div class="col-md-6">
           <form action="/Contact" class="form-group" method="POST">
               @csrf
               <label for="">Nombres</label>
               <input type="text" class="form-control" name="nombre" placeholder="Escriba sus nombres..." value="{{ old('nombre') }}">
               {!!$errors->first('nombre', '<small>:message</small><br>') !!}
               <br>
               <label for="">Apellidos</label>
               <input type="text" class="form-control" name="apellido" placeholder="Escriba sus apellidos..." value="{{ old('apellido') }}">
               {!!$errors->first('apellido', '<small>:message</small><br>') !!}
               <br>
               <label for="">Correo</label>
               <input type="text" class="form-control" name="email" placeholder="Escriba su Correo..." value="{{ old('email') }}">
               {!!$errors->first('email', '<small>:message</small><br>') !!}
               <br>

               <label for="">Proyecto de interes</label>
               <input type="text" class="form-control" name="proyecto" placeholder="Escriba su Proyecto..." value="{{ old('proyecto') }}">
               {!!$errors->first('proyecto', '<small>:message</small><br>') !!}
               <br>
               <label for="">Mensaje</label>
               <textarea name="mensaje" id="" cols="30" rows="10" class="form-control">{{ old('mensaje') }}</textarea>
               {!! $errors->first('mensaje', '<small>:message</small><br>') !!}
               <br>
               <button class="btn btn-dark" >Enviar</button>
           </form>
           </div>
                <div class="col-md-6">
               <img src="http://www.invisbu.gov.co/web_anterior/images/varias/contactenos.jpg"
                    alt="Panoramica" style="width: 800px; height: 600px"; border="">
                </div>
           </div>
   </div>
   <br>
   <br>
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

@endsection