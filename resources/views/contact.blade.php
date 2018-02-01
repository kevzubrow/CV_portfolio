@extends('layout')
@section('title', 'admin')
@section('content')
                                  <!--   Contact -->
                                  <h1>Contactez-moi</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
    @if(Session::has('retour'))
    <div class="alert alert-success"> {{ Session::get('retour' )}}</div>
    @endif

            <form action="{{ route('envoiecontact') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="nom" class="control-label">nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label for="prenom" class="control-label">prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label for="mail" class="control-label">mail</label>
                    <input type="mail" name="mail" id="mail" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label for="sujet" class="control-label">sujet</label>
                    <input type="text" name="sujet" id="sujet" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label for="message" class="control-label">message</label>
                    <textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message"></textarea>
                </div>

                <div class="form-group col-md-6 offset-4">
                    <button class="btn btn-primary">Envoyer</button>
                </div>
            </form>


        </div>
    </div>
</div>
 
    <div class="container">
      <div id="log"  class="col-md-6 offset-3">
        <a href="https://github.com/kevzubrow" class="fa fa-github"></a>
        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
      </div>

@endsection