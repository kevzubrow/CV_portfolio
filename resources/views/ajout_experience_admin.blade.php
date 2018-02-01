@extends('layouts.app')
@section('content')

								
<div class="panel panel-default">
                                        <h1>Ajout d'une expérience</h1>
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
    <div class="panel-body">
        <form method="POST" action="{{url('udapteExperience')}}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">             


            <div class="form-group">
                <label for="nom_entreprise">nom_entreprise : </label>
                <input type="text" class="form-control" name="nom_entreprise"><br/>
            </div>

            <div class="form-group">
                 <label for="description">description : </label>
                 <input type="text" class="form-control" name="description"><br/>
            </div>

            <div class="form-group">
               <label for="date_debut">date de debut : </label>
               <input type="date_time" name="date_debut"><br/>
            </div>   
           
            <div class="form-group">
                <label for="date_fin">date de fin : &nbsp; &nbsp; &nbsp; </label>
                <input type="date_time" name="date_fin"><br/>
            </div>
     
           <a href="{{url('experience_admin')}}"><button type="button" class="btn btn-danger">retour</button></a>
            <button type="submit" class="btn btn-success">valider</button>
        </form>
    </div>
</div>

@endsection