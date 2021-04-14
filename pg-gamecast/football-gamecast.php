<div class="container-fluid container-ab my-5" id="ab-gamecast">
    <div class="row my-5">
		<div class="col">
			<h1 class="ab-title">Juego en Vivo</h1>
		</div>
	</div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <!-- TABLA DE SCORING -->
            <div class="col-xl-12 col-lg-12 col-12 col-sm-12 d-flex mainScore">
                <div class="col-xl-3 col-lg-3 col-3 col-sm-3 fgs-team">
                    <h2 class="ab-title">Ecuador</h2>
                </div>
                <div class="col-xl-6 col-lg-6 col-6 col-sm-6 fgs-score">
                    <div class="fgs-timer">51:20</div>
                    <div class="fgs-info">
                        <div class="fgs-flag">
                            <img src="./assent/img/banderas-grandes/ECU.png">
                        </div>
                        <div class="fgs-goals">
                            <div class="ab-title">4</div>
                            <div>VS</div>
                            <div class="ab-title">1</div>
                        </div>
                        <div class="fgs-flag">
                            <img src="./assent/img/banderas-grandes/COL.png">
                        </div>
                    </div>
                    <div class="fgs-place">Estadio Luis Antonio<br>Aparacio Guzman</div>
                </div>
                <div class="col-xl-3 col-lg-3 col-3 col-sm-3 fgs-team">
                    <h2 class="ab-title">Colombia</h2>
                </div>
                <div class="otherLogo">
                    <img src="./assent/img/Lmp_logo.png">
                </div>
            </div>

            <!-- TABS DE TABLA -->
            <div class="col-xl-12 col-lg-12 col-12 col-sm-12 tabsFutbol">
                <nav>
                    <div class="nav col-md-12 text-center nav-tabs ab-tabs" id="nav-tab1" style="justify-content: center" role="tablist">
                        <a class="nav-item nav-link " id="nav-roster-tab" data-toggle="tab" href="#laprimera" role="tab" aria-controls="laprimera" aria-selected="false">Alineación</a>
                        <a class="nav-item nav-link " id="nav-estadististicas-tab" data-toggle="tab" href="#lasegunda" role="tab" aria-controls="lasegunda" aria-selected="true">Estadísticas</a>
                        <a class="nav-item nav-link active" id="nav-roster-tab" data-toggle="tab" href="#latercera" role="tab" aria-controls="latercera" aria-selected="false">Cronología</a>
                    </div>
                </nav>
            </div>

            <!-- TABLA PRINCIPAL -->
            <div class="tab-content" id="fgs-tabContent">
                <div class="tab-pane fade " id="laprimera" role="tabpanel" aria-labelledby="nav-roster-tab">
                <?php include('pg-equipos/tabla-football-gamecast-lineup.php')?>
                </div>
                <div class="tab-pane fade " id="lasegunda" role="tabpanel" aria-labelledby="nav-roster-tab">
                    <?php include('pg-equipos/tabla-football-gamecast-estadisticas.php')?>
                </div>
                <div class="tab-pane fade show active" id="latercera" role="tabpanel" aria-labelledby="nav-roster-tab">
                <?php include('pg-equipos/tabla-football-gamecast-timeline.php')?>
                </div>
            </div>

        </div>
    </div>
</div>