@extends('layouts.app')
@section('title', 'Trainers Busqueda')
@section('content')
<form class="form-group" method= "POST" action="/trainers" enctype="multipart/form-data">
    @csrf

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <title>Laravel Scout Search Tutorial</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">    
    </head>

   <body>
    <div class="container">
      
        <h1>Laravel Scout Search </h1>
      <form method="GET" action="{{ url('SearchShow') }}">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </form>
   <br/>
      <table class="table table-bordered">
        
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Apellido</th>
            </tr>
            <!--@if(isset($trainers))-->
                @foreach($trainers as $trainer)
                <tr>
                    <td>{{ $trainer->id }}</td>
                    <td>{{ $trainer->name }}</td>
                    <td>{{ $trainer->Apellido }}</td>
                </tr>
                @endforeach 
                
            @else
            <tr>
                <td colspan="3" class="text-danger">Result not found.</td>
            </tr>
           @endif
        </table>
   </div>
</body>
</html>

@endsection