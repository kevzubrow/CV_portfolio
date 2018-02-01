@extends('layout')
@section('title', 'admin')
@section('content')

                               <!--  carousel -->
<section id="cars">

    <div id="carsl" class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">
                @foreach($project as $prjt)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="@if($loop->first) active @endif"></li>
                @endforeach
              </ol>

            <div class="carousel-inner">
                @foreach($project as $prjt)

                <div class="carousel-item @if($loop->first) active @endif">
                  <img class="d-block w-100" src="{{ url('img/'.$prjt->image )}}" alt="{{ $prjt->titre_projet }}">
                </div>

                @endforeach
                
            </div>
        </div>
    </div>

</section>


                            <!-- Compétence -->
                            <h1>Langages de programmation</h1>
<div class="wrapper">
    <div class="row" id="competence">
        @foreach($langages as $langage)
        
            <div class="col-md-4 mb-4 col-sd-4" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/{{ $langage->image }})">
                        <div class="inner">
                            <p>{{ $langage->nom }}</p>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                          <p><strong>Progression</strong></p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $langage->pourcentage }}%" aria-valuenow="{{ $langage->pourcentage }}" aria-valuemin="0" aria-valuemax="100">{{ $langage->pourcentage }}%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        
    </div>
</div>   

 

                                <h1>Utilisation de frameworks</h1>
         
<div class="wrapper">
   
    <div class="cols">
        @foreach($framew as $fram)
            <div class="col-md-4 mb-4 col-sd-4" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/{{ $fram->image }})"">
                        <div class="inner">
                            <p>{{ $fram->nom }}</p>        
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p><strong>Progression</strong></p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:{{ $fram->pourcentage }}%" aria-valuenow="{{ $fram->pourcentage }}" aria-valuemin="0" aria-valuemax="100">{{ $fram->pourcentage }}%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>   
</div>
                <hr>


  

    
@endsection
