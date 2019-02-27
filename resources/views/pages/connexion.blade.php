@extends('template')

@section('title')
      Connexion
@endsection


@section('content')
<body class="steep">
	<br>
	<form id="leMien" action="/projet-laravel/public/read/4" method="post">
	@csrf
		<h2>Se connecter</h2>
		<label>Nom de compte</label>
		<input type="text" name="Login">
		<label>Mot de passe</label>
		<input type="password" name="MdP">
		<input type="submit" name="connexion" value="Connexion">
		<p><a href="{{route('reg')}}">Pas encore de compte ?</a></p>
	</form>
</body>
@endsection