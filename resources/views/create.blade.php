@extends('layouts.app')
@section('title', 'Trainers Create')
@section('content')

<form class="form-group" method= "POST" action="/trainers" enctype="multipart/form-data">
    @csrf
      <div clas="from-group">
        <label for=""> Nombre: </label>
        <input type="text" name="name" class="form-control">

        <label for="">Apellido: </label>
        <input type="text" name="apellido" class="form-control">

      </div>
      <div clas="from-group">
      <label for="">Avatar: </label>
        <input type="file" name="avatar">
      </div>

<button type="submit" class="btn btn-primary">Guardar </button>
</form>






