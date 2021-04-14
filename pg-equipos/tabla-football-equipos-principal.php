
<div class="container-fluid container-ab my-5" id="ab-gamecast">
    <div class="row my-5">
		<div class="col titulo-equipo">
            <img src="./assent/img/banderas-grandes/ARG-150x150.png" alt="">
			<h1 class="ab-title">Argentina</h1>
		</div>
	</div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">

            <!-- TABS DE TABLA -->
            <div class="col-xl-12 col-lg-12 col-12 col-sm-12 tabsFutbol">
                <nav>
                    <div class="nav col-md-12 text-center nav-tabs ab-tabs" id="nav-tab1" style="justify-content: center" role="tablist">
                        <a class="nav-item nav-link active" id="nav-equipo-tab" data-toggle="tab" href="#laprimera" role="tab" aria-controls="laprimera" aria-selected="false">Equipo</a>
                        <a class="nav-item nav-link" id="nav-estadististicas-tab" data-toggle="tab" href="#lasegunda" role="tab" aria-controls="lasegunda" aria-selected="true">Estadísticas</a>
                    </div>
                </nav>
            </div>

            <!-- TABLA PRINCIPAL -->
            <div class="tab-content" id="fgs-tabContent">
                <div class="tab-pane fade show active" id="laprimera" role="tabpanel" aria-labelledby="nav-equipo-tab">
                <?php include('pg-equipos/tabla-football-equipos-equipos.php')?>
                </div>
                <div class="tab-pane fade " id="lasegunda" role="tabpanel" aria-labelledby="nav-estadisticas-tab">
                    
                </div>
            </div>

        </div>
    </div>
</div>