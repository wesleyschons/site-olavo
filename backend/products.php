<?php
require "connection.php";
$sql = "SELECT controle,produto, qtde, precovenda FROM estoque";

$products = $conn->query($sql);

if(isset($_GET['delid'])) {
    $id = intval($_GET['delid']);
    $sql = $conn->query("DELETE FROM estoque where CONTROLE=$id");
    header('Location: ../index.php');
}