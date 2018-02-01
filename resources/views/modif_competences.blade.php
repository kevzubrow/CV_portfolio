@extends('layouts.app')
@section('content')

<div class="panel panel-default">
                                        <h1>Modifier les competences</h1>
    <div class="panel-body">
        <form method="POST" action="{{url('modif_competence')}}">

                            {{ csrf_field() }}
              @foreach($langages as $langage)              
            <input type="hidden" name="id_competence" value="{{ $langage->id_competence }}">
         

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                <label for="nom">nom : </label>
                <input type="text" class="form-control" name="nom" value="{{ $langage->nom }}"><br/>
            </div>

            <div class="form-group {{ $errors->has('pourcentage') ? 'has-error' : '' }}">
                 <label for="pourcentage">pourcentage : </label>
                 <input type="text" class="form-control" name="pourcentage" value="{{ $langage->pourcentage }}"><br/>
            </div>

            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
               <label for="image">image : </label>
               <input type="text" name="image" value="{{ $langage->image }}"><br/>
            </div>   
           
            <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                <label for="type">type : &nbsp; &nbsp; &nbsp; </label>
                <input type="text" name="type" value="{{ $langage->type }}"><br/>
            </div>

            
            <a href="{{url('competence_admin')}}"><button type="button" class="btn btn-danger">retour</button></a>
            <button type="submit" class="btn btn-success">valider</button>
            @endforeach
        </form>
    </div>
</div>
@endsection