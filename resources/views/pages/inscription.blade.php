@extends('template')

@section('title')
     Inscription
@endsection



@section('content')
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
@endsection


