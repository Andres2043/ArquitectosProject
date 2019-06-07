@extends('layout')

@section('title','Contactos')

@section('contenido')
   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ducimus illo in incidunt
                    laboriosam, molestiae odit, perferendis quisquam sit sunt unde, voluptas? Esse, ex itaque
                    modi mollitia perspiciatis quis sint!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut cupiditate debitis illum
                    molestias necessitatibus nemo, quaerat sit unde vel! Pariatur, porro, provident. Aperiam dolores
                    ipsam magnam magni nesciunt quibusdam!</p>
            </div>
        </div>
       <div class="row">

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
   </div>

@endsection