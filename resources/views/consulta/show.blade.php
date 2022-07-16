@extends('layouts.app')

@section('template_title')
    {{ $consulta->name ?? 'Show Consulta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Consulta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consultas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $consultaArray['nombre'] }}
                        </div>
                        <div class="form-group">
                            <strong>Appaterno:</strong>
                            {{ $consultaArray['apPaterno'] }}
                        </div>
                        <div class="form-group">
                            <strong>Apmaterno:</strong>
                            {{ $consultaArray['apMaterno'] }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaconsulta:</strong>
                            {{ $consultaArray['fechaConsulta'] }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $consultaArray['motivo'] }}
                        </div>
                        <div class="form-group">
                            <strong>Diagnostico:</strong>
                            {{ $consultaArray['diagnostico'] }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamiento:</strong>
                            {{ $consultaArray['tratamiento'] }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $consultaArray['observaciones'] }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
