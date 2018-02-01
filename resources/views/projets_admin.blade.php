@extends('layouts.app')
@section('content')
	<h1>Projets coté admin</h1>
  
<div class="container">
	@if(Session::has('message'))
	<div class="alert alert-success"> {{ Session::get('message' )}}</div>
	@endif
	<table class="table table-bordered">
		<caption><h3>Mes Différents Projets Réaliser</h3></caption>
				
				   <thead>
					   <span>
					       <th>titre_projet</th>
					       <th>date</th>
					       <th>text</th>
					       <th>image</th>
					       <th><a href="{{ route('ajoutprojet') }}" class="btn btn-primary">ajoute un Projet</a></th>
					   </span>
					</thead>
			 @foreach($project as $prjt)
					<tbody>
					   <tr>
					       <td>{{ $prjt->titre_projet }}</td>
					       <td>{{ $prjt->date }}</td>
					       <td>{{ $prjt->text }}</td>
					       <td>{{ $prjt->image }}</td>
					       <td><a href="{{ route('modifProjets', array('id'=>$prjt->id_projet)) }}" class="btn btn-success">Voir/Modifier</a></td>
					       <td><a href="{{ route('supprProjets', array('id'=>$prjt->id_projet)) }}" class="supprimer btn btn-danger">Supprimer</a></td>
					   </tr>
					</tbody>
			@endforeach
	</table>
</div>
@endsection
