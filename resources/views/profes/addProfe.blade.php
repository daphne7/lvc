@extends('layouts.app')

@section('content')

@include('mensajes')

<div class="row justify-content-center">
    @if ($update !=0)
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h1 class="card-title text-center">ACTUALIZAR DATOS DEL PROFESOR <hr></h1>
            <form class="forms-sample" method="post" action="{{ route('profe.update', $profe->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
            <div class="row mb-3">
                 <div class="col-md-6">
                        <label for="exampleInputUsername1">Nombres</label>
                        <input type="text" name="nombres" class="card-title form-control" value="{{ $profe->nombres }}" required>
                    </div>

                     <div class="col-md-6">
                        <label for="exampleInputUsername1">Apellido Paterno</label>
                        <input type="text" name="ap_paterno" class="card-title form-control" value="{{ $profe->ap_paterno }}" required>
                    </div>
              </div>       
             

            <div class="row mb-3"> 
                    <div class="col-md-6">
                        <label for="exampleInputUsername1">Apellido Materno</label>
                        <input type="text" name="ap_materno" class="card-title form-control" value="{{ $profe->ap_materno }}" required>
                    </div>
        
            
                     <div class="col-md-6">
                        <label for="exampleInputUsername1">Direccion Actual</label>
                        <input type="text" name="direccion" class="card-title form-control" value="{{ $profe->direccion }}" required>
                    </div>
            </div>        


            <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="exampleInputUsername1">Carnet de Identidad</label>
                        <input type="text" name="ci" class="card-title form-control" value="{{ $profe->ci }}" required>
                    </div>
                 <div class="col-md-6">
                        <label for="exampleInputUsername1">Pais</label>
                        <input type="text" name="pais" class="card-title form-control" value="{{ $profe->pais }}" required>
                    </div>
            </div>



             <div class="row mb-3">
                <div class="col-md-6">
                        <label for="exampleInputUsername1">Departamento</label>
                        <input type="text" name="departamento" class="card-title form-control" value="{{ $profe->departamento }}" required>
                    </div>
                <div class="col-md-6">
                        <label for="exampleInputUsername1">Provincia</label>
                        <input type="text" name="provincia" class="card-title form-control" value="{{ $profe->provincia }}" required>
                    </div>
            </div>

            
            <div class="row mb-3">
                <div class="col-md-6">
                        <label for="exampleInputUsername1">Localidad</label>
                        <input type="text" name="localidad" class="card-title form-control" value="{{ $profe->localidad}}" required>
                    </div>
                <div class="col-md-6">
                        <label for="exampleInputUsername1">numero de telefono o celular</label>
                        <input type="number" name="num_cel" class=" card-title form-control" value="{{ $profe->num_cel }}" required>
                    </div>
            </div>

            
            <div class="row mb-3">
                <div class="col-md-6">
                        <label for="exampleInputUsername1">Correo Electronico</label>
                        <input type="text" name="email" class=" form-control" value="{{ $profe->email }}" required>
                </div>
                <div class="col-md-6">
                        <label for="exampleInputUsername1">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nac" class="card-title form-control" value="{{ $profe->fecha_nac }}" required>
                    </div>
            </div>
            
            
            <div class="row mb-3">
                   <div class="col-md-6">
                        <label for="exampleInputUsername1">Sexo</label>
                         <select id="inputState" class="form-select card-title" name="genero" required>
                                 <option value="Hombre" {{($profe->genero == 'Hombre')?'selected':null}}>Hombre</option>
                                 <option value="Mujer" {{($profe->genero == 'Mujer')?'selected':null}}>Mujer</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputUsername1">Estado Civil</label>
                         <select id="inputState" class="card-title form-select" name="estado_civil" required>
                          <option value="Soltero" {{($profe->estado_civil == 'Soltero')?'selected':null}}>Soltero</option>
                          <option value="Casado" {{($profe->estado_civil == 'Casado')?'selected':null}}>Casado</option>
                          <option value="Divorciado" {{($profe->estado_civil == 'Divorciado')?'selected':null}}>Divorciado</option>
                          <option value="Viudo" {{($profe->estado_civil == 'Viudo')?'selected':null}}>Viudo</option>
                        </select>
                    </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-6">
                        <label for="exampleInputUsername1">Profesi??n</label>
                        <input type="text" name="profesion" class="card-title form-control" value="{{ $profe->profesion }}" required>
                    </div>
                 <div class="col-md-6">
                        <label for="exampleInputUsername1">Rut No</label>
                        <input type="text" name="rut" class="card-title form-control" value="{{ $profe->rut }}" required>
                    </div>
            </div>

           <div class="row  mb-5">
                    <div class="col-md-6">
                        <label for="exampleInputUsername1" style="text-align: center;">Foto actual</label>
                        <br>
                        @if ($profe->foto_profesor !=NULL)
                            <img src="/fotosProfes/{{ $profe->foto_profesor }}" alt="foto profe" style="max-width: 100px; margin: 0 auto;">
                        @else
                            <img class="card-img-top" src="{{ asset('images/users.png') }}" alt="Foto-Profe" class="imgs" style="width:100px; margin: 0 auto;">
                        @endif
                        
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputUsername1">Cambiar Foto del Profesor</label>
                        <input type="file" name="foto_profesor" class="form-control">
                    </div>
                </div>
    
                
                <div class="form-group text-center">
                    <button type="submit" class="card-title btn btn-primary mr-2 mb-3">Actualizar Datos</button>
                    <a href="/"  class="card-title btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
                </div>
            </form>
            </div>
        </div>
    </div>



