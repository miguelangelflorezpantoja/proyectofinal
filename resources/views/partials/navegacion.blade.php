<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark special-color-dark">
<img src="https://www.udenar.edu.co/recursos/wp-content/uploads/2016/09/vertical.fw_-e1476916579853.png">
  <a class="navbar-brand" href="{{url('/')}}">
  
  Universidad de Nariño<br> Registro de estudiantes</br> </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">

      
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
            Materias
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{url('/regmaterias/regmaterias')}}">Registro de Materia </a>
         
          <a class="dropdown-item" href="{{url('/listadomat/listadomat')}}">Listado de Materias</a>
          <a class="dropdown-item" href="{{url('modmateria/modmateria')}}">Modificar materias</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Estudiantes
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{url('/regestudiante/regestudiante')}}">Registro Estudiantes</a>
          <a class="dropdown-item" href="{{url('/servicios/eventos/o')}}">listado de estudiantes</a>
         
        </div>
        
      </li>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Notas
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Registro de notas</a>
          <a class="dropdown-item" href="{{url('/servicios/eventos/o')}}"></a>
         
        </div>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/reservas')}}">   </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/contactanos')}}">Bibliografía</a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->