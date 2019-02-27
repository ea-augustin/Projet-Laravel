<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="icon" href="img/logoTab.jpg">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
</head>

<header>

  <!--------------------------------- Barre de Navigation --------------------------------------->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="/projet-laravel/public/"><img src="img/ubi_logo.png" height="100" width="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/projet-laravel/public/dlc">DLC<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item connexion">
          <a class="nav-link text-white" href="/projet-laravel/public/co">Se connecter</a>
        </li>
      </ul>
      <div id="recherche">
        <input id="inputR" type="text" name="recherche" placeholder="recherche...">
        <img id="logo" src="img/search.png">
      </div>
    </div> 
  </nav>
</header>

<body>

  <!--------------------------------- Carousel Bootstrap --------------------------------------->

  <div>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/banniere.jpg" alt="First slide" width="500" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/ACO.jpg" alt="Second slide" width="500" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/FH.jpg" alt="Third slide" width="500" height="400">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>

  <!--------------------------------- Bannière centrale --------------------------------------->

  <div class="container">
    <div id="fond" class="jumbotron jumbotron-fluid">
      <div  class="container">
        <h1 class="display-4 text-dark">LES PROCHAINES SORTIES</h1>
      </div>
    </div>
</div>

<!--------------------------------- Card Decks Bootstrap --------------------------------------->

<div class="container">
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="img/the-division-2-ps4-xbox-pc-date-de-sortie-trailer-news-et-gameplay-du-nouvel-open-world-par-ubisoft_80635c15a2dbe491f9f7372b0f742923d3938814.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">The Division 2</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">69.99€</small></p>
          <button type="button" class="btn btn-primary buy">Acheter</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/Beyond-good-an-evil-2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Beyond Good and Evil 2</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">69.99€</small></p>
          <button type="button" class="btn btn-primary buy">Acheter</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/thumbnail_trials_rising_750x422_mobile_326396.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Trial Rising </h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">69.99€</small></p>
          <button type="button" class="btn btn-primary buy">Acheter</button>
        </div>
      </div>
    </div>
    <br/>
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="img/the%20settlers.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">The Settlers</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">69.99€</small></p>
          <button type="button" class="btn btn-primary buy">Acheter</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/SJ_KEY_ART_GRP_Final-Light-460x200.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Assassin's Creed Rebellion</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">4.99€</small></p>
          <button type="button" class="btn btn-primary buy">Acheter</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/c39484509f3b9456e30424f49f8b9.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Skull and Bones </h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">69.99€</small></p>
          <button type="button" class="btn btn-primary buy">Acheter</button>
        </div>
      </div>
    </div>  
  </div>
</div>

</body>

<!---------------------------------------- Footer ----------------------------------------------->

<footer class="bg-dark">


  <p>© 2018 Ubisoft Entertainment. All Rights Reserved. Ubisoft, Ubi.com and the Ubisoft logo are trademarks of Ubisoft Entertainment in the U.S. and/or other countries.</p>

  <img src="img/Ubisoft_logo.svg">

<script type="text/javascript" src="js/scripts.js"></script>
</footer>

