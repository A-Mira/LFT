<?php
include 'includes/checksession.php';
include 'includes/config.php';
$autor = $_GET['a'];
$post = $_GET['p'];
$sql = "SELECT id_autor FROM post WHERE ID LIKE '$post'";
$url = $_GET['u'];

if ($self == mysqli_fetch_array(mysqli_query($conn, $sql))[0]) {
  mysqli_query($conn, "DELETE FROM post WHERE ID LIKE '$post'");
}else{
  echo "<script> alert('No tienes permiso para borrar este post')</script>";
}
echo "<script> window.location.replace('$url')</script>";
?>
