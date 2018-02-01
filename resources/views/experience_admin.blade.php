@extends('layouts.app')
@section('content')

															<h1>Experience coté admin</h1>
<div class="container">
	@if(Session::has('message'))
	<div class="alert alert-success"> {{ Session::get('message' )}}</div>
	@endif
	<table class="table table-bordered">
		<caption><h3>Experience Professionnel</h3></caption>
				
				   <thead>
					   <span>
					       <th>nom_entreprise</th>
					       <th>date_debut</th>
					       <th>date_fin</th>
					       <th>description</th>
					       <th><a href="{{ route('ajoutExperience') }}" class="btn btn-primary">ajoute une experience</a></th>
					   </span>
					</thead>
			@foreach($experiences as $exp)
					<tbody>
					   <tr>
					       <td>{{ $exp->nom_entreprise }}</td>
					       <td>{{ $exp->date_debut }}</td>
					       <td>{{ $exp->date_fin }}</td>
					       <td> {{ $exp->description }}</td>
					       <td><a href="{{ route('modifExperience', array('id'=>$exp->id_entreprise)) }}" class="btn btn-success">Voir/Modifier</a></td>
					       <td><a href="{{ route('supprExperience', array('id'=>$exp->id_entreprise)) }}" class="supprimer btn btn-danger">Supprimer</a></td>
					   </tr>
					</tbody>
			@endforeach
	</table>
</div>

<div class="container">
	<table class="table table-bordered">
		<caption><h3>Réparation Informatique</h3></caption>
				
				   <thead>
					   <span>  
					       <th>description</th>
					       <th>type</th>
					       <th><a href="{{ route('ajoutExtra') }}" class="btn btn-primary">ajout experience reparation</a></th>
					   </span>
					</thead>
			@foreach($reparation as $rep)
					<tbody>
					   <tr>
					       <td>{{ $rep->descriptif }}</td>
					       <td>{{ $rep->type }}</td>
					       <td><a href="{{ route('modifExtra', array('id'=>$rep->id_extra)) }}" class="btn btn-success">Voir/Modifier</a></td>
					       <td><a href="{{ route('supprExtra', array('id'=>$rep->id_extra)) }}" class="supprimer btn btn-danger">Supprimer</a>
					   </tr>
					</tbody>
			@endforeach
	</table>
</div>
<div class="container">
	<table class="table table-bordered">
		<caption><h3>Développement Informatique</h3></caption>
				
				   <thead>
					   <span>  
					       <th>description</th>
					       <th>type</th>
					       <th><a href="{{ route('ajoutExtra') }}" class="btn btn-primary">ajoute experience developpement</a></th>
					   </span>
					</thead>
			@foreach($developpement as $dev)
					<tbody>
					   <tr>
					       <td> {{ $dev->descriptif }}</td>
					        <td> {{ $dev->type }}</td>
					        <td><a href="{{ route('modifExtra', array('id'=>$dev->id_extra)) }}" class="btn btn-success">Modifier</a></td>
					       <td><a href="{{ route('supprExtra', array('id'=>$dev->id_extra)) }}" class="supprimer btn btn-danger">Supprimer</a>
					   </tr>
					</tbody>
			@endforeach
	</table>
</div>

<div class="container">
	<table class="table table-bordered">
		<caption><h3>Formations</h3></caption>
				
				   <thead>
					   <span>  
					       <th>description</th>
					       <th>type</th>
					       <th><a href="{{ route('ajoutExtra') }}" class="btn btn-primary">ajoute experience developpement</a></th>
					   </span>
					</thead>
			@foreach($formation as $form)
					<tbody>
					   <tr>
					       <td> {{ $form->descriptif }}</td>
					        <td> {{ $form->type }}</td>
					        <td><a href="{{ route('modifExtra', array('id'=>$form->id_extra)) }}" class="btn btn-success">Modifier</a></td>
					       <td><a href="{{ route('supprExtra', array('id'=>$form->id_extra)) }}" class="supprimer btn btn-danger">Supprimer</a>
					   </tr>
					</tbody>
			@endforeach
	</table>
</div>
@endsection
