<?php
require "connection.php";
$sql = "SELECT controle,produto, qtde, precovenda FROM estoque";

$results = $conn->query($sql);

if(isset($_GET['delid'])) {
    $id = intval($_GET['delid']);
    $sql = $conn->query("DELETE FROM estoque where CONTROLE=$id");
    echo "<script>alert('Dados deletados');</script>";
    echo "<script>window.location.href = 'index.php'</script>";   
    header('Location: ../index.php');
}