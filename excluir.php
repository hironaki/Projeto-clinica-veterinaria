<?php
require 'db.php';
if(isset($_GET['id'])){
    excluir($_GET['id']);
}
header('Location: dados.php');
exit;
?>
