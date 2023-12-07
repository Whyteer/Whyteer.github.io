<?php include("config/baza.php"); ?>


<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap" rel="stylesheet">
  

  </head>
  <body>
   <div class="containerr">

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="grafika/pilka.png"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav">
		<li class="nav-item active"> <a class="nav-link" href="index.php">Strona Główna </a> </li>
		<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Druzyny  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="listadruzyn.php"> Lista Druzyn</a></li>
			  <li><a class="dropdown-item" href="zawodnicy.php"> Zawodnicy </a></li>
		    </ul>
		</li>
    <li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Rozgrywki  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="listalig.php"> Lista Lig</a></li>
			  <li><a class="dropdown-item" href="mecze.php"> Mecze </a></li>
		    </ul>
		</li>
	</ul>
  </div>
 </div> 
</nav>