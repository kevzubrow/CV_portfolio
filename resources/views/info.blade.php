@extends('layout')
@section('title', 'admin')
@section('content')
                  <!-- INFOS -->

            <h1>Quelques Info sur Moi</h1>
<section>
    <article id="inf">
        <h5>Info :</h5>
            <ul>
                <li><strong>Nom :</strong> kevin</li>
                <li><strong>Prenom :</strong> PEAN</li>
                <li><strong>Age :</strong> 23ans</li>
                <li><strong>Date de Naissance :</strong> 21/06/1994</li>
                <li><strong>Tel :</strong> 06-34-15-07-84</li>
                <li><strong>Adresse :</strong> 5 place des catalpas , 03110 St Rémy en Rollat</li>
                <li><strong>Permis :</strong> A1, A2, B1, B</li>
                <li><strong>Véhicules :</strong> Oui</li>
            </ul>
    </article>

    <article id="pass">
        <h5>Passion : &nbsp;</h5>
            <ul>   
                <li>
                         Passionné d’informatique , de développement WEB  et Passionné de moto.
                </li>
            </ul>

    </article>

    <article id="lois">
        <h5>Loisir :  &nbsp;</h5>
            <ul>   
                <li>
                Je fais de la moto , regarder des séries et je joue aux jeu-video.
              </li>
            </ul>
    </article>
</section>


@endsection