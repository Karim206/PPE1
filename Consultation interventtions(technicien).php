<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>CONsultation interventions technicien</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> 
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/stylesInterfarce1assitante.css">
	
	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>


<?php
/*
{
	try
}
{
	$bdd = new PDO('mysql:host=localhost;dbname=cashcash;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM client WHERE numClient=id.text');

<?php
		$mysqli = new mysqli('localhost', 'root', 'root', 'cashcash');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM interventions';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
		echo $ligne['numIntervent'].' '.$ligne['dateVisite'].' '.$ligne['heureVisite'].' ';
			}
		$mysqli->close();
		?>
*/
$bdd = mysqli_connect("localhost","root","root","cashcash");
?>


<body>

<!-- Header -->


<?php
		$reponse = 'SELECT * FROM interventions';
		$req = mysqli_query($bdd,$reponse);
		$afficher = $req -> fetch_array(MYSQLI_ASSOC);
		echo $afficher['numIntervent'];
		echo $afficher['dateVisite'];
		echo $afficher['heureVisite'];
		
?>	
</body>
</html>