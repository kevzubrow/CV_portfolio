@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Bienvenue sur ta page d'admin {{ Auth::user()->name }}</h1>
            <h3>Choisi ce que tu veut faire ... Voir, Crée, Modifié ou même Supprimé</h3>
        </div>
    </div>
</div>
<p class="center"><img src="img/admin.png"></p>
@endsection