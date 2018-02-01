@extends('layout')
@section('title', 'admin')
@section('content')

                                  <!--   Expérience -->
                                  <h1>Mes Expériences</h1>

<section class="pro" id="experience">

    <article>
        @foreach($experiences as $exp)
                <h3>{{ $exp->nom_entreprise }}</h3>
                <h5>{{ $exp->date_debut }} - {{ $exp->date_fin }}</h5>
                <p>
                    {{ $exp->description }}
                </p>
        @endforeach
    </article>
                    <br>

    <article>
            <h1>Expérience extra professionnel</h1>
         <ul>
            <h5>Réparation informatique</h5>
            @foreach($reparation as $rep)
                         
                <p>
                    {{ $rep->descriptif }}
                </p>

            @endforeach
        </ul>

                <hr>

        <ul>                   
            <H5>Développement informatqiue</H5>
            @foreach($developpement as $dev)
                         
                <p>
                    {{ $dev->descriptif }}
                </p>

            @endforeach
        </ul>

            <hr>
        <ul>                   
            <H5>Formations</H5>
            @foreach($formation as $form)
                         
                <p>
                    {{ $form->descriptif }}
                </p>

            @endforeach
        </ul>
    </article>

</section>
@endsection