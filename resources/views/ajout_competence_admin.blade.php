@extends('layouts.app')
@section('content')

								
<div class="panel panel-default">
                                        <h1>Ajout d'une Compétence</h1>
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
    <div class="panel-body">
        <form method="POST" action="{{url('udapteCompetence')}}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">             

            <div class="form-group">
                 <label for="nom">nom : </label>
                 <input type="text" class="form-control" name="nom"><br/>
            </div>

            <div class="form-group">
                 <label for="pourcentage">pourcentage : </label>
                 <input type="text" class="form-control" name="pourcentage"><br/>
            </div>

            <div class="form-group">
                 <label for="image">image : </label>
                 <input type="text" class="form-control" name="image"><br/>
            </div>

            <div class="form-group">
                <label for="type">type : </label>
                <input type="text" class="form-control" name="type"><br/>
            </div>
     
          <a href="{{url('competence_admin')}}"><button type="button" class="btn btn-danger">retour</button></a>
            <button type="submit" class="btn btn-success">valider</button>
        </form>
    </div>
</div>

@endsection