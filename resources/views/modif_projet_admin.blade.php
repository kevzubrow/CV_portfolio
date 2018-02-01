@extends('layouts.app')
@section('content')

<div class="panel panel-default">
                                        <h1>Modifier les projets</h1>
    <div class="panel-body">
        <form method="POST" action="{{url('modif_projets')}}">

                            {{ csrf_field() }}
              @foreach($project as $prjt)            
            <input type="hidden" name="id_projet" value="{{ $prjt->id_projet }}">
         

            <div class="form-group {{ $errors->has('titre_projet') ? 'has-error' : '' }}">
                <label for="titre_projet">titre_projet : </label>
                <input type="text" class="form-control" name="titre_projet" value="{{ $prjt->titre_projet }}"><br/>
            </div>

            <div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
                 <label for="text">text : </label>
                 <input type="text" class="form-control" name="text" value="{{ $prjt->text }}"><br/>
            </div>

            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
               <label for="image">image : </label>
               <input type="text" name="image" value="{{ $prjt->image }}"><br/>
            </div>   
           
            <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                <label for="date">date : &nbsp; &nbsp; &nbsp; </label>
                <input type="date-time" name="date" value="{{ $prjt->date }}"><br/>
            </div>

            
            <a href="{{url('projets_admin')}}"><button type="button" class="btn btn-danger">retour</button></a>
            <button type="submit" class="btn btn-success">valider</button>
            @endforeach
        </form>
    </div>
</div>
@endsection