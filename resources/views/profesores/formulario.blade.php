@extends('principal')

@section('titulo', 'Alta Profesores')

@section('contenido')

@if (!isset($profesor))
    {!! Form::open(['route' => 'profesores.store', 'class' => 'text-left']) !!}
@else
    {!! Form::model($profesor, ['route' => ['profesores.update', $profesor->id]]) !!}

    {!! Form::hidden('_method','PUT') !!}
    
@endif
    <div class="row mt-5 form-group justify-content-center">
        <div class="col-md-2">
            {!! Form::label('nombre', 'Nombre: ') !!}
        </div>
        <div class="col-md-6">
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del profesor'])  !!}
        </div>
    </div>
    <div class="row mt-5 form-group justify-content-center">
        <div class="col-md-2">
            {!! Form::label('apellido1', 'Apellido Paterno: ') !!}
        </div>
        <div class="col-md-6">
            {!! Form::text('apellido1', null, ['class' => 'form-control'])  !!}
        </div>
    </div>
    <div class="row mt-5 form-group justify-content-center">
        <div class="col-md-2">
            {!! Form::label('apellido2', 'Apellido Materno: ') !!}
        </div>
        <div class="col-md-6">
            {!! Form::text('apellido2', null, ['class' => 'form-control'])  !!}
        </div>
    </div>
    <div class="row mb-5 form-group justify-content-center">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary'])  !!}
    </div>

{!! Form::close() !!}

@endsection