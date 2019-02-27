@extends('template')

@section('title')
      Connexion
@endsection


@section('content')
<body class="steep">
	<br>
	<form id="leMien" action="LoginController">
		<h2>Se connecter</h2>
		<label>Nom de compte</label>
		<input type="text" name="Login">
		<label>Mot de passe</label>
		<input type="password" name="MdP">
		<input type="submit" name="connexion" value="Connexion">
		<p><a href="/projet-laravel/public/reg">Pas encore de compte ?</a></p>
	</form>

<script type="text/javascript" src="scripts/scripts.js"></script>
</body>
 @endsection