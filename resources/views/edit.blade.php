@extends('layouts.app')
@section('title', 'Trainers Edit')
@section('content')

<form class="form-group" method= "POST" action="{{action('TrainerController@update', $trainer->id)}}" 
    enctype="multipart/form-data">
   @method('PUT')
   @csrf
      <div clas="from-group">
        <label for=""> Nombre: </label>
        <input type="text" name="name" value="{{$trainer->name}}" class="form-control">

        <label for="">Apellido: </label>
        <input type="text" name="apellido" value="{{$trainer->apellido}}" class="form-control">

      </div>
      <div clas="from-group">
      <label for="">Avatar: </label>
      <input type="file" name="avatar" value="{{$trainer->avatar}}">
    </div>

<button type="submit" class="btn btn-primary">Editar </button>
</form>
@endsection 