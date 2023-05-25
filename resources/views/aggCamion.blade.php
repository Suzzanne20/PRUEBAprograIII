@extends('layout/plantilla')
@section('tituloPagina', 'Neko')
@section('navbar')
@section('contenido')

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid"> 
        <h3 class="col-10">Registro de Camiones</h3> 
        <form class="d-flex">
            <a href="{{ route('transporte.index') }}" class="btn btn-dark ">Regresar</a>
        </form>
    </div>
</nav>  
<br><br>

<div class="card">


    <h5 class="card-header row-cols-3">Nuevo Registro</h5>

    <div class="card-body">

        <h5 class="card-tittle">Ingrese los datos:</h5>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square " viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
        <div class="modal-dialog text text-center">
        <p class="card-text">

            <form action="">
 
                <div class="input-group input-group-lg">
                    <span class="input-group-text col-4" id="inputGroup-sizing-lg">Placa</span>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-text col-4" id="inputGroup-sizing-lg">Marca</span>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-text col-4" id="inputGroup-sizing-lg">Color</span>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-text col-4" id="inputGroup-sizing-lg">Modelo</span>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-text col-4" id="inputGroup-sizing-lg">Capacidad</span>
                    <input type="text" class="form-control" name="rsocial" required>
                </div>
                <br><br>
                <button type="submit" class="btn btn-info">Guardar</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </form>

        </p></div>

    </div>
</div>








@endsection