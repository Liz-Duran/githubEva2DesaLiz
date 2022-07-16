<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $consulta->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apPaterno') }}
            {{ Form::text('apPaterno', $consulta->apPaterno, ['class' => 'form-control' . ($errors->has('apPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Appaterno']) }}
            {!! $errors->first('apPaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apMaterno') }}
            {{ Form::text('apMaterno', $consulta->apMaterno, ['class' => 'form-control' . ($errors->has('apMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apmaterno']) }}
            {!! $errors->first('apMaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaConsulta') }}
            {{ Form::date('fechaConsulta', $consulta->fechaConsulta, ['class' => 'form-control' . ($errors->has('fechaConsulta') ? ' is-invalid' : ''), 'placeholder' => 'Fechaconsulta']) }}
            {!! $errors->first('fechaConsulta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivo') }}
            {{ Form::text('motivo', $consulta->motivo, ['class' => 'form-control' . ($errors->has('motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
            {!! $errors->first('motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('diagnostico') }}
            {{ Form::text('diagnostico', $consulta->diagnostico, ['class' => 'form-control' . ($errors->has('diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico']) }}
            {!! $errors->first('diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tratamiento') }}
            {{ Form::text('tratamiento', $consulta->tratamiento, ['class' => 'form-control' . ($errors->has('tratamiento') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento']) }}
            {!! $errors->first('tratamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $consulta->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>