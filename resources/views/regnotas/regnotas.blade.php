@section('content')
@extends('layout.master')




<center><h1>    Registro de notas</h2></center>
<form action="ejemplo.php" method="get">
  <center><p>Codigo esudiante<input type="text" name="nombre" size="40"></p></center>
  <center><p>codigo materia <input type="text" name="nombre" size="40"></p></center>
  <center><p>  Calificacion <input type="text" name="nombre" size="40"></p></center>
 
  </p><center>
  <p>
  <button type="button" class="btn btn-danger">Registrar</button><button type="button" class="btn btn-primary">atras</button>

  

        </p>
         </form>


    @stop