<!-- //////////////////////////////////registro//////////////////////////////////////////////////////////////////// -->



    
    @else
    <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">REGISTRAR NUEVO PROFESOR <hr></h2>
        <form class="forms-sample" method="post" action="{{ route('profe.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Nombres</label>
                <input type="text" name="nombres" class="card-title form-control" required>
            </div>

            <div class="form-group">
                <label>Apellido Paterno</label>
                <input type="text" name="ap_paterno" class="card-title form-control" required>
            </div>
            <div class="form-group">
                <label>Apellido Materno</label>
                <input type="text" name="ap_materno" class="card-title form-control" required>
            </div>

             <div class="form-group">
                <label>Direccion Actual</label>
                <input type="text" name="direccion" class="card-title form-control" required>
            </div>

            <div class="form-group">
                <label for="exampleInputUsername1">Carnet De Identidad</label>
                <input type="text" name="ci" class="card-title form-control" required>
            </div>

            <!-- ///////////////////////////////////////////////////////////-->
            <div class="form-group">
                 <label for="exampleInputUsername1">Pais de Nacimiento</label>
                <select name="pais" class="card-title form-control">
                       
                           <option value="Bolivia">BOLIVIA</option>
                           <option value="Argentina">ARGENTINA</option>
                           <option value="Chile">CHILE</option>
                           <option value="Colombia">COLOMBIA</option>
                           <option value="Ecuador">ECUADOR</option>
                           <option value="Guyana">GUYANA</option>
                           <option value="Guyana Francesa">GuYANA FRANCESA</option>
                           <option value="Per??">PERU</option>
                           <option value="Uruguay">URUGUAY</option>
                           <option value="Venezuela">VENEZUELA</option>
                           <option value="OTRO">OTRO</option>

                    </select>
            </div>

            <div class="form-group">
                 <label for="exampleInputUsername1">Departamento de Nacimiento</label>
                <select name="departamento" class="card-title form-control">

                           <option value="POTOSI">POTOSI</option>
                           <option value="BENI">BENI</option>
                           <option value="CHUQUISACA">CHUQUISACA</option>
                           <option value="Colombia">COCHABAMBA</option>
                           <option value="Ecuador">LA PAZ</option>
                           <option value="ORURO">ORURO</option>
                           <option value="PANDO">PANDO</option>
                           <option value="SANTA CRUZ">SANTA CRUZ</option>
                           <option value="TARIJA">TARIJA</option>

                    </select>
            </div>
            <div class="form-group">
                <label>Provincia de Nacimiento</label>
                <input type="text" name="provincia" class="card-title form-control" required>
            </div>

            <div class="form-group">
                <label>Localidad de Nacimiento</label>
                <input type="text" name="localidad" class="card-title form-control" required>
            </div>
           
           <div class="form-group">
                <label for="exampleInputUsername1">Telefono o Celular Personal</label>
                <input type="number" name="num_cel" class="card-title form-control" required>
            </div>

            <div class="form-group">
                <label for="exampleInputUsername1">Correo Electronico</label>
                <input type="email" name="email" class=" form-control" required>
            </div>
               
            <div class="form-group">
                <label for="exampleInputUsername1">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nac" class="card-title form-control" required>
            </div>

            <div class="form-group">
                <label for="exampleInputUsername1">Sexo</label>
                    <select name="genero" class="card-title form-control">
                           <option value="Masculino">Masculino</option>
                           <option value="Femenino">Femenino</option>
                    </select>
            </div>

             <div class="form-group">
                     <label for="exampleInputUsername1">Estado Civil</label> 
                    <select name="estado_civil" class="card-title form-control">
                       
                           <option value="Soltero(a)">Soltero(a)</option>
                           <option value="Casado(a)">Casado(a)</option>
                           <option value="Divorciado(a)">Divorciado(a)</option>
                           <option value="Viudo(a)">Viudo(a)</option>
                    </select>
                </div> 

            
            <div class="form-group">
                <label for="exampleInputUsername1">Profesi??n</label>
                <input type="text" name="profesion" class="card-title form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputUsername1">RUT No</label>
                <input type="text" name="rut" class="card-title form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputUsername1">Foto del Profesor</label>
                <input type="file" name="foto_profesor" class="card-title form-control">
                </div>


            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mr-2 mb-3">Registrar</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>


