<?php include_once("index.html"); //Irá adicionar o arquivo especificado na execução do script, porém só irá incluir uma unica vez.


?>

<?php $script = file_get_contents('javascriptFile.js');
   echo "<script>".$script."</script>";
?>