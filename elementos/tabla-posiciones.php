<div class="container-fluid container-ab my-5" id="ab-posiciones">
	<div class="row">
		<div class="col">
			<h1 class="ab-title"> Posiciones</h1>
		</div>
	</div>

	<div class="row my-3">
		<div class="col-6 col-md-2">
			<select class="form-control" id="exampleFormControlSelect1">
				<option>LVBP</option>
				<option>LVBP</option>
				<option>LVBP</option>
				<option>LVBP</option>
				<option>LVBP</option>
			</select>
		</div>
		<div class="col-6 col-md-10 align-middle">
			
			<nav>
				<div class="nav nav-tabs ab-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-regular-tab" data-toggle="tab" href="#nav-regular" role="tab" aria-controls="nav-regular" aria-selected="true">Regular</a>
					<a class="nav-item nav-link" id="nav-segunda-tab" data-toggle="tab" href="#nav-segunda" role="tab" aria-controls="nav-segunda" aria-selected="false">Segunda Vuelta</a>

				</div>
			</nav>
		</div>
	</div>
<!-- Tabs-->
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-regular" role="tabpanel" aria-labelledby="nav-regular-tab">
			<?php include("tabla-posiciones-lvbp.php") ?>
			<?php include("tabla-posiciones-lmp.php") ?>

		</div>
		<div class="tab-pane fade" id="nav-segunda" role="tabpanel" aria-labelledby="nav-segunda-tab">
			<?php include("tabla-posiciones-lmp-2da.php") ?>

		</div>

	</div>
	
</div>