<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>affecter interventions</title>

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





<body>

<!-- Header -->
<a href="accueil.php">accueil </a>
<form name="affecter_interventions" method="post" action="">
            numero intervenant : <input type="text" name="numIntervent"/> <br/>
            Date de l'a visite : <input type="text" name="dateVisite"/> <br/>
            heure de l'a visite : <input type="text" name="heureVisite"/> <br/>
            <input type="submit" name="valider" value="affecter interventions"/>
        </form>


<?php
// on teste si les variables du formulaire sont bien déclarées
if (isset($_POST['numIntervent'])) {
		$mysqli = new mysqli('localhost', 'root', 'root', 'cashcash');
		$mysqli->set_charset('utf8');
		$requete='INSERT INTO intervention VALUES("'.$_POST['numIntervent'].'","'.$_POST['dateVisite'].'","'.$_POST['heureVisite'].'")';
		$resultat = $mysqli->query($requete);
		if ($resultat)
			echo "<p>l'intervention a etait ajoute</p>";
		else
			echo "<p>Erreur</p>";
}

?>	

</body>
</html>