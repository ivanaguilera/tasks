
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Crear nueva Administración</div>
 @include('flash::message') 
                <div class="panel-body">
                   {!! Form::open(['route'=> 'admin.store','method'=>'POST'])!!}
                     <div class='form-group'> 
                     {!! Form::label('nombre','Nombre o Razón Social') !!} 
                     {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre o Razon Social','required']) !!} 
                     </div>
                     <div class='form-group'>                     
                     {!! Form::label('rut','RUT') !!} 
                     {!! Form::text('rut',null,['class'=>'form-control','placeholder'=>'RUT','required']) !!} 
                     </div>
                     <div class='form-group'>                     
                     {!! Form::label('email','E-mail') !!} 
                     {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo electrónico','required']) !!} 
                     </div>
                     <div class='form-group'>                     
                     {!! Form::label('telefono','Teléfono') !!} 
                     {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required']) !!} 
                     </div>
                     <div class='form-group'>                     
                     {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!} 
                     </div>

                   {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
