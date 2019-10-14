<div class="d-sm-flex align-items-center justify-content-between mb-3">
  <h1 class="h3 mb-0 text-gray-800">Almacen A</h1>
  <div class="dropdown">
    <button class="btn dropdown-toggle collapse-item" type="button" data-toggle="dropdown">Almacenes
      <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <?php
            include("datos.php");
            include("funciones.php");
            if conectarBase($host,$usuario,$clave,$base) {
              $consulta = "SELECT * FROM almacenes";
              if($paquete = consultar($consulta)){
                
              }else {
                echo "<p>No se encontraron datos</p>";
              }
            }else {
              echo "<p>Servicio interrumpido</p>";
            }
           ?>

        </ul>
  </div>

  <label class="col-form-label">Desde</label>
  <div class="dropdown">
    <input class="btn form-control" type="date" value="2019-10-09">
  </div>
  <label class="col-form-label">Hasta</label>
  <div class="dropdown">
    <input class="btn form-control" type="date" value="2019-10-09">
  </div>
  <div class="dropdown">
    <button class="btn dropdown-toggle collapse-item" type="button" data-toggle="dropdown">Filas
      <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a class="collapse-item text-gray-800" href="#">1</a></li>
          <li><a class="collapse-item text-gray-800" href="#">2</a></li>
          <li><a class="collapse-item text-gray-800" href="#">3</a></li>
        </ul>
  </div>
  <div>
    <a href="reporte_alerta.php" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
    Reporte</a>
  </div>

</div>
