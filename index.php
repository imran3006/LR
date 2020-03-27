<?php
      include 'inc/header.php';
      include 'lib/user.php';
      $user=new User();
 ?>
    <div class="panel panel-default">
      <div class="panel-heading">
         <h2> User list <span class="pull-right"><strong>Welcome! </strong> Imran</span></h2>
      </div>

    </div>
           <div class="panel-body">
             <table class="table table-stripped">
               <tr>
                 <th width=20%>Serial</th>
                 <th width=20%>Name</th>
                 <th width=20%>UserName</th>
                 <th width=20%>Email Address</th>
                 <th width=20%>Action</th>

               </tr>
               <tr>

                 <td>01</td>
                 <td>Imran Sarker</td>
                 <td>imran</td>
                 <td>Emran.emu.sk@gmail.com</td>
                 <td>
                    <a class="btn btn-primary"href="profile.php?id=1">View</a>
                 </td>
               </tr>
               <tr>

                 <td>02</td>
                 <td>Rabet tamzeed</td>
                 <td>Ashik</td>
                 <td>Ashik@gmail.com</td>
                 <td>
                    <a class="btn btn-primary"href="profile.php?id=1">View</a>
                 </td>
               </tr>
               <tr>

                 <td>03</td>
                 <td>Asif siddque</td>
                 <td>Asif</td>
                 <td>Asif@gmail.com</td>
                 <td>
                  <a class="btn btn-primary"href="profile.php?id=1">View</a>
                 </td>
               </tr>

             </table>

           </div>


      <?php
        include 'inc/footer.php';
      ?>
