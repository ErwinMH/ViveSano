@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Admin</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre profesional</th>
                                    <th>Usuario</th>
                                    <th>Mensaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mensaje as $mensaje)
                                    <tr>
                                        <td>{{ $mensaje->id }}</td>
                                        <td>{{ $mensaje->nombre_profesional }}</td>
                                        <td>{{ $mensaje->usuario }}</td>
                                        <td>{{ $mensaje->mensaje}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $mensaje->links() !!}
        </div>
    </div>
</div>





