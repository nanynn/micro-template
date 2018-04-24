<?php
if (isset($_POST['Descargar'])) { 
  $file = 'bases-microcuentos-2018.pdf';
  if (is_file($file)) {
    $filename = "bases2018.pdf"; // el nombre con el que se descargará, puede ser diferente al original
    /*header("Content-Type: application/octet-stream");*/
    header("Content-Type: archivos/pdf");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    readfile($file);
  } else {
    die("Error: no se encontró el archivo '$file'");
  }
}
?>