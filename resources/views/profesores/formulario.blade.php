{!! Form::open(['route' => 'profesores.store', 'class' => 'text-left']) !!}
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
{!! Form::close() !!}
