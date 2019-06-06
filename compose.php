  <div  style='border-bottom: 2px solid black' class="row">
    <form class="col s12" method="post" action="compose_insert.php">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea style="color:white" id="compose" class="materialize-textarea" name="text" data-length="300"></textarea>
              <label for="compose">What are you thinking?</label>
            </div>
            <div class="input-field col s4">
              <button class="waves-effect waves-light btn" type = "Submit" name = "post" >
                Post! <i class="material-icons right">send</i>
              </button>
            </div>
            <input id="url" name="url" type="hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>"/>
          </div>
      </form>
