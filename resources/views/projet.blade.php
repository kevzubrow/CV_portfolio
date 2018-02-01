@extends('layout')
@section('title', 'admin')
@section('content')

		<h1>MES PROJET</h1>

<div class="wrapper">
    <div class="row">
    @foreach($project as $prjt)
             <div class="col-md-4 mb-4 col-sd-12" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/{{ $prjt->image }})" data-lightbox="roadtrip">
                    </div>
                    <div class="back">
                        <div class="inner">
                        	<h3>{{ $prjt->titre_projet }}</h3>
                			<h5>{{ $prjt->date }}</h5>
                            <p><strong>{{ $prjt->text }}</strong></p>
                            
                        </div>
                    </div>
                        <a class="hexLink" data-lightbox="projets" href="{{url('img/'.$prjt->image)}}" >projets</a>
            			
                </div>
            </div>
       @endforeach
    </div>
</div>  

{{-- test --}}

<script src="{{ asset('lightbox2/dist/js/lightbox.js') }}"></script>

@endsection