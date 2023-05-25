@extends('layout/plantilla')
@section('tituloPagina', 'Neko')
@section('navbar')
@section('contenido')

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
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad</th>
                    <th>Transporte</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach ($datosCamion as $item)
                    <tr>
                        <td>{{ $item->id_camion}}</td>
                        <td>{{ $item->placa }}</td>
                        <td>{{ $item->marca }}</td>
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->modelo }}</td>
                        <td>{{ $item->capacidad }}</td>
                        <td>{{ $item->id_transporte }}</td>
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