<?php
$filename = $_POST['archivo'];
unlink($filename);
echo "el archivo ah sido eliminado con exito";

?>