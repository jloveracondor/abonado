<?php
  $equipo1 = "Equipo 1";
  $equipo2 = "Equipo 2";
  $equipo3 = "Equipo 3";
  $equipo4 = "Equipo 4";
  $equipo5 = "Equipo 5";
  $equipo6 = "Equipo 6";
  $equipo7 = "Equipo 7";
  $equipo8 = "Equipo 8";

  $ganadorPartido1 = "Ganador Partido 1";
  $ganadorPartido2 = "Ganador Partido 2";
  $ganadorPartido3 = "Ganador Partido 3";
  $ganadorPartido4 = "Ganador Partido 4";
  $ganadorPartido5 = "Ganador Partido 5";
  $ganadorPartido6 = "Ganador Partido 6";

  $equipoGanador = "Ganador";
?>

<section class="container ca-abo-contenedorGeneral">
  <div class="ca-abo-web ca-abo-grid ca-abo-template">

    <div class="ca-abo-leftRight ca-abo-left">
      <div class="ca-abo-round ca-abo-round1" style="padding: 20px 0;">

        <div class="ca-abo-contenedorBackLeft ca-abo-contenedorBack1">
          <div class="ca-abo-partido ca-abo-partidoTop">
            <div class="ca-abo-equipo"><?php echo $equipo1 ?></div>
            <hr style="margin: 0!important;">
            <div class="ca-abo-equipo"><?php echo $equipo2 ?></div>
          </div>

          <div class="ca-abo-partido ca-abo-partidoBottom">
            <div class="ca-abo-equipo"><?php echo $equipo3 ?></div>
            <hr style="margin: 0!important;">
            <div class="ca-abo-equipo"><?php echo $equipo4 ?></div>
          </div>
        </div>

        <div class="ca-abo-contenedorBackLeft ca-abo-contenedorBack1">
          <div class="ca-abo-partido ca-abo-partidoTop">
            <div class="ca-abo-equipo"><?php echo $equipo5 ?></div>
            <hr style="margin: 0!important;">
            <div class="ca-abo-equipo"><?php echo $equipo6 ?></div>
          </div>

          <div class="ca-abo-partido ca-abo-partidoBottom">
            <div class="ca-abo-equipo"><?php echo $equipo7 ?></div>
            <hr style="margin: 0!important;">
            <div class="ca-abo-equipo"><?php echo $equipo8 ?></div>
          </div>
        </div>

      </div>


      <div class="ca-abo-round ca-abo-round2" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackLeft ca-abo-contenedorBack2">
          <div class="ca-abo-partido ca-abo-partidoSegundaRonda ca-abo-partidoTop">
            <div class="ca-abo-equipo"><?php echo $ganadorPartido1 ?></div>
            <hr style="margin: 0!important;">
            <div class="ca-abo-equipo"><?php echo $ganadorPartido2 ?></div>
          </div>

          <div class="ca-abo-partido ca-abo-partidoSegundaRonda ca-abo-partidoBottom">
            <div class="ca-abo-equipo"><?php echo $ganadorPartido3 ?></div>
            <hr style="margin: 0!important;">
            <div class="ca-abo-equipo"><?php echo $ganadorPartido4 ?></div>
          </div>
        </div>
      </div>


      <div class="ca-abo-round ca-abo-round3" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackLeft" style="border-bottom: none; width: 100%;">
          <div class="ca-abo-partido ca-abo-partidoSegundaRonda ca-abo-partidoCenter">
            <div class="ca-abo-equipo"><?php echo $ganadorPartido5 ?></div>
            <hr style="margin: 0!important;">
            <div class="ca-abo-equipo"><?php echo $ganadorPartido6 ?></div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="ca-abo-mobile">
    <div class="ca-abo-fase1">
      <div class="ca-abo-partidoMobile">
        <div class="ca-abo-disputaMobile">
          <div class="ca-abo-partidoMobileEquipo"><?php echo $equipo1 ?></div>
          <div class="ca-abo-partidoMobileEquipo"><?php echo $equipo2 ?></div>
        </div>
        <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido1 ?></div>
      </div>
      <div class="ca-abo-partidoMobile">
        <div class="ca-abo-disputaMobile">
          <div class="ca-abo-partidoMobileEquipo"><?php echo $equipo3 ?></div>
          <div class="ca-abo-partidoMobileEquipo"><?php echo $equipo4 ?></div>
        </div>
        <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido2 ?></div>
      </div>
      <div class="ca-abo-partidoMobile">
        <div class="ca-abo-disputaMobile">
          <div class="ca-abo-partidoMobileEquipo"><?php echo $equipo5 ?></div>
          <div class="ca-abo-partidoMobileEquipo"><?php echo $equipo6 ?></div>
        </div>
        <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido3 ?></div>
      </div>
      <div class="ca-abo-partidoMobile">
        <div class="ca-abo-disputaMobile">
          <div class="ca-abo-partidoMobileEquipo"><?php echo $equipo7 ?></div>
          <div class="ca-abo-partidoMobileEquipo"><?php echo $equipo8 ?></div>
        </div>
        <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido4 ?></div>
      </div>
    </div>
    <hr style="width: 100%; margin: 0;">
    <div class="ca-abo-fase2">
      <div class="ca-abo-partidoMobile">
        <div class="ca-abo-disputaMobile">
          <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido1 ?></div>
          <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido2 ?></div>
        </div>
        <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido5 ?></div>
      </div>
      <div class="ca-abo-partidoMobile">
        <div class="ca-abo-disputaMobile">
          <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido3 ?></div>
          <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido4 ?></div>
        </div>
        <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido6 ?></div>
      </div>
    </div>
    <hr style="width: 100%; margin: 0;">
    <div class="ca-abo-fase3">
      <div class="ca-abo-partidoMobile">
        <div class="ca-abo-disputaMobile">
          <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido5 ?></div>
          <div class="ca-abo-partidoMobileEquipo"><?php echo $ganadorPartido6 ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.ca-abo-grid {
    display: grid;
    grid-gap: 20px; 
    padding-left: 15px;
    padding-right: 15px;
    width: 100%;
}

