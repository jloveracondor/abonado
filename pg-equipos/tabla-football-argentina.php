<div class="container-fluid container-ab my-5" id="ab-tabla-equipo-interna">
		<div class="container">
			<div class="row">
				<div class="offset-xl-2 col-md-3 text-center my-auto">
					<img class="ab-image-equipo-bg" src="assent/img/banderas-grandes/ARG-150x150.png" style="border-radius: 0" alt="">
				</div>	
				<div class="col-xl-5 my-auto">
					<h1 class="ab-title-equipo"> ARGENTINA</h1>
					<!-- <h2 class="ab-subtitulo-equipo">5-3, Posición: 1</h2> -->
				</div>

			</div>
		</div>
</div>

<div class="row justify-content-center" style="font-size: 32px">
	<nav>
		<div class="nav col-md-12 text-center nav-tabs ab-tabs" id="nav-tab1" style="justify-content: center" role="tablist">
			<a class="nav-item nav-link active" id="nav-roster-tab" data-toggle="tab" href="#laprimera" role="tab" aria-controls="laprimera" aria-selected="true">Equipo</a>
			<a class="nav-item nav-link" id="nav-estadististicas-tab" data-toggle="tab" href="#lasegunda" role="tab" aria-controls="lasegunda" aria-selected="false">Estadísticas</a>

		</div>
	</nav>
</div>

	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="laprimera" role="tabpanel" aria-labelledby="nav-roster-tab">

			<?php include('pg-equipos/tabla-football-argentina-roster.php')?>

    </div>
    
		<div class="tab-pane fade" id="lasegunda" role="tabpanel" aria-labelledby="nav-estadististicas-tab">

			<?php include('pg-equipos/tabla-football-argentina-estadisticas.php')?>

		</div>

	</div>


