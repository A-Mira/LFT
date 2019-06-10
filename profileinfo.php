<div style="background-color: #39796b; font-size: 20px; border: 2px black solid" class="row col s12">
  <div class="col s12">


    <span><?php echo "$profile_nombre  <span style='font-size: 16px; color: silver'>@$profile_username</span>" ?></span>
    <?php
    if($profile_id != $self){
      if(checkfollow($conn, $profile_id, $self) == 0){
        echo "<a style='float: right; margin-top: 5px' class='waves-effect waves-light btn' href='follow.php?f=1&a=$self&p=$profile_id&u=".$_SERVER['REQUEST_URI']."'>FOLLOW</a>";
      }else{
        echo "<a style='background-color: red; float: right; margin-top: 5px' class='waves-effect waves-light btn' href='follow.php?f=0&a=$self&p=$profile_id&u=".$_SERVER['REQUEST_URI']."'>UNFOLLOW</a>";
      }
    }
    ?>
    <div class="row">
      <div style="font-size: 18px" class="col s12">
        <span>Seguidores: <?php echo "$followers"; ?></span>
        <span>Siguiendo: <?php echo "$follows"; ?></span>
      </div>
    </div>
  </div>
</div>
