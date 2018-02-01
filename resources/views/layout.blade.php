<html>
   <head>
       <title>@yield('title')</title>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


                        <!-- style de police -->
    <link href="https://fonts.googleapis.com/css?family=Rye|Zilla+Slab+Highlight" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chonburi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unlock" rel="stylesheet">
                    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <!-- font awesone -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        
                                            <!-- CSS -->
        
        <link href="{{ asset('lightbox2/dist/css/lightbox.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
                                        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

                                        <!-- JAVA-SCRIPT -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 

     </head>

<header class="col-md-12 col-sd-12">

  <img src="img/moi.jpg" id="pht"> 
  <h1>CV Portfolio</h1>  
 
  <div class="log">
@auth
  <a href="{{url('admin')}}">Admin</a>
@else
  <a href="{{url('login')}}">Connexion</a>
@endauth
</div>
<a href="#" class="uparrow" title='Back to top...'>Scroll</a>
</header>
         <h5>EN cours de developpement</h5>     
<body class="col-md-12 col-sd-12">
      <div class="col-md-12 mb-4 col-sd-6 offset-3 sticky-top">
          <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbr">
                <button class="navbar-toggler sticky-top" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            
              <li class="nav-item active">
                <a class="nav-link btn btn-outline-info marg" href="{{url('/')}}">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-info marg" href="{{url('/')}}#competence">Compétence</a>
              </li>
               <li class="nav-item">
                <a class="nav-link btn btn-outline-info marg" href="{{url('experience')}}">Expérience</a>
              </li>
               <li class="nav-item">
                <a class="nav-link btn btn-outline-info marg" href="{{url('contact')}}">Contact</a>
              </li>
               <li class="nav-item">
                <a class="nav-link btn btn-outline-info marg" href="{{url('info')}}">Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-info marg" href="{{url('projet')}}">Projet</a>
              </li>
            </div>  
          </ul>
        </div>
      </nav>
    </div>
  @section('sidebar')
      @show

    <div>
        @yield('content')
    </div>


</body>

<footer>

  <div class="wrapper">
    <div class="col-md-12 mb-4 col-sd-6">
      <div id="tex">
          <h1>CV PORTFOLIO</h1>
          <p>Merci d'avoir pris le temps de regardé mon CV</p>
      </div>

      <div>
          <img src="img/moi.jpg" id="phts">
      </div>
    </div>
  </div>
</footer> 

<script type="text/javascript" src="js/script.js"></script>
</html>
