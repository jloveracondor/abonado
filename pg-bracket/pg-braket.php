<section class="container-fluid">
  <div class="ca-abo-grid ca-abo-template">

    <div class="ca-abo-leftRight ca-abo-left">
      <div class="ca-abo-round ca-abo-round1" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackLeft ca-abo-contenedorBack1">
          <div class="ca-abo-equipo ca-abo-equipoA">Primer Equipo</div>
          <div class="ca-abo-equipo ca-abo-equipoB">Segundo Equipo</div>
        </div>
        <div class="ca-abo-contenedorBackLeft ca-abo-contenedorBack1">
          <div class="ca-abo-equipo ca-abo-equipoA">Tercer Equipo</div>
          <div class="ca-abo-equipo ca-abo-equipoB">Cuarto Equipo</div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round2" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackLeft ca-abo-contenedorBack2">
          <div class="ca-abo-equipo ca-abo-equipoA" style="left: 10px;">Ganador Ronda 1</div>
          <div class="ca-abo-equipo ca-abo-equipoB" style="left: 10px;">Ganador Ronda 2</div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round3" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackLeft" style="border-bottom: none; width: 80%;">
          <div class="ca-abo-equipo ca-abo-equipoA" style="left: initial; right: -2px;">Ganador Lado Izquierdo</div>
        </div>
      </div>
    </div>

    <div class="ca-abo-center" style="background: red;">
      
    </div>

    <div class="ca-abo-leftRight ca-abo-right">
    <div class="ca-abo-round ca-abo-round3" style="padding: 20px 0; align-items: flex-end;">
        <div class="ca-abo-contenedorBackRight" style="border-bottom: none; width: 80%;">
          <div class="ca-abo-equipoRight ca-abo-equipoA" style="right: initial; left: -2px;">Ganador Lado Derecho</div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round2" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackRight ca-abo-contenedorBack2">
          <div class="ca-abo-equipoRight ca-abo-equipoA" style="right: 10px;">Ganador Ronda 1</div>
          <div class="ca-abo-equipoRight ca-abo-equipoB" style="right: 10px;">Ganador Ronda 2</div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round1" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBackRight ca-abo-contenedorBack1">
          <div class="ca-abo-equipoRight ca-abo-equipoA" style="right: 0px;">Quinto Equipo</div>
          <div class="ca-abo-equipoRight ca-abo-equipoB" style="right: 0px;">Sexto Equipo</div>
        </div>
        <div class="ca-abo-contenedorBackRight ca-abo-contenedorBack1">
          <div class="ca-abo-equipoRight ca-abo-equipoA" style="right: 0px;">Septimo Equipo</div>
          <div class="ca-abo-equipoRight ca-abo-equipoB" style="right: 0px;">Octavo Equipo</div>
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

.ca-abo-equipoA { top: -19px; }

.ca-abo-equipoB { bottom: -19px; }
</style>