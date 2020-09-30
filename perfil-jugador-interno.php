<div class="container-fluid container-ab my-5" id="ab-tabla-equipo-interna">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class=" col-xl-2 text-center my-auto">
					<img class="img-fluid img-round  border ab-image-equipo-bg" src="assent/img/LVBP/redondos/bravos-de-margarita 1.png" alt="">
				</div>	
				<div class="col-xl-4 my-auto ">
					<h1 class="ab-title-equipo"> Frank Diaz</h1>
					<h2 class="ab-subtitulo-equipo"><span class="gris-oscuro">BDM </span> • RP</h2>
				</div>
				<div class="col-xl-3 my-auto ab-info-jugador">
					<p><span> Nacimiento: </span> 3/9/1995 (25)</p>
					<p><span> Nacido en: </span> Margarita</p>
					<p><span>  A/P: </span> 81.00 / 1.98 Kg.</p>
					<p><span> B/L: </span> I/I </p>
				</div>
				<div class="col-xl-3 my-auto">
					<select class="form-control" id="exampleFormControlSelect1">
						<option>Frank Diaz</option>
						<option>Frank Diaz</option>
						<option>Frank Diaz</option>
						<option>Frank Diaz</option>
						<option>Frank Diaz</option>
					</select>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="container">
	<nav>
		<div class="nav nav-tabs ab-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-estadisticas-panel" data-toggle="tab" href="#nav-estadisticas" role="tab" aria-controls="nav-estadisticas" aria-selected="true">Estadísticas</a>
			<a class="nav-item nav-link" id="splits" data-toggle="tab" href="#nav-splits" role="tab" aria-controls="nav-splits" aria-selected="false">Splits</a>
			<a class="nav-item nav-link" id="jugados" data-toggle="tab" href="#nav-jugados" role="tab" aria-controls="nav-jugados" aria-selected="false">Juegos por Jugar</a>

		</div>
	</nav>
</div>

<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-estadisticas" role="tabpanel" aria-labelledby="nav-estadisticas">

		<?php include('pg-jugador/tabla-estadisticas-jugador.php')?>

	</div>
	<div class="tab-pane fade" id="nav-splits" role="tabpanel" aria-labelledby="nav-splits-tab">

		<?php include('pg-jugador/tabla-split.php')?>

	</div>

	<div class="tab-pane fade show" id="nav-jugados" role="tabpanel" aria-labelledby="nav-jugados"  >
		<?php include('pg-jugador/juego-por-jugar.php')?>

	</div>



</div>


