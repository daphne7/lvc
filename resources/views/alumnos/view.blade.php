@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="text-center mb-3">
                <a href="/alumno" class="btn btn-primary">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a> 
                DETALLES DEL ALUMNO<hr>
            </h2>


        <div class="card-body">
            <div class="col-md-6">
            <div class="card" style="width: 55rem;">
                @if ( $alumno->foto_estudiante !=NULL )
                <img class="card-img-top imgs" src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/users.png') }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">   
                @endif
            </div>
            </div>
         </div>   
            

        <div class="card-body">
            
            <div class="row">

              <div class="col-md-4">
                <h6 class="card-title text-success"><strong>Nombres:</strong>
                       <br>{{ $alumno->nombres }}</br> <hr>
                </h6>

            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>Apellido Paterno:</strong>
                    <br>{{ $alumno->ap_paterno }}</br>  <hr>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title"><strong>Apellido Materno:</strong>
                     <br>{{ $alumno->ap_materno }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>Carnet de Identidad:</strong>
                     <br>{{ $alumno->ci }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>PAIS:</strong>
                     <br>{{ $alumno->pais }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>DEPARTAMENTO:</strong>
                     <br>{{ $alumno->departamento }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>Provincia:</strong>
                     <br>{{ $alumno->provincia }}</br> <hr>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title"><strong>Localidad:</strong>
                     <br>{{ $alumno->localidad }}</br> <hr>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title"><strong>Telefono o Celular Personal:</strong>
                     <br>{{ $alumno->num_cel }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>Correo Electronico:</strong>
                     <br>{{ $alumno->email }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>Fecha de Nacimiento:</strong>
                     <br>{{ $alumno->fecha_nac  }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>Sexo:</strong>
                     <br>{{ $alumno->genero }}</br> <hr>
                </h6>
            </div>
               
             <div class="col-md-4">
                <h6 class="card-title"><strong>Nombre Del Padre o Tutor:</strong>
                     <br>{{ $alumno->nom_tutor }}</br> <hr>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title"><strong>Numero de Celular o Telefono del Tutor:</strong>
                     <br>{{ $alumno->num_cel_tutor }}</br> <hr>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title"><strong>Llamar en caso de urgencia A:</strong>
                     <br>{{ $alumno->llam_urg  }}</br> <hr>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title"><strong>Numero de celular o telefono:</strong>
                     <br>{{ $alumno->num_cel_urg  }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>Iglesia:</strong>
                     <br>{{ $alumno->iglesia  }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>Localidad de la Iglesia:</strong>
                     <br>{{ $alumno->loc_igl }}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>Pastor:</strong>
                     <br>{{ $alumno->pastor}}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>¿Cuándo aceptó usted a Cristo como Salvador personal?:</strong>
                     <br>{{ $alumno->fecha_acept}}</br> <hr>
                </h6>
            </div>

            <div class="col-md-4">
                <h6 class="card-title"><strong>¿Es bautizado por inmersión?:</strong>
                     <br>{{ $alumno->preg_baut}}</br> <hr>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title"><strong>¿Fecha se Bautizo?:</strong>
                     <br>{{ $alumno->fecha_baut }}</br> <hr>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title"><strong>¿Qué cargos o responsabilidades ha desempeñado en su iglesia?:</strong>
                     <br>{{ $alumno->cargo_est }}</br> <hr>
                </h6>
            </div>

             <div class="col-md-4">
                <h6 class="card-title"><strong>¿En caso de ser menor de edad, sus padres están de acuerdo en que estudie en el seminario?:</strong>
                     <br>{{ $alumno->menor_edad }}</br> <hr>
                </h6>
            </div>
     </div>        
               




 <center><h2 class="text-center mb-3"> INFORMACIÓN ACADÉMICA:<hr></h2> </center>






            <div class="col-md-4">
                <h6 class="card-title"><strong>Nivel Academico Logrado.:</strong>
                     <br>{{ $alumno->nivel_acad }}</br> <hr>
                </h6>
            </div>



               
                 
                <!--aqui otro formulario de pago-->
                <center><h2 class="text-center mb-3"> MODALIDAD DE PAGO:<hr></h2></center>

               

               
                <div class="col-md-8">
                <h6 class="card-title"><strong>MODALIDAD DE PAGO:</strong>
                     <br>{{ $alumno->mod_pago}}</br> <hr>
                </h6>
                </div>

            
                <h5 class="card-title"><strong>Fecha de Afirmacion:</strong> 
                    {{ $alumno->afir_conf}} 
                    <hr>
                </h5>

                    <!--*************ootro formulario aparte**************-->
                     <center><h2 class="text-center mb-3"> TESTIMONIO PERSONAL<hr></h2></center>

                
                <div class="col-md-8">
                <h6 class="card-title"><strong>Testimonio de su conversión a Cristo:</strong>
                     <br>{{ $alumno->testimonio_conv}}</br> <hr>
                </h6>
                </div>

                <div class="col-md-8">
                <h6 class="card-title"><strong>Testimonio de tu servicio cristiano:</strong>
                     <br>{{ $alumno->testimonio_serv}}</br> <hr>
                </h6>
                </div>

                <div class="col-md-8">
                <h6 class="card-title"><strong>La razón por la cual quieres estudiar en el Seminario Teológico Hagiazo:</strong>
                     <br>{{ $alumno->razon_est}}</br> <hr>
                </h6>
                </div>



                  
                <div class="col-md-8 ">
                <h6 class="card-title "><strong>Observación:</strong>
                     <br>{{ $alumno->observ}}</br> <hr>
                </h6>
                </div>s

                

                <div class="col-md-4">
                <h6 class="card-title"><strong>Fecha de testimonio:</strong>
                     <br>{{ $alumno->fecha_test}}</br> <hr>
                </h6>
                </div>

                
                </div>
            </div>
            </div>

            


            </div>
        </div>
    </div>
</div>

@endsection
