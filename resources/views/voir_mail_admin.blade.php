@extends('layouts.app')
@section('content')

	                                 	
<div class="panel panel-default">
										<h1>mails Complet</h1>
    <div class="panel-body">                                     
    	<table class="table table-bordered">
        			<thead>
					   <span>
					       <th>nom</th>
					       <th>prenom</th>
					       <th>mail</th>
					       <th>sujet</th>
					       <th>message</th>
					   </span>
					</thead>

			  @foreach($contact as $ctct)
					<tbody>
					   <tr>
					       <td>{{ $ctct->nom }}</td>
					       <td>{{ $ctct->prenom }}</td>
					       <td>{{ $ctct->mail }}</td>
					       <td>{{ $ctct->sujet }}</td>
					       <td>{{ $ctct->message }}</td>
					       
					   </tr>
					</tbody>        
            @endforeach
		</table>
	</div>
</div>

<a href="{{url('mail_admin')}}"><button type="button" class="btn btn-danger">retour</button></a>


@endsection