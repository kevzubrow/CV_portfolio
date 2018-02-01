@extends('layouts.app')
@section('content')

<div class="panel panel-default">
                                        <h1>Modifier l'experience</h1>
    <div class="panel-body">
        <form method="POST" action="{{url('modif_experience')}}">

                            {{ csrf_field() }}
              @foreach($experiences as $exp)              
            <input type="hidden" name="id_entreprise" value="{{ $exp->id_entreprise }}">
         

            <div class="form-group {{ $errors->has('nom_entreprise') ? 'has-error' : '' }}">
                <label for="nom_entreprise">nom_entreprise : </label>
                <input type="text" class="form-control" name="nom_entreprise" value="{{ $exp->nom_entreprise }}"><br/>
            </div>

            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                 <label for="description">description : </label>
                 <input type="date_time" class="form-control" name="description" value="{{ $exp->description }}"><br/>
            </div>

            <div class="form-group {{ $errors->has('date_debut') ? 'has-error' : '' }}">
               <label for="date_debut">date de debut : </label>
               <input type="text" name="date_debut" value="{{ $exp->date_debut }}"><br/>
            </div>   
           
            <div class="form-group {{ $errors->has('date_fin') ? 'has-error' : '' }}">
                <label for="date_fin">date de fin : &nbsp; &nbsp; &nbsp; </label>
                <input type="date_time" name="date_fin" value="{{ $exp->date_fin }}"><br/>
            </div>

            
            <a href="{{url('experience_admin')}}"><button type="button" class="btn btn-danger">retour</button></a>
            <button type="submit" class="btn btn-success">valider</button>
            @endforeach
        </form>
    </div>
</div>
<form method="POST" action="{{url('modif_extra')}}">

                            {{ csrf_field() }}
               @foreach($reparation as $rep)        
            <input type="hidden" name="id_extra" value="{{ $rep->id_extra }}">

            <div class="form-group {{ $errors->has('descriptif') ? 'has-error' : '' }}">
                <label for="descriptif">descriptif : </label>
                <input type="text" class="form-control" name="descriptif" value="{{ $rep->descriptif }}"><br/>
            </div>
            
            <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                <label for="type">type : </label>
                <input type="text" class="form-control" name="type" value="{{ $rep->type }}"><br/>
            </div>
            <a href="{{url('experience_admin')}}"><button type="button" class="btn btn-danger">retour</button></a>
            <button type="submit" class="btn btn-success">valider</button>
            @endforeach
</form>

@endsection