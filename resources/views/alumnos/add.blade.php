@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
          <h2 class="card-title text-center">REGISTRAR NUEVO ALUMNO <hr></h2>
        <form class="forms-sample" method="post" action="{{ route('alumno.store') }}" enctype="multipart/form-data">
            @csrf

        <div class="row">

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Nombres</label>
                    <div class="text-success col-sm-12">
                      <input type="text" name="nombres" class="card-title form-control" required/>
                    </div>
                </div>

               <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Apellido Paterno</label>
                    <div class="col-sm-12">
                      <input type="text" name="ap_paterno" class="card-title form-control" />
                    </div>
                </div>

                
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Apellido Materno</label>
                    <div class="col-sm-12">
                      <input type="text" name="ap_materno" class=" card-title form-control" />
                    </div>
                </div>
                 
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Carnet De Identidad</label>
                    <div class="col-sm-12">
                      <input type="text" name="ci" class="card-title form-control" />
                    </div>
                </div>

       </div>
       <div class="row">
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Pais de Nacimiento</label>
                    
                    <select name="ciudad" class="card-title form-control">
                       
                           <option value="Bolivia">BOLIVIA</option>
                           <option value="Argentina">ARGENTINA</option>
                           <option value="Chile">CHILE</option>
                           <option value="Colombia">COLOMBIA</option>
                           <option value="Ecuador">ECUADOR</option>
                           <option value="Guyana">GUYANA</option>
                           <option value="Guyana Francesa">GuYANA FRANCESA</option>
                           <option value="Perú">PERU</option>
                           <option value="Uruguay">URUGUAY</option>
                           <option value="Venezuela">VENEZUELA</option>
                           <option value="OTRO">OTRO</option>

                    </select>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Departamento de Nacimiento</label>
                    
                    <select name="ciudad" class="card-title form-control">
                       
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

                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Provincia de Nacimiento</label>
                    <div class="col-sm-12">
                      <input type="text" name="provincia" class="card-title form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Localidad de Nacimiento</label>
                    <div class="col-sm-12">
                      <input type="text" name="provincia" class="card-title form-control" />
                    </div>
                </div>

         </div>

        <div class="row">
                
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Telefono o Celular Personal</label>
                    <div class="col-sm-12">
                      <input type="number" name="num_cel" class="card-title form-control" />
                    </div>
                </div>

                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">correo electronico</label>
                    <div class="col-sm-12">
                      <input type="text" name="email" class="card-title form-control" required />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Fecha de Nacimiento</label>
                    <div class="col-sm-12">
                      <input type="date" name="card-title fecha_nac" class="form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Sexo</label>
                    
                    <select name="genero" class="card-title form-control">
                       
                           <option value="Masculino">Masculino</option>
                           <option value="Femenino">Femenino</option>
                    </select>
                </div>    
            
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Estado Civil</label>
                    
                    <select name="estado_civil" class="card-title form-control">
                       
                           <option value="Soltero(a)">Soltero(a)</option>
                           <option value="Casado(a)">Casado(a)</option>
                           <option value="Divorciado(a)">Divorciado(a)</option>
                           <option value="Viudo(a)">Viudo(a)</option>
                    </select>
                </div> 


                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Nombre Del Padre o Tutor</label>
                    <div class="col-sm-12">
                      <input type="text" name="nom_tutor" class="card-title form-control" />
                    </div>
                </div>
            </div> 


             <div class="row">

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Numero de Celular o Telefono del Tutor</label>
                    <div class="col-sm-12">
                      <input type="number" name="num_cel_tutor" class="card-title form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Llamar en caso de urgencia A:</label>
                    <div class="col-sm-12">
                      <input type="text" name="llam_urg" class="card-title form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Numero de Celular o Telefono de la llamada de Urgencia</label>
                    <div class="col-sm-12">
                      <input type="number" name="num_cel_urg" class="card-title form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Iglesia</label>
                    <div class="col-sm-12">
                      <input type="text" name="iglesia" class="card-title form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Localidad de la Iglesia</label>
                    <div class="col-sm-12">
                      <input type="text" name="loc_igl" class="card-title form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Pastor</label>
                    <div class="col-sm-12">
                      <input type="text" name="pastor" class="card-title form-control" />
                    </div>
                </div>

             </div>  
                           
           <div class="row">

            <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">¿Cuándo aceptó usted a Cristo como Salvador personal? </label>
                    <div class="col-sm-12">
                      <input type="text" name="fecha_acept" class="card-title form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">¿Es bautizado por inmersión?</label>
                    
                    <select name="preg_baut" class="card-title form-control">
                       
                           <option value="Si">Si</option>
                           <option value="No">No </option>
                           
                          
                    </select>
                </div>    
                
                <div class="card-title col-md-4">
                    <label class="col-sm-6 col-form-label">¿Fecha de Bautizo?</label>
                    <div class="card-title col-sm-12">
                      <input type="date" name="fecha_baut" class="card-title form-control" />
                    </div>
                </div>
        
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">¿Qué cargos o responsabilidades ha desempeñado en su iglesia?</label>
                    <div class="card-title col-sm-12">
                    <textarea name="cargo_est" class="card-title form-control" rows="4" cols="50"></textarea>
                    </div>
                </div>


                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">¿En caso de ser menor de edad, sus padres están de acuerdo en que estudie en el seminario?</label>
                    
                    <select name="menor_edad" class="card-title form-control">
                       
                           <option value="Mi Padre y Madre estan deacuerdo">Mi Padre y Madre estan deacuerdo</option>
                           <option value="Mi Padre esta deacuerdo">Mi Padre esta deacuerdo </option>
                           <option value="Mi Madre esta deacuerdo">Mi Madre esta deacuerdo </option>
                           <option value="Mi Padre y Madre NO estan deacuerdo">Mi Padre y Madre NO estan deacuerdo</option>
                          
                    </select>
                </div>   

          </div>
          <center> <h2 class="card-title text-center">INFORMACIÓN ACADÉMICA: <hr></h2></center>

          <div class="row">

                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">SELECCIONE EL NIVEL ACADEMICO LOGRADO .</label>
                    
                    <select name="nivel_acad" class="card-title form-control">
                       
                           <option value="PRIMARIA">PRIMARIA</option>
                           <option value="SECUNDARIA">SECUNDARIA </option>
                           <option value="BACHILLER">BACHILLER</option>
                           <option value="UNIVERSIDAD">UNIVERSIDAD </option>
                           <option value="LICENCIATURA">LICENCIATURA</option>
                           <option value="Doctorado">DOCTORADO</option>
                           <option value="MAESTRÍA">MAESTRÍA</option>
                           <option value="ESPECIALIZACIÓN SUPERIOR">ESPECIALIZACIÓN SUPERIOR</option>
                           <option value="DIPLOMA SUPERIOR.">DIPLOMA SUPERIOR</option>
                           <option value="OTRO">OTRO</option>
                          
                    </select>
                </div>    
    

           </div>
            <h2 class="card-title text-center">MODALIDAD DE PAGO <hr></h2>

           <div class="row">
           
                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">MODALIDAD DE PAGO</label>
                    
                    <select name="mod_pago" class="card-title form-control">
                       
                           <option value="Mensual 150 Bs">Mensual 150 Bs </option>
                           <option value="Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral ">Por 5 pagos de febrero a junio, se le descuenta un mes, de manera que; cancelaria simplemente bs 600/ semestral  </option>
                           <option value="Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidades).">Por 10 pagos de febrero a diciembre, solo cancelaria la suma de Bs 1200/ anual, (es decir menos dos mensualidad </option>
                          
                    </select>
                </div>  

                   <!-- este campo debe ser automatico se debe poner la fecha actual -->
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Fecha de Afirmacion</label>
                    <div class="col-sm-12">
                      <input type="date" name="afir_conf" class="card-title form-control" required/>
                    </div>
                </div>

            </div>
            <h5 class="card-title text-center">TESTIMONIO PERSONAL <hr></h5>
             <h2 class="card-title text-center">Por favor, escribe el testimonio breve de tu vida cristiana:<hr></h2>

             <div class="row">
                 <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Testimonio de su conversión a Cristo:</label>
                    <div class="card-title col-sm-12">
                    <textarea name="testimonio_conv" class="card-title form-control" rows="4" cols="50"></textarea>
                    </div>
                </div>

                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Testimonio de tu servicio cristiano:</label>
                    <div class="col-sm-12">
                    <textarea name="testimonio_serv" class="card-title form-control" rows="4" cols="50"></textarea>
                    </div>
                </div>

                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">La razón por la cual quieres estudiar en el Seminario Teológico Hagiazo:</label>
                    <div class="col-sm-12">
                    <textarea name="razon_est" class="card-title form-control" rows="4" cols="50"></textarea>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Fecha de testimonio</label>
                    <div class="col-sm-12">
                      <input type="date" name="fecha_test" class="card-title form-control" />
                    </div>
                </div>

             </div>

    
            <div class="card-body">

            <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">foto del Estudiante</label>
                    <div class="col-sm-12">
                      <input type="file" name="foto_estudiante" class="form-control" />
                    </div>
                </div>
            </div>
        
            

            <div class="row mb-5">
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Observación</label>
                    <textarea name="observ" class="card-title form-control" rows="4" cols="50"></textarea>
                </div>
            </div>
             
          
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mr-2 mb-3">Registrar Alumno</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection
 