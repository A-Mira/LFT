<?php
function loadpost($post){ // ID, autor, text, date
  //aquí hay que escribir todo el post.
  $post_id = $post[0];
  $post_autor = mysqli_query($conn, "SELECT nombre FROM usuario WHERE id like '$post[1]'");
  $post_autor = mysqli_fetch_array($post_autor)[0];
  $post_text = $post[2];
  $post_date = $post[3];
}
?>

<div class="row post">
  <div class="row author">
    <a href="profile?p=$post_id">$post_autor</a>
  </div>
  <div class="row content">
    
  </div>
</div>
