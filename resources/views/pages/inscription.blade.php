@extends('template')

@section('title')
     Inscription
@endsection


@section('content')
<body class="steep">
	<br>
	<form id="leMien" action="{{ url('create') }}" method="post">
		@csrf
		<h2>Créer un compte Ubisoft</h2>
		<label>Nom de compte</label>
		<input type="text" name="name">
		<label>Mot de passe</label>
		<input type="password" name="password">
    	<label>Addresse mail</label>
    	<input type="text" name="email">
		<input type="submit" name="inscription" value="S'inscrire">
	</form>
</body>
@endsection


