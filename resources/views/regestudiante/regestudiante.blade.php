@section('content')
@extends('layout.master')




<center><h1>    Registro estudiante</h2></center>
<form action="ejemplo.php" method="get">
  <center><p>Nombre: <input type="text" name="nombre" size="40"></p></center>
  <center><p>Apellido: <input type="text" name="nombre" size="40"></p></center>
  <center><p>codigo :<input type="text" name="nombre" size="40"></p></center>
 
  <center><p>Identificacion:
  <input type="radio" name="hm" value="h"> CC
  <input type="radio" name="hm" value="m"> TI
 
  </p></center>
  <center></p>
  <p>Sexo:
  <input type="radio" name="hm" value="h"> Hombre
  <input type="radio" name="hm" value="m"> Mujer
 
  </p><center>
  <p>
  <button type="button" class="btn btn-danger">Registrar</button>

  <button type="button" class="btn btn-primary">atras</button>

        </p>
         </form>


    @stop