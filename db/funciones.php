<?php
  
  function consultar($consulta){
    if(!datos = mysql_query($consulta) or mysql_num_rows($datos)<1){
      return false;
    }else {
      return $datos;
    }
  }
  function genera_MenuSeleccion($datos,$name,$label){
    $codigo = '<label>'.$label.'</label>'."\n";
    $codigo = $codigo.'<select name = '".name."'>'."\n";
    while($fila = mysql_fetch_array($datos)){
      $codigo = $codigo.'<option value= '".$fila["id"]."'>.utf8_encode($fila["pais"]).</option>'."\n";
    }
    $codigo = $codigo."</select>\n";
    return $codigo;
  }
 ?>
