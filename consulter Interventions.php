<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Consulter Interventions (assistante)</title>

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
<a href="accueil.php">accueil </a>
<form name="fiche client" method="post" action="">
            Entrez la date de l'interventions : 
            <input type="date" name="DateInter"/><br/>
            ou Entrez le matricule du technicien: <input type="text" name="MatriculeTech"/> <br/>
            <input type="submit" name="valider" value="Rechercher"/>
        </form>
<?php

if(isset($_POST['valider'])){
    $DateInter=$_POST['DateInter'];
	$reponse = "SELECT * FROM interventions WHERE dateVisite=" .$_POST['DateInter'];
	$req = mysqli_query($bdd,$reponse);
	$afficher = $req -> fetch_array(MYSQLI_ASSOC);
	echo $afficher['dateVisite'];
	}

?>		

</body>
</html>