@if($profes->count())
<div class="col-md-8 grid-margin stretch-card">
<div class="card">
    <div class="card-body">
    <h4 class="card-title text-center">LISTA DE PROFESORES  <strong>( {{ $profes->count() }} )</strong></h4>
    <div class="table-responsive">
        <table class="table table-hover">
        <thead>
            <tr>
        
            <th>Docente</th>
            <th>Apellido</th>  
            <th>C??dula</th>
            <th>Tel??fono</th>
            <th>Acci??n</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profes as $profe)
            <tr>
                <td><h6><font style="text-transform: uppercase;">{{ $profe->nombres }}</font></h6></td>
                <td><h6><font style="text-transform: uppercase;">{{ $profe->ap_paterno }}</font></h6></td>
                <td><h6>{{ $profe->ci }}</h6></td>  
                <td><h6>{{ $profe->num_cel }}</h6></td>

                <td style="float: right">
                    <form action="{{ route('profe.destroy', $profe->id) }}" method="POST">
                        <a class="btn btn-inverse-primary" href="{{ route('profe.show',$profe->id) }}"  style="padding: 8px 15px !important;" title="Ver Detalles">
                            <i class="mdi mdi-account-card-details"></i> Ver
                        </a>
                        <a class="btn btn-inverse-success" href="{{ route('profe.edit',$profe->id) }}"  style="padding: 8px 5px !important;" title="Actualizar Registro">
                            <i class="mdi mdi-autorenew"></i>Actualizar
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-inverse-danger"  style="padding:  8px 5px !important;" title="Borrar Alumno">
                            <i class="mdi mdi-delete-sweep"></i>Borrar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>

        <br><br>
        <div class="form-group text-center mt5">
            {!! $profes->links() !!}
        </div>
           
        </div>
    </div>
</div>
</div>

@else
<p> No se ha creado ning??n Profesor </p>
@endif  <!----->

@endif <!--FIN DEL UPDATE--->



</div>
@endsection