<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_completo') }}
            {{ Form::text('nombre_completo', $reginformacion->nombre_completo, ['class' => 'form-control' . ($errors->has('nombre_completo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Completo']) }}
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $reginformacion->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::text('fecha_nacimiento', $reginformacion->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso_kg') }}
            {{ Form::text('peso_kg', $reginformacion->peso_kg, ['class' => 'form-control' . ($errors->has('peso_kg') ? ' is-invalid' : ''), 'placeholder' => 'Peso Kg']) }}
            {!! $errors->first('peso_kg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $reginformacion->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('enfermedades') }}
            {{ Form::text('enfermedades', $reginformacion->enfermedades, ['class' => 'form-control' . ($errors->has('enfermedades') ? ' is-invalid' : ''), 'placeholder' => 'Enfermedades']) }}
            {!! $errors->first('enfermedades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_de_cuerpo') }}
            {{ Form::text('tipo_de_cuerpo', $reginformacion->tipo_de_cuerpo, ['class' => 'form-control' . ($errors->has('tipo_de_cuerpo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Cuerpo']) }}
            {!! $errors->first('tipo_de_cuerpo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>