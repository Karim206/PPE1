<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>accueil</title>

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
*/
$bdd = mysqli_connect("localhost","root","root","cashcash");
?>



<body>

<!-- Header -->

<a href="interface1(assistante).php">consulter les fiche clients </a>
<a href="affecter Interventions.php">affecter les interventions </a>
<a href="consulter Interventions.php">consulter les interventions </a>

	
</body>
</html>