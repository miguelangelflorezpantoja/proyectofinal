@section('content')
@extends('layout.master')




<center><h1>    Modificar  materia</h2></center>
<form>

<center><div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Igresar materia </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Codigo de  materia</label>
    <input type="password" class="form-control" id="">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  

  </div>
  <button type="button" class="btn btn-danger">Registrar</button>




</center>


</form>

    @stop