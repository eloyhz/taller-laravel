{{-- @extends('principal')

@section('titulo', 'Alta Alumnos')

@section('contenido') --}}

@if(!isset($alumno))
    {!! Form::open(['route' => 'alumnos.store', 'files' => true, 'class' => 'text-left']) !!}
@else
    {!! Form::model($alumno, 
        [ 'route' => ['alumnos.update', $alumno->id],
          'files' => true
        ] ) !!}
    
    {!! Form::hidden('_method', 'PUT') !!}
    
@endif

    <div class="row mt-5 form-group justify-content-center">
        <div class="col-md-2">
            {!! Form::label('nombre', 'Nombre: ') !!}
        </div>
        <div class="col-md-6">
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del alumno'])  !!}
        </div>
        <div id="nombre_"></div>
    </div>
    <div class="row mt-5 form-group justify-content-center">
        <div class="col-md-2">
            {!! Form::label('apellido1', 'Apellido Paterno: ') !!}
        </div>
        <div class="col-md-6">
            {!! Form::text('apellido1', null, ['class' => 'form-control'])  !!}
        </div>
        <div id="apellido1_"></div>
    </div>
    <div class="row mt-5 form-group justify-content-center">
        <div class="col-md-2">
            {!! Form::label('apellido2', 'Apellido Materno: ') !!}
        </div>
        <div class="col-md-6">
            {!! Form::text('apellido2', null, ['class' => 'form-control'])  !!}
        </div>
        <div id="apellido2_"></div>
    </div>
    <div class="row mt-5 form-group justify-content-center">
        <div class="col-md-2">
            {!! Form::label('id_carrera', 'Carrera: ') !!}
        </div>
        <div class="col-md-6">
            {{-- {!! Form::select('id_carrera', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'custom-select'])  !!} --}}
            {!! Form::select('id_carrera', $carreras, null, ['class' => 'custom-select'])  !!}
        </div>
    </div>
    <div class="row mt-5 form-group justify-content-center">
        <div class="col-md-2">
            {!! Form::label('foto', 'Foto: ') !!}
        </div>
        <div class="col-md-6">
            {!! Form::file('foto') !!}
        </div>
    </div>
    {{--  <div class="row mb-5 form-group justify-content-center">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary'])  !!}
    </div>  --}}

{!! Form::close() !!}

{{-- @endsection --}}


{{-- 
    <form action="" class="text-left">

    <div class="row mt-5 form-group">
        <div class="col-md-4">
            <label for="">Nombre </label>
        </div>
        <div class="col-md-8">
            <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Nombre del alumno">
        </div>
    </div>

    <div class="row mt-5 form-group">
        <div class="col-md-4">
            <label for="">Apellido Paterno </label>
        </div>
        <div class="col-md-8">
            <input type="text"
            class="form-control" name="apellido1" id="" aria-describedby="helpId" placeholder="Apellido Paterno">
        </div>
    </div>

    <div class="row mt-5 form-group">
        <div class="col-md-4">
            <label for="">Apellido Materno </label>
        </div>
        <div class="col-md-8">
            <input type="text"
            class="form-control" name="apellido2" id="" aria-describedby="helpId" placeholder="Apellido Materno">
        </div>
    </div>

    <div class="row mt-5 form-group">
            <div class="col-md-4">
                <label for="">Carrera </label>
            </div>
            <div class="col-md-8">
                <input type="text"
                class="form-control" name="carrera" id="" aria-describedby="helpId" placeholder="Carrera">
            </div>
        </div>
        
    <button type="submit" class="mb-5 btn btn-primary">Registrar</button>

</form> 

--}}


