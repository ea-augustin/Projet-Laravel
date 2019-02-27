@extends('template')

@section('title')
     About
@endsection


@section('content')
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
 @endsection