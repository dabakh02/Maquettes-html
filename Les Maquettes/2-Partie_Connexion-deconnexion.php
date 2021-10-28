<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=devide-with, initial-scale=1.0">

	<title>Connexion</title>

	<style type="text/css">
		a:hover{
			border-bottom: white 2px solid;
		}
		a{
			color: white;
			text-decoration: none;
			margin-right: 15px;
			margin-left: 5px;
		}
		input,label{
			margin-left: 10px;
			margin-top: 5px;
			margin-bottom: 15px;
		}
		body{
			font-family: Verdana;
		}
		button{
			margin-left: 210px;
			background-color: dodgerblue;
			color: white;
			font-family: Verdana;
			padding-top: 2px;
			padding-bottom: 2px;
			padding-left: 8px;
			padding-right: 8px;
			border-color: transparent;
			border-radius: 3px 3px 3px 3px;
		}
		input{
			width: 300px;
			border-color: lightgrey;
			border-radius: 3px 3px 3px 3px;
		}
		.formcontainer{
			border: 1px silver solid;
			display: flex;
			flex-direction: column;
			width: 350px;
		}
		.formheader{
			background-color: dodgerblue;
			color: white;
			font-size: 2em;
		}
		.formbody{
			background-color: white;
		}
		.formfooter{
			background-color: dodgerblue;
			font-size: 0.9em;
			padding-top: 30px;
			padding-bottom: 30px;
			padding-left: 30px;
			padding-right: 30px;
		}
		.header-title{
			margin-left: 15px;
		}
	</style>
</head>

<body>

	<form method="GET" action="startsession.php">
	<div class="formcontainer">

		<div class="formheader">
			<p class="header-title">Connexion</p>
		</div>
		<br>
		<div class="formbody">
			<label for="login-id">Login</label><br>
			<input type="text" name="login-id" id="login-id" maxlength="100" minlength="3"><br>
			<label for="password">Mot De Passe</label><br>
			<input type="password" name="password" id="password" maxlength="100" minlength="8"><br>
			<button type="submit" name="connection">Se Connecter</button><br>
		</div>
		<br>
		<div class="formfooter">
		<p>
			<a href="#">S'inscrirer</a>
			<a href="#">Mot De Passe Oublié</a>
		</p>
		</div>

	</div>
	</form>

</body>

</html>