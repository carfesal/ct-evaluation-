
@extends('persona.layout')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Editar Persona</h2>
               </div>
               <div class="pull-right">
                   <a class="btn btn-primary" href="{{ route('persona.index') }}"> Back</a>
               </div>
           </div>
       </div>
      
       @if ($errors->any())
           <div class="alert alert-danger">
               <strong>Whoops!</strong> There were some problems with your input.<br><br>
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
     
       <form action="{{ route('persona.update',$persona->id) }}" method="POST">
          
           @method('put')
           @csrf
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Nombre:</strong>
                       <input type="text" name="nombre" value="{{ $persona->nombre }}" class="form-control" placeholder="Nombre">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Apellido:</strong>
                       <input type="text" class="form-control" value="{{ $persona->apellido }}" style="height:150px" name="apellido" placeholder="Detail">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Fecha nacimiento:</strong>
                       <input type="date" class="form-control" style="height:150px" value="{{ $persona->fecha_nacimiento }}" name="fecha_nacimiento" placeholder="Detail">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genero:</strong>
                <div class="form-check">
                    <input class="form-check-input" value="m" type="radio" name="genero" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="f" type="radio" name="genero" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Femenino
                    </label>
                </div>
            </div>
        </div>
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">Editar</button>
               </div>
           </div>
      
       </form>
   @endsection