.ca-abo-template {
    grid-template-columns: 1fr;
}

.ca-abo-leftRight {
    display: grid;
    width: 100%;
    grid-template-columns: repeat(3, 1fr);
    align-items: center;
}

.ca-abo-round {
    display: flex;
    flex-flow: column;
}

.ca-abo-contenedorBackLeft {
    background: white;
    border-top: 1px solid black;
    border-right: 1px solid black;
    border-bottom: 1px solid black;
    margin: 50px 0;
    position: relative;
}

.ca-abo-contenedorBackRight {
    background: white;
    border-top: 1px solid black;
    border-left: 1px solid black;
    border-bottom: 1px solid black;
    margin: 50px 0;
    position: relative;
}

.ca-abo-contenedorBack1 {
    height: 100px;
}

.ca-abo-contenedorBack2 {
    height: 200px;
}

.ca-abo-partido {
    border-left: 6px solid #00e7ff;
    background: whitesmoke;
    font-size: 16px;
    border-radius: 4px;
    position: absolute;
}

.ca-abo-partidoSegundaRonda { left: 24px; }

.ca-abo-partidoTop { top: calc(-89px / 2); }

.ca-abo-partidoCenter { top: -45px; right: -2px; left: auto; }

.ca-abo-partidoBottom { bottom: calc(-89px / 2); }

.ca-abo-equipo { padding: 10px 12px; }

.ca-abo-equipoRight {
    border-right: 6px solid #00e7ff;
    background: whitesmoke;
    font-size: 12px;
    padding: 10px 6px 10px 12px;
    border-radius: 4px;
    position: absolute;
}

.ca-abo-equipoGanador {
    border-left: 6px solid #00e7ff;
    border-right: 6px solid #00e7ff;
    background: whitesmoke;
    font-size: 12px;
    padding: 10px 30px 10px 30px;
    border-radius: 4px;
}

.ca-abo-equipoA { top: -19px; }

.ca-abo-equipoB { bottom: -19px; }

.ca-abo-mobile { display: none; }

@media (max-width: 991px) {
  /*.ca-abo-web {
    display: none;
  }
  
  .ca-abo-mobile {
    display: none;
    width: 100%;
    grid-template-columns: 1fr;
    grid-gap: 20px;
  }

  .ca-abo-fase1, .ca-abo-fase2 {
    display: grid;
    width: 100%;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
  }

  .ca-abo-partidoMobile {
    display: flex;
    flex-flow: column;
    align-items: center;
    text-align: center;
  }

  .ca-abo-disputaMobile { display: flex; }

  .ca-abo-partidoMobileEquipo {
    border-bottom: 6px solid #00e7ff;
    background: whitesmoke;
    font-size: 16px;
    border-radius: 4px;
    padding: 10px 20px 4px 20px;
    margin: 10px;
  }*/

  .ca-abo-grid { width: 1110px; }

  .ca-abo-contenedorGeneral { overflow-x: scroll; }
}

@media (max-width: 768px) {
  /*.ca-abo-fase1, .ca-abo-fase2 { grid-template-columns: 1fr; }*/
}
</style>