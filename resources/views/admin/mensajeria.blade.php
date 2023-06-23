

<div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre Profesional</th>
                                    <th>Usuario</th>
                                    <th>Mensaje</th>
                                    

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mensaje as $mensaje)
                                    <tr>
                                        <td>{{ $mensaje->id }}</td>
                                        <td>{{ $mensaje->nombre_profesional }}</td>
                                        <td>{{$mensaje>usuario }}</td>
                                        <td>{{ $mensaje->mensaje }}</td>
                                        

                                        <td>    
                                                <a class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#myModal{{$user->id}}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver usuario') }}</a>
                                         
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>