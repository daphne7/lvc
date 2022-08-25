<!-- partial -->
<div class="container-fluid page-body-wrapper">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Inicio</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('profe.create') }}">
       
        <i class="mdi mdi-account-multiple-plus menu-icon"></i>
        <span class="menu-title">REGISTRAR DOCENTE</span> 
      </a>
    </li>

    <li class="nav-item">   
      <a class="nav-link" href="{{ route('profe.index') }}">
        <i class="mdi mdi-account  menu-icon"></i>
        <span class="menu-title">MI PERFIL DOCENTE</span>
      </a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href="{{ route('notas.create') }}">
        <i class="mdi mdi-file-document-box menu-icon"></i>
        <span class="menu-title">SUBIR NOTAS</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-account-multiple-plus menu-icon"></i>
        <span class="menu-title">Sección de Alumnos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('alumno.create') }}">Registrar nuevo Alumno</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('alumno.index') }}">Lista de Alumnos</a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="{{ route('alumno.index') }}">
        <i class="mdi mdi-file-account menu-icon"></i>
        <span class="menu-title">MI PERFIL ESTUDIANTE</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('profe.create') }}">
        <i class="mdi mdi-account-card-details menu-icon"></i>
        <span class="menu-title">VER MI PROGRAMACION</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('profe.create') }}">
        <i class="mdi mdi-file-document-box menu-icon"></i>
        <span class="menu-title">VER NOTAS</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('profe.create') }}">
        <i class="mdi mdi-note-multiple menu-icon"></i>
        <span class="menu-title">VER MI KARDEX</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('profe.create') }}">
        <i class="mdi mdi-note-text menu-icon"></i>
        <span class="menu-title">VER MI KARDEX PENSU</span>
      </a>
    </li>
    
    

  </ul>
</nav>
