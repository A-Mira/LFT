<?php
function loadpost($conn, $post){ // ID, autor, text, date
  //aquí hay que escribir todo el post.
  $post_id = $post[0];
  $post_autor = mysqli_query($conn, "SELECT ID, nombre FROM usuario WHERE ID like '$post[1]'");
  $post_autor = mysqli_fetch_array($post_autor);
  $autor_id = $post_autor[0];
  $post_autor = $post_autor[1];
  $post_text = $post[2];
  $post_date = $post[3];

  echo"
  <div class='row post'>
    <div class='row author'>
      <a href='profile.php?p=".$autor_id."'>".$post_autor."</a>
    </div>
    <div class='row content'>
      <span>".$post_text."</span>
    </div>
    <div class='row info'>
      <span>".$post_date."</span>
    </div>
  </div>
  ";
}
?>
