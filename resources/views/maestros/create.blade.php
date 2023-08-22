@extends('welcome')

@section('titulo', 'Crear Estudiantes')

@section('contenido')

<form action="/maestros" method="post">
    @csrf
    <div>
        <label for="" class="form-label">Codigo</label>
        <input type="number" name="codigo" id="codigo" class="form-control">
        @error('codigo')
            <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
        @error('nombre')
        <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Apellido Paterno</label>
        <input type="text" name="apellidopaterno" id="apellidopaterno" class="form-control">
        @error('apellidopaterno')
        <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Apellido Materno</label>
        <input type="text" name="apellidomaterno" id="apellidomaterno" class="form-control">
        @error('apellidomaterno')
        <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">NSS</label>
        <input type="number" name="nss" id="nss" class="form-control">
        @error('nss')
        <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <div>
        <label for="" class="form-label">Correo</label>
        <input type="email" name="correo" id="correo" class="form-control">
        @error('correo')
        <small style="color: red">{{$message}}</small>
        @enderror
    </div>
    <a href="/maestros" class="btn btn-danger text-light">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>


@endsection