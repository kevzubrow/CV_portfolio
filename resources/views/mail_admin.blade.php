@extends('layouts.app')
@section('content')
	<h1>mails coté admin</h1>
<div class="container">
	@if(Session::has('message'))
	<div class="alert alert-success"> {{ Session::get('message' )}}</div>
	@endif
	<table class="table table-bordered">
		<caption><h3>Les Mails Reçus</h3></caption>
				
				   <thead>
					   <span>
					       <th>nom</th>
					       <th>prenom</th>
					       <th>sujet</th>
					   </span>
					</thead>
					
			  @foreach($contact as $ctct)
					<tbody>
					   <tr>
					       <td>{{ $ctct->nom }}</td>
					       <td>{{ $ctct->prenom }}</td>
					       <td>{{ $ctct->sujet }}</td>
					       <td><a href="{{ route('voirMail', array('id'=>$ctct->id_contact)) }}" class="btn btn-success">Voir</a></td>
					       <td><a href="{{ route('supprMails', array('id'=>$ctct->id_contact)) }}" class="supprimer btn btn-danger">Supprimer</a></td>
					   </tr>
					</tbody>
			@endforeach
	</table>
</div>

@endsection
