@extends('layouts.app')
@section('content')
	<h1>competences coté admin</h1>

<div class="container">
	@if(Session::has('message'))
	<div class="alert alert-success"> {{ Session::get('message' )}}</div>
	@endif
	<table class="table table-bordered">
		<caption><h3>Langage de Programmation</h3></caption>
				
				   <thead>
					   <span>
					       <th>nom</th>
					       <th>pourcentage</th>
					       <th>image</th>
					       <th><a href="{{ route('ajoutcompetence') }}" class="btn btn-primary">ajoute une Competence</a></th>
					       
					   </span>
					</thead>
			  @foreach($langages as $langage)
					<tbody>
					   <tr>
					       <td>{{ $langage->nom }}</td>
					       <td>{{ $langage->pourcentage }}</td>
					       <td>{{ $langage->image }}</td>
					       <td><a href="{{ route('modifCompetence', array('id'=>$langage->id_competence)) }}" class="btn btn-success">Voir/Modifier</a></td>
					       <td><a href="{{ route('supprCompetence', array('id'=>$langage->id_competence)) }}" class="supprimer btn btn-danger">Supprimer</a></td>
					   </tr>
					</tbody>
			@endforeach
	</table>
</div>
        
<div class="container">
	<table class="table table-bordered">
		<caption><h3>Les Frameworks</h3></caption>
				
				   <thead>
					   <span>
					       <th>nom</th>
					       <th>pourcentage</th>
					       <th>image</th>
					       <th><a href="{{-- {{ route('ajoutExperience') }} --}}" class="btn btn-primary">ajoute une Competence</a></th>
					       
					   </span>
					</thead>
			  @foreach($framew as $fram)
					<tbody>
					   <tr>
					       <td>{{ $fram->nom }}</td>
					       <td>{{ $fram->pourcentage }}</td>
					       <td>{{ $fram->image }}</td>
					       <td><a href="{{ route('modifCompetence', array('id'=>$fram->id_competence)) }}" class="btn btn-success">Voir/Modifier</a></td>
					       <td><a href="{{ route('supprCompetence', array('id'=>$fram->id_competence)) }}" class="supprimer btn btn-danger">Supprimer</a>
					   </tr>
					</tbody>
			@endforeach
	</table>
</div>         
@endsection