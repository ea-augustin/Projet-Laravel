<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
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
          <a class="nav-link text-white" href="/projet-laravel/public/">Accueil<span class="sr-only">(current)</span></a>
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

<!----------------------------------------- Formulaire d'inscription ------------------------------>

<body class="steep">
	<br>
	<form id="leMien" action="{{ route('home') }}" method="post">
		<h2>Créer un compte Ubisoft</h2>
		<label>Nom de compte</label>
		<input type="text" name="Login">
		<label>Mot de passe</label>
		<input type="password" name="MdP">
    <label>Addresse mail</label>
    <input type="text" name="eMail">
		<input type="submit" name="inscription" value="S'inscrire">
	</form>

<script type="text/javascript" src="js/scripts.js"></script>
</body>

<!---------------------------------------- Footer ----------------------------------------------->

<footer class="bg-dark">


  <p>© 2018 Ubisoft Entertainment. All Rights Reserved. Ubisoft, Ubi.com and the Ubisoft logo are trademarks of Ubisoft Entertainment in the U.S. and/or other countries.</p>

  <img src="img/Ubisoft_logo.svg">


<script type="text/javascript" src="js/scripts.js"></script>
</footer>