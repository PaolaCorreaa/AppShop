@extends('layouts.app')
@section('title','trainers')
@section('content')

	<div class="row">
		@foreach($trainers as $trainer)
			<div class="col-sm">
				<div class="card text-center" style="width: 18rem; margin-top: 70px;">
				  <img style="height: 100px; width: 100px;
           background-color: #EFEFEF; margin: 20px;
           " class="card-img-top rounded-circle mx-auto d-block"
           src="images/{{$trainer->avatar}}" alt="">
				  <div class="card-body">
				    <h5 class="card-title">{{$trainer->name}}</h5>
				    <p class="card-text">Some quick example text to
              build on the card title and make up the bulk of the
              card's content.</p>
				    	<a href="/delete/{{$trainer->id}}" class="btn btn-primary">
								Delete</a>
							 <a href="/trainers/{{$trainer->id}}" class="btn btn-secondary">
								 Mostrar...</a>
							<button onclick="return delete('{{ $trainer->slug }}')"
								id="delete" type="button" class="btn btn-danger">Borrar</button>
						  </div>
				</div>
			</div>
		@endforeach
	</div>
@endsection
