@section('content')
@extends('layout.master')
<center><h1>    Registro de materias  </h1></center>


<h1>



<div class="container">
    <br> <br>
    <form action ="{{url('categorias/registro')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nombre de la materia</span>
            </div>
            <input type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1" id="" name="" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Intensidad horaria</span>
            </div>
            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="" name="" required>
        </div>

        <center>   <button type="button" class="btn btn-danger">Registrar</button>    </form></center>

</div>










.</h1>
    @stop