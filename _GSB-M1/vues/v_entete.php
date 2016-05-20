<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./styles/styles.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/logoH.ico" />
	<link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css">
  </head>
  <body>
    <div id="page">
      <div id="entete" style="background: linear-gradient(rgba(15,15,15, 0.9), rgba(0,0,255,.5));">
       <?php if(isset($_SESSION['type']))
		{
			if($_SESSION['type'] =="comptable" || $_SESSION['type'] =="commercial")
			{
				echo "<a href='./index.php?uc=connexion&action=accueil'>"?><img src="./images/logo.png" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" /></a><?php
			}
		}
		else{?>
			<img src="./images/logo.png" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
		<?php
		}?>
        <h1 id="enH1"> GSB - Frais</h1>
        <h1 id="enH1_1"> Gestion de remboursement des frais</h1>
      </div>