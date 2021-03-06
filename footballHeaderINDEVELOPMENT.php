<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>El Abonado</title>
	<link rel="stylesheet" href="/abonado/css/main.css"> 
	<link rel="stylesheet" href="/abonado/assent/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="/abonado/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
	<!-- Menu--> 
	<nav id="ab-nav" class="navbar navbar-expand-lg navbar-light ">
		<a class="navbar-brand" href="index.php"><img src="/abonado/assent/img/abonado-logo 1.png" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

			
			<!-- EMPIEZA EJEMPLO -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						EJEMPLO
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">LIDOM</a>
						<a class="dropdown-item" href="#">LMP</a>
						<a class="dropdown-item" href="#">LBPRC</a>
					</div>
				</li>
			<!-- TERMINA EJEMPLO -->
			<li class="nav-item dropdown">
          <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
          <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="#" class="dropdown-item">Some action </a></li>
						<li><a href="#" class="dropdown-item">Some other action</a></li>
					

            <!-- Level two dropdown-->
            <li class="dropdown-submenu">
              <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
              <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                <li>
                  <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                </li>

                <!-- Level three dropdown-->
                <li class="dropdown-submenu">
                  <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                  <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                  </ul>
                </li>
                <!-- End Level three -->

                <li><a href="#" class="dropdown-item">level 2</a></li>
                <li><a href="#" class="dropdown-item">level 2</a></li>
              </ul>
            </li>
						<!-- End Level two -->
						<li><a href="#" class="dropdown-item">RELLENO 1</a></li>
						<li><a href="#" class="dropdown-item">RELLENO 2</a></li>
						<li><a href="#" class="dropdown-item">Some other action</a></li>
					</ul>
			</li>
			<!-- TEST -->
			<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						EJEMPLO
					</a>
					
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">LIDOM</a>
						<a class="dropdown-item" href="#">LMP</a>
						<a class="dropdown-item" href="#">LBPRC</a>
					</div>
				</li>
			<!--  END TEST-->
				
				<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							DEPORTE
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
						<!-- test -->
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							FUTBOL
						</a>
							<div class="dropdown" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">FIFA 2022</a>
								<a class="dropdown-item" href="#">La Liga</a>
								<a class="dropdown-item" href="#">UEFA</a>
							</div>
						</a>

						<a href="#" class="dropright dropdown-item">
						<div class="dropright dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
							BASEBALL
						</div>
						<div class="dropdown-menu">
						<a class="dropdown-item" href="#">LIDOM</a>
							<a class="dropdown-item" href="#">LMP</a>
							<a class="dropdown-item" href="#">LBPRC</a>
						</div>
						</a>

						</div>
					</li>

				<!-- RESULTADOS -->
				<li class="nav-item active">
					<a class="nav-link" href="index.php">RESULTADOS <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="posiciones.php">POSICIONES</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="estadisticas-jugador-bat.php">ESTADÍSTICAS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="equipos.php">EQUIPOS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="boxcore.php">BOXCORE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gamecast.php">GAMECAST</a>
				</li>
			</ul>
			<div class="form-inline my-2 my-lg-0 ab-social">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-youtube"></i>
			</div>
		</div>
	</nav>
<!-- Fin del menu--> 

