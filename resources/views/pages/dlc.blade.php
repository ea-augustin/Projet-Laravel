@extends('template')

@section('title')
     Inscription
@endsection



@section('content')
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
@endsection
