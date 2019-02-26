<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>DLC</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <link rel="stylesheet" type="text/css" href="styles/dlc.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="jquery.js"></script>
</head>

<header>

  <!--------------------------------- Barre de Navigation --------------------------------------->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="index.html"><img src="img/ubi_logo.png" height="100" width="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="index.html">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="dlc.html">DLC<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item connexion">
          <a class="nav-link text-white" href="connexion.html">Se connecter</a>
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

<!--------------------------------- Bannière DLC ---------------------------------------------->

  <image src="img/HomeHero_BF2018_desk.jpg" class="img-fluid" alt="Responsive image"><h3 class="dede">JUSQU'À 80% DE RÉDUCTION
    <br/> BONUS:1DLC offert pour 25€ D'achat<br/><a href="#lesDLC"><button type="button" class="btn btn-info">JE FONCE</button></a></h3></image>

<!--------------------------------- Card Decks Bootstrap --------------------------------------->

    <div id='lesDLC' class="container">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="img/56c4947e88a7e300458b4676.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">ANNO 2205</h6>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">14.99€</small></p>
            <button type="button" class="btn btn-primary buy">Acheter</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/5a216cf44e0165397329ec88.png" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">RAINBOW SIX PASS YEARS 3</h6>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">29.99€</small></p>
            <button type="button" class="btn btn-primary buy">Acheter</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/dlc%20ac%20liberty.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">ASSASSIN'S CREED BLACK : FLAG SEASON PASS</h6>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">19.99€</small></p>
            <button type="button" class="btn btn-primary buy">Acheter</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/dlc%20south%20park.jpg">
          <div class="card-body">
            <h6 class="card-title">SOUTH PARK SEASON PASS</h6>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">19.99€</small></p>
            <button type="button" class="btn btn-primary buy">Acheter</button>
          </div>
        </div>
      </div>
      <br/>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="img/dlc%20for%20honor%201.jpg">
          <div class="card-body">
            <h6 class="card-title">FOR HONOR SEASON PASS YEAR 1</h6>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">19.99€</small></p>
            <button type="button" class="btn btn-primary buy">Acheter</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/dlc%20ac%20origin.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">ASSASSIN'S CREED : ORIGIN'S SEASON PASS</h6>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">99.99€</small></p>
            <button type="button" class="btn btn-primary buy">Acheter</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/dlc%20ac%20syndicate.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">ASSINSSIN'S CREED SYNDICATE SEASON PASS</h6>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">24.99€</small></p>
            <button type="button" class="btn btn-primary buy">Acheter</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/dlc%20farcry.jpg" alt="Card image cap">
          <div class="card-body">
            <h6 class="card-title">FARCRY 5 SEASON PASS </h6>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">24.99€</small></p>
            <button type="button" class="btn btn-primary buy">Acheter</button>
          </div>
        </div>
      </div>  
    </div>
  </body>

<!---------------------------------------- Footer ----------------------------------------------->

  <footer class="bg-dark">
    <p>© 2018 Ubisoft Entertainment. All Rights Reserved. Ubisoft, Ubi.com and the Ubisoft logo are trademarks of Ubisoft Entertainment in the U.S. and/or other countries.</p>
    <script type="text/javascript" src="scripts/scripts.js"></script>

    <img src="img/Ubisoft_logo.svg">
  </footer>
</html>