@extends('layouts.app')

@section('content')
@include('mensajes')



<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

        <h2 class="text-center mb-3">ACTUALIZAR DATOS DEL ALUMNO <hr></h2>
        <form class="forms-sample" method="post" action="{{ route('alumno.update', $alumno->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
            <div class="row">
           
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Nombres</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombres" class="card-title form-control" value="{{ $alumno->nombres }}" required/>
                    </div>
                 </div>
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Apellido Paterno</label>
                    <div class="col-sm-12">
                      <input type="text" name="ap_paterno" class="card-title form-control" value="{{ $alumno->ap_paterno }}" required/>
                    </div>
                </div>

                    <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Apellido Materno</label> 
                    <div class="col-sm-12">
                      <input type="text" name="ap_materno" class="card-title form-control" value="{{ $alumno->ap_materno }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Carnet de Identidad</label>
                    <div class="col-sm-12">
                      <input type="text" name="ci" class="card-title form-control" value="{{ $alumno->ci }}" />
                    </div>
                </div>
                         
                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Ciudad</label>
                    <div class="col-sm-12">
                      <input type="text" name="ciudad" class="card-title form-control" value="{{ $alumno->ciudad }}" required/>
                    </div>
                </div>

                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Provincia</label>
                    <div class="col-sm-12">
                      <input type="text" name="provincia" class="card-title form-control" value="{{ $alumno->provincia }}" required/>
                    </div>
                </div>

                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">numero de telefono o celular</label>
                    <div class="col-sm-12">
                      <input type="number" name="num_cel" class="card-title form-control" value="{{ $alumno->num_cel }}" required/>
                    </div>
                </div>

                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Fecha de Nacimiento</label>
                    <div class="col-sm-12">
                      <input type="date" name="fecha_nac" class="card-title form-control" value="{{ $alumno->fecha_nac }}" required/>
                    </div>
                </div>



                      <!--cambio aqui-->

                    
                <div class="col-2">
                                    <label for="inputState" class="card-title form-label">Sexo<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                    <select id="inputState" class="card-title form-select" name="genero" required>
                                        <option value="Hombre" {{($alumno->genero == 'Hombre')?'selected':null}}>Hombre</option>
                                        <option value="Mujer" {{($alumno->genero == 'Mujer')?'selected':null}}>Mujer</option>
                                    </select>
                 </div>
                
                    <!--cambio aqui-->


                <div class="col-md-4">
                    <label for="inputState" class="card-title form-label">Estado Civil<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                  <select id="inputState" class="card-title form-select" name="estado_civil" required>
                    <option value="Soltero" {{($alumno->estado_civil == 'Soltero')?'selected':null}}>Soltero</option>
                    <option value="Casado" {{($alumno->estado_civil == 'Casado')?'selected':null}}>Casado</option>
                    <option value="Divorciado" {{($alumno->estado_civil == 'Divorciado')?'selected':null}}>Divorciado</option>
                    <option value="Viudo" {{($alumno->estado_civil == 'Viudo')?'selected':null}}>Viudo</option>
                  </select>
                </div>

                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Nombre del Padre o Tutor</label>
                    <div class="col-sm-12">
                      <input type="text" name="nom_tutor" class="card-title form-control" value="{{ $alumno->nom_tutor }}" required/>
                    </div>
                </div>
                 
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Numero del Padre o Tutor</label>
                    <div class="col-sm-12">
                      <input type="number" name="num_cel_urg" class="card-title form-control" value="{{ $alumno->num_cel_urg }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Iglesia</label>
                    <div class="col-sm-12">
                      <input type="text" name="iglesia" class="card-title form-control" value="{{ $alumno->iglesia }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Localidad de la Iglesia</label>
                    <div class="col-sm-12">
                      <input type="text" name="loc_igl" class="card-title form-control" value="{{ $alumno->loc_igl }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">pastor</label>
                    <div class="col-sm-12">
                      <input type="text" name="pastor" class="card-title form-control" value="{{ $alumno->pastor }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">??Cu??ndo acept?? usted a Cristo como Salvador personal?</label>
                    <div class="col-sm-12">
                      <input type="text" name="fecha_acept" class="card-title form-control" value="{{ $alumno->fecha_acept }}" required/>
                    </div>
                </div>







               <div class="col-2">
                        <label for="inputState" class="card-title form-label">??Es bautizado por inmersi??n?<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                        <select id="inputState" class="card-title form-select" name="preg_baut" required>
                            <option value="SI" {{($alumno->preg_baut == 'SI')?'selected':null}}>SI</option>
                            <option value="NO" {{($alumno->preg_baut == 'NO')?'selected':null}}>NO</option>
                         </select>
                 </div>
                
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">??Cu??ndo se Bautizo?</label>
                    <div class="col-sm-12">
                      <input type="date" name="fecha_baut" class="form-control" value="{{ $alumno->fecha_baut }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">??Qu?? cargos o responsabilidades ha desempe??ado en su iglesia?</label>
                    <div class="col-sm-12">
                      <input type="text" name="cargo_est" class="card-title form-control" value="{{ $alumno->cargo_est }}" required/>
                    </div>
                </div>

                 <div class="col-5">
                        <label for="inputState" class="card-title form-label">??En caso de ser menor de edad, sus padres est??n de acuerdo en que estudie en el seminario?<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                        <select id="inputState" class="card-title form-select" name="menor_edad" required>
                            <option value="Mi Padre y Madre estan deacuerdo" {{($alumno->menor_edad == 'Mi Padre y Madre estan deacuerdo')?'selected':null}}>Mi Padre y Madre estan deacuerdo</option>
                            <option value="Mi Padre esta deacuerdo" {{($alumno->menor_edad == 'Mi Padre esta deacuerdo')?'selected':null}}>Mi Padre esta deacuerdo</option>
                            <option value="Mi Madre esta deacuerdo" {{($alumno->menor_edad == 'Mi Madre esta deacuerdo')?'selected':null}}>Mi Madre esta deacuerdo</option>
                            <option value="Mi Padre y Madre NO estan deacuerdo" {{($alumno->menor_edad == 'Mi Padre y Madre NO estan deacuerdo')?'selected':null}}>Mi Padre y Madre NO estan deacuerdo</option>
                         </select>
                 </div>           
     </div>
                <div class="row">
                  <!--informe academico -->
                 
         <center><h2 class="card-title text-center mb-6">INFORMACI??N ACAD??MICA <hr></h2></center> 
                  

    </div>
     <div class="row">


       <div class="col-md-4">
                    <label for="inputState" class="card-title form-label">Indique los niveles Logrados<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                  <select id="inputState" class="card-title form-select" name="nivel_acad" required>
                    <option value="Primaria" {{($alumno->nivel_acad == 'Primaria')?'selected':null}}>Primaria</option>
                    <option value="Secundaria" {{($alumno->nivel_acad == 'Secundaria')?'selected':null}}>Secundaria</option>
                    <option value="Bachiller" {{($alumno->nivel_acad == 'Bachiller')?'selected':null}}>Bachiller</option>
                    <option value="Universidad" {{($alumno->nivel_acad == 'Universidad')?'selected':null}}>Universidad</option>
                    <option value="Licenciatura" {{($alumno->nivel_acad == 'Licenciatura')?'selected':null}}>Licenciatura</option>

                    <option value="Doctorado" {{($alumno->nivel_acad == 'Doctorado')?'selected':null}}>Doctorado</option>
                    <option value="MAESTR??A" {{($alumno->nivel_acad == 'MAESTR??A')?'selected':null}}>MAESTR??A</option>
                    <option value="ESPECIALIZACI??N SUPERIOR" {{($alumno->nivel_acad == 'ESPECIALIZACI??N SUPERIOR')?'selected':null}}>ESPECIALIZACI??N SUPERIOR</option>
                    <option value="DIPLOMA SUPERIOR" {{($alumno->nivel_acad == 'DIPLOMA SUPERIOR')?'selected':null}}>DIPLOMA SUPERIOR</option>
                    <option value="OTRO" {{($alumno->nivel_acad == 'OTRO')?'selected':null}}>OTRO</option>
                   
                  </select>
                </div>
    </div>

    <div class="row">
        <center><h2 class="card-title text-center mb-6">MODALIDAD DE PAGO<hr></h2></center> 
      
    </div>

    <div class="row">
                

               <!--informe academico -->

               <div class="col-md-4">
                    <label for="inputState" class="card-title form-label">MODALIDAD DE PAGO<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                 
                  <select id="inputState" class="card-title form-select" name="mod_pago" required>
                    <option value="Mensual 150 Bs" {{($alumno->mod_pago == 'Mensual 150 Bs')?'selected':null}}>Mensual 150 Bs</option>
                    <option value="Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral" {{($alumno->mod_pago == 'Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral')?'selected':null}}>Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral</option>
                    <option value="Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidades)." {{($alumno->mod_pago == 'Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidades).')?'selected':null}}>Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidades).</option>
                  </select>
        
                </div>
      </div>
      <div class="row">  

                                     <!--    aqui automatico-->
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Fecha de Afirmacion</label>
                    <div class="col-sm-12">
                      <input type="date" name="afir_conf" class="form-control" value="{{ $alumno->afir_conf }}" required/>
                    </div>
                </div> 

   </div>

     <div class="row">
      <center><h2 class="text-center mb-6">TESTIMONIO PERSONAL<hr></h2></center> 
      
    </div>
    <div class="row">
      <h2 class="card-title text-center">Por favor, escribe el testimonio breve de tu vida cristiana:<hr></h2>
    </div>


   <div class="row">               
                                   <!-- hasta aqui-->

                                   <!-- testimonio personal-->
                                   <!-- Por favor, escribe el testimonio breve de tu vida cristiana: -->
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Testimonio de su conversi??n a Cristo:</label>
                    <div class="col-sm-12">
                      <input type="text" name="testimonio_conv" class="card-title form-control" value="{{ $alumno->testimonio_conv }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Testimonio de tu servicio cristiano</label>
                    <div class="col-sm-12">
                      <input type="text" name="testimonio_serv" class="card-title form-control" value="{{ $alumno->testimonio_serv }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">. La raz??n por la cual quieres estudiar en el Seminario Teol??gico Hagiazo:</label>
                    <div class="col-sm-12">
                      <input type="text" name="razon_est" class="card-title form-control" value="{{ $alumno->razon_est }}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Fecha Testimonio</label>
                    <div class="col-sm-12">
                      <input type="text" date"fecha_test" class="card-title form-control" value="{{ $alumno->fecha_test }}" required/>
                    </div>
                </div>

                  <div class="col-md-4">
                <label class="col-sm-6 col-form-label">Observaci??n</label> 
                <textarea name="observ" class="card-title form-control" rows="4" cols="50"></textarea>
            </div>
          </div>
 </div>
 
<div class="row mb-5">


                  <div class="col-md-4">
                   <label for="exampleInputUsername1" style="text-align: center;">Foto actual</label>
                  <br>
                  @if ($alumno->foto_estudiante !=NULL)
                      <img src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="foto profe" style="max-width: 100px; margin: 0 auto;">
                  @else
                      <img class="card-img-top" src="{{ asset('images/users.png') }}" alt="Foto-Profe" class="imgs" style="width:100px; margin: 0 auto;">
                  @endif
                </div>

                 <div class="col-md-5">
                    <div class="col-md-10">
                  <label for="exampleInputUsername1">Cambiar Foto</label>
                  <input type="file" name="foto_estudiante" class="form-control">
                </div>
           
                

            <div class="form-group text-center mt-5 mb-3"> 
                <button type="submit" class="btn btn-primary mr-2 mb-3">Actualizar datos del  Alumno</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
   
</div>
</div>

@endsection
