<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=devide-with, initial-scale=1.0">

	<title>Liste des Utilisateurs</title>


	<style type="text/css">
		table,td,tr{
			border: 3px solid transparent;
		}
		body{
			font-family: Verdana;
			font-size: 1.5em;
		}
		.tabhead{
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
			padding-right: 10px;
		}
		.line1{
			border-right: grey 2px solid;
			border-left: grey 2px solid;
		}
		.line2{
			border-collapse: collapse;
		}
	</style>

</head>

<body>
	<table>
		<thead style="color: white; background-color: dodgerblue;">
				<tr>
					<td class="tabhead">Nom</td>
					<td class="tabhead">Prenom</td>
					<td class="tabhead">Login</td>
					<td class="tabhead">Email</td>
				</tr>
		</thead>
		<tbody>
			<tr class="line1">
				<td>Diop</td>
				<td>Mademba</td>
				<td>madiop123</td>
				<td>madiop123@gmail.com</td>
			</tr>
			<tr style="background-color: lightgrey;" class="line2">
				<td>Ndiaye</td>
				<td>Demba</td>
				<td>dembadiop21</td>
				<td>dembadiop21@gmail.com</td>
			</tr>
		</tbody>
	</table>
</body>
</html>