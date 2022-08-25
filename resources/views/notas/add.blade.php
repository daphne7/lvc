@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
          <h2 class="card-title text-center">REGISTRAR NUEVO CALIFICACION DEL ALUMNO <hr></h2>
        <form class="forms-sample" method="post" action="{{ route('alumno.store') }}" enctype="multipart/form-data">
            @csrf

       
       <div class="row">
                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">seleccione carrera</label>
                    
                    <select name="ciudad" class="card-title form-control">
                       
                           <option value="TEOLOGIA">TEOLOGIA</option>
                           <option value="DERECHO">DERECHO</option>
                           <option value="ENFERMERIA">ENFERMERIA</option>
                           

                    </select>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Seleccione SEMESTRE</label>
                    
                    <select name="ciudad" class="card-title form-control">
                       
                        
                           <option value="PRIMER SEMESTRE">PRIMER SEMESTRE</option>
                           <option value="SEGUNDO SEMENTRE ">SEGUNDO SEMENTRE </option>
                           <option value="TERCER SEMESTRE">TERCER SEMESTRE</option>
                           <option value="CUARTO SEMESTRE">CUARTO SEMESTRE</option>
                           <option value="QUINTO SEMESTRE">QUINTO SEMESTRE</option>
                           <option value="SEXTO SEMESTRE">SEXTO SEMESTRE</option>
                           <option value="SEPTIMO SEMESTRE">SEPTIMO SEMESTRE</option>
                           <option value="OCTAVO SEMESTRE">OCTAVO SEMESTRE</option>
                          

                    </select>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Seleccione Modulo</label>
                    
                    <select name="ciudad" class="card-title form-control">
                       
                          
                           <option value="MODULO 1 ">MODULO 1</option>
                           <option value="MODULO 2" >MODULO 2</option>
                           <option value="MODULO 3" >MODULO 3</option>
                           <option value="MODULO 4" >MODULO 4</option>s
                           <option value="MODULO 5" >MODULO 5</option>
                           <option value="MODULO 6" >MODULO 6</option>
                           <option value="MODULO 7" >MODULO 7</option>
                           <option value="MODULO 8" >MODULO 8</option>
                           <option value="MODULO 9" >MODULO 9</option>
                           <option value="MODULO 10">MODULO 10</option>
                           <option value="MODULO 11">MODULO 11</option>
                           <option value="MODULO 12">MODULO 12</option>
                           <option value="MODULO 13">MODULO 13</option>
                           <option value="MODULO 14">MODULO 14</option>
                           <option value="MODULO 15">MODULO 15</option>
                           <option value="MODULO 15">MODULO 16s</option>
                        
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Seleccione Materia</label>
                    
                    <select name="ciudad" class="card-title form-control">
                       
                           <option value="Práctica I: Discipulado Cristiano">Práctica I: Discipulado Cristiano</option>
                           <option value="Introducción a las Sagradas Escrituras">Introducción a las Sagradas Escrituras</option>
                           <option value="Introducción a la Teología">Introducción a la Teología</option>
                           <option value="Salud y Cultura Física">Salud y Cultura Física</option>
                           <option value="Historia de la Filosofía">Historia de la Filosofía</option>
                           <option value="Fenomenología de la Religión">Fenomenología de la Religión</option>
                           <option value="Técnicas de Estudio e Investigación (Transversal)">Técnicas de Estudio e Investigación (Transversal)</option>
                        
                    </select>
                </div>





                 <div class="col-md-4">
                    <label class="card-title col-sm-6 col-form-label">Seleccione grupo</label>
                    
                    <select name="ciudad" class="card-title form-control">
                       
                           <option value="a">a</option>
                           <option value="b">b</option>
                           <option value="c">c</option>
                           <option value="d">d</option>
                           <option value="e">e</option>
                           <option value="f">f</option>
                           <option value="g">g</option>
                        
                    </select>
                </div>


          
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mr-2 mb-3">BUSCAR</button> <!-- aqui modifiscar-->
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection
 
