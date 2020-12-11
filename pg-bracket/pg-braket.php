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

  $ganadorLadoA = "Ganador Lado A";
  $ganadorLadoB = "Ganador Lado B";

  $equipoGanador = "Ganador";
?>

<section class="container-fluid">
  <div class="ca-abo-web ca-abo-grid ca-abo-template">

    <div class="ca-abo-leftRight ca-abo-left">
      <div class="ca-abo-round ca-abo-round1" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackLeft ca-abo-contenedorBack1">
          <div class="ca-abo-equipo ca-abo-equipoA" style="left: -1px;"><?php echo $equipo1 ?></div>
          <div class="ca-abo-equipo ca-abo-equipoB" style="left: -1px;"><?php echo $equipo2 ?></div>
        </div>
        <div class="ca-abo-contenedorBackLeft ca-abo-contenedorBack1">
          <div class="ca-abo-equipo ca-abo-equipoA" style="left: -1px;"><?php echo $equipo3 ?></div>
          <div class="ca-abo-equipo ca-abo-equipoB" style="left: -1px;"><?php echo $equipo4 ?></div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round2" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackLeft ca-abo-contenedorBack2">
          <div class="ca-abo-equipo ca-abo-equipoA" style="left: 10px;"><?php echo $ganadorPartido1 ?></div>
          <div class="ca-abo-equipo ca-abo-equipoB" style="left: 10px;"><?php echo $ganadorPartido2 ?></div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round3" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackLeft" style="border-bottom: none; width: 100%;">
          <div class="ca-abo-equipo ca-abo-equipoA" style="left: initial; right: -2px;"><?php echo $ganadorLadoA ?></div>
        </div>
      </div>
    </div>

    <div class="ca-abo-center" style="display: flex; align-items: center; justify-content: center; padding: 20px 0;">
      <div class="ca-abo-round ca-abo-round3">
        <div class="" style="border-bottom: none;">
          <div class="ca-abo-equipoGanador"><?php echo $equipoGanador ?></div>
        </div>
      </div>
    </div>

    <div class="ca-abo-leftRight ca-abo-right">
    <div class="ca-abo-round ca-abo-round3" style="padding: 20px 0; align-items: flex-end;">
        <div class="ca-abo-contenedorBackRight" style="border-bottom: none; width: 100%;">
          <div class="ca-abo-equipoRight ca-abo-equipoA" style="right: initial; left: -2px;"><?php echo $ganadorLadoB ?></div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round2" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackRight ca-abo-contenedorBack2">
          <div class="ca-abo-equipoRight ca-abo-equipoA" style="right: 10px;"><?php echo $ganadorPartido3 ?></div>
          <div class="ca-abo-equipoRight ca-abo-equipoB" style="right: 10px;"><?php echo $ganadorPartido4 ?></div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round1" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackRight ca-abo-contenedorBack1">
          <div class="ca-abo-equipoRight ca-abo-equipoA" style="right: -1px;"><?php echo $equipo5 ?></div>
          <div class="ca-abo-equipoRight ca-abo-equipoB" style="right: -1px;"><?php echo $equipo6 ?></div>
        </div>
        <div class="ca-abo-contenedorBackRight ca-abo-contenedorBack1">
          <div class="ca-abo-equipoRight ca-abo-equipoA" style="right: -1px;"><?php echo $equipo7 ?></div>
          <div class="ca-abo-equipoRight ca-abo-equipoB" style="right: -1px;"><?php echo $equipo8 ?></div>
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
    grid-template-columns: 3fr 1fr 3fr;
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
    margin: 40px 0;
    position: relative;
}

.ca-abo-contenedorBackRight {
    background: white;
    border-top: 1px solid black;
    border-left: 1px solid black;
    border-bottom: 1px solid black;
    margin: 40px 0;
    position: relative;
}

.ca-abo-contenedorBack1 {
    height: 80px;
}

.ca-abo-contenedorBack2 {
    height: 160px;
}

.ca-abo-equipo {
    border-left: 6px solid #00e7ff;
    background: whitesmoke;
    font-size: 12px;
    padding: 10px 12px 10px 6px;
    border-radius: 4px;
    position: absolute;
}

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

@media (max-width: 991px) {
  .ca-abo-template {
      grid-template-columns: 1fr;
  }

  .ca-abo-contenedorBack1 {
      height: 50px;
  }

  .ca-abo-contenedorBack2 {
      height: 90px;
  }

  .ca-abo-contenedorBackLeft {
      background: white;
      border-top: 1px solid black;
      border-right: 1px solid black;
      border-bottom: 1px solid black;
      margin: 20px 0;
      position: relative;
  }

  .ca-abo-contenedorBackRight {
      background: white;
      border-top: 1px solid black;
      border-left: 1px solid black;
      border-bottom: 1px solid black;
      margin: 20px 0;
      position: relative;
  }

  .ca-abo-center { grid-area: 3; }
}

@media (max-width: 439px) {
  .ca-abo-web {
    display: none;
  }
}
</style>