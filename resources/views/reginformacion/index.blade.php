@extends('layouts.app')

@section('template_title')
    Reginformacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reginformacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reginformacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        <th>No</th>
                                        
										<th>User Id</th>
										<th>Nombre Completo</th>
										<th>Email</th>
										<th>Fecha Nacimiento</th>
										<th>Peso Kg</th>
										<th>Sexo</th>
										<th>Enfermedades</th>
										<th>Tipo De Cuerpo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reginformacions as $reginformacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reginformacion->UserId }}</td>
											<td>{{ $reginformacion->nombre_completo }}</td>
											<td>{{ $reginformacion->email }}</td>
											<td>{{ $reginformacion->fecha_nacimiento }}</td>
											<td>{{ $reginformacion->peso_kg }}</td>
											<td>{{ $reginformacion->sexo }}</td>
											<td>{{ $reginformacion->enfermedades }}</td>
											<td>{{ $reginformacion->tipo_de_cuerpo }}</td>

                                            <td>
                                                <form action="{{ route('reginformacions.destroy', $reginformacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reginformacions.show',$reginformacion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reginformacions.edit',$reginformacion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reginformacions->links() !!}
            </div>
        </div>
    </div>
@endsection
