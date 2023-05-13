@extends('layout/plantilla')
@section('tituloPagina', 'Neko')
@section('contenido')

<img src="https://www.pngall.com/wp-content/uploads/5/Vector-Truck.png" height="40">
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid"> 
        <h2 class="col-10">Neko Transporte</h2> 
        <form class="d-flex">
            <a href="{{ route('transporte.create') }}" class="btn btn-dark ">Agregar Transporte</a>
        </form>
    </div>
</nav>  

<br><br>
<div class="card">
    <h5 class="card-header row-cols-3">Listado de Transporte</h5>

    <div class="card-body">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
        </svg>

        <p class="card-text"><div class="table table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Razon Social</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->razon_social }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div></p>

    </div>
</div>


<div class="row">
    <h7>Nos reservamos el derecho de admision</h7>

    <br>
   
    
 
    
</div>
@endsection