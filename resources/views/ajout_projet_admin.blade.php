@extends('layouts.app')
@section('content')

								
<div class="panel panel-default">
                                        <h1>Ajout d'un Projet</h1>
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
    <div class="panel-body">
        <form method="POST" action="{{route('udapteprojet')}}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">             

            <div class="form-group">
                 <label for="titre_projet">titre_projet : </label>
                 <input type="text" class="form-control" name="titre_projet"><br/>
            </div>

            <div class="form-group">
                 <label for="text">text : </label>
                 <input type="text" class="form-control" name="text"><br/>
            </div>

            <div class="form-group">
                 <label for="image">image : </label>
                 <input type="text" class="form-control" name="image"><br/>
            </div>

            <div class="form-group">
                <label for="date">date : </label>
                <input type="date_time" class="form-control" name="date"><br/>
            </div>
     
          <a href="{{url('projets_admin')}}"><button type="button" class="btn btn-danger">retour</button></a>
            <button type="submit" class="btn btn-success">valider</button>
        </form>
    </div>
</div>

@endsection