@extends('layouts.app')

@section('template_title')
    {{ $mensaje->name ?? "{{ __('Show') Mensaje" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mensaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mensajes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Profesional:</strong>
                            {{ $mensaje->nombre_profesional }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mensaje->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Mensaje:</strong>
                            {{ $mensaje->mensaje }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
