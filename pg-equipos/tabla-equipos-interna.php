<div class="container-fluid container-ab my-5" id="ab-tabla-equipo-interna">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="offset-xl-1 col-xl-2 text-center my-auto">
					<img class="img-fluid img-round  border ab-image-equipo-bg" src="assent/img/LVBP/redondos/bravos-de-margarita 1.png" alt="">
				</div>	
				<div class="col-xl-5 my-auto">
					<h1 class="ab-title-equipo"> Bravos de Margarita</h1>
					<h2 class="ab-subtitulo-equipo">5-3, Posición: 1</h2>
				</div>
				<div class="col-xl-3 my-auto">
					<select class="form-control" id="exampleFormControlSelect1">
						<option>LVBP</option>
						<option>LVBP</option>
						<option>LVBP</option>
						<option>LVBP</option>
						<option>LVBP</option>
					</select>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="container">
	<nav>
		<div class="nav nav-tabs ab-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Estadísticas</a>
			<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Roster</a>

		</div>
	</nav>
</div>

	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

			<?php include('pg-equipos/estadisticas-equipo.php')?>

		</div>
		<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			<?php include('pg-equipos/roster.php')?>

		</div>

	</div>


