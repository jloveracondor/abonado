<section class="container-fluid">
  <div class="ca-abo-grid ca-abo-template">
    <div class="ca-abo-left">
      <div class="ca-abo-round ca-abo-round1" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBack ca-abo-contenedorBack1">
          <div class="ca-abo-equipo ca-abo-equipoA">Primer Equipo</div>
          <div class="ca-abo-equipo ca-abo-equipoB">Segundo Equipo</div>
        </div>
        <div class="ca-abo-contenedorBack ca-abo-contenedorBack1">
          <div class="ca-abo-equipo ca-abo-equipoA">Tercer Equipo</div>
          <div class="ca-abo-equipo ca-abo-equipoB">Cuarto Equipo</div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round2" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBack ca-abo-contenedorBack2">
          <div class="ca-abo-equipo ca-abo-equipoA" style="left: 10px;">Ganador Ronda 1</div>
          <div class="ca-abo-equipo ca-abo-equipoB" style="left: 10px;">Ganador Ronda 2</div>
        </div>
      </div>
      <div class="ca-abo-round ca-abo-round3" style="padding: 20px 0;">
        <div class="ca-abo-contenedorBack" style="border-bottom: none; width: 80%;">
          <div class="ca-abo-equipo ca-abo-equipoA" style="left: initial; right: -2px;">Ganador Lado A</div>
        </div>
      </div>
    </div>
    <div class="ca-abo-center" style="background: red;">
      
    </div>
    <div class="ca-abo-right" style="background: blue;">
      
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

.ca-abo-left {
    display: grid;
    width: 100%;
    grid-template-columns: repeat(3, 1fr);
    align-items: center;
}

.ca-abo-round {
    display: flex;
    flex-flow: column;
}

.ca-abo-contenedorBack {
    background: white;
    border-top: 1px solid black;
    border-right: 1px solid black;
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
    padding: 10px 12px 10px 4px;
    border-radius: 4px;
    position: absolute;
}

.ca-abo-equipoA { top: -19px; }

.ca-abo-equipoB { bottom: -19px; }
</style>