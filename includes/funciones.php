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
  <div style='border-bottom: 1px solid black' class='row post'>
    <div style='padding-bottom: 15px' class='author'>
      <a href='profile.php?p=".$autor_id."'>".$post_autor."</a>
    </div>
    <div style='padding-bottom: 5px' class='content'>
      <span>".$post_text."</span>
    </div>
    <div style='text-align: right' class='info'>
      <span>".$post_date."</span>
    </div>
  </div>
  ";
}

function checkfollow($conn, $profile_id, $self){
  $check = mysqli_query($conn, "SELECT * FROM user_follow WHERE id_follower = $self AND id_followed = $profile_id");

  if (mysqli_num_rows($check) == 1) {
    return 1;
  }else{
    return 0;
  }
}
?>
