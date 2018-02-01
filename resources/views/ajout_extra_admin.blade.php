@extends('layouts.app')
@section('content')

								
<div class="panel panel-default">
                                        <h1>Ajout d'une extra expérience</h1>
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
    <div class="panel-body">
        <form method="POST" action="{{url('udapteExtra')}}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">             

            <div class="form-group">
                 <label for="descriptif">descriptif : </label>
                 <input type="text" class="form-control" name="descriptif"><br/>
            </div>

            <div class="form-group">
                <label for="type">type : </label>
                <input type="text" class="form-control" name="type"><br/>
            </div>
     
           <a href="{{url('experience_admin')}}"><button type="button" class="btn btn-danger">retour</button></a>
            <button type="submit" class="btn btn-success">valider</button>
        </form>
    </div>
</div>

@endsection