<?php
include 'inc/header.php';
 ?>

           <div class="panel-body">
             <div style="max-width: 600px; margin :0 auto">

             

              <form class="" action="" method="post">
                <div class="form-group">
                  <label for="email">Email Adress</label>
                  <input type="text" id="email" name="email" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control"/>
                </div>

                <button type="submit" name="login" class="btn btn-success">Login</button>
              </form>
             </div>
           </div>


      <?php
        include 'inc/footer.php';
      ?>
