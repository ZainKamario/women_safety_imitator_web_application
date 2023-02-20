
    <?php include 'leftbar.php';?>
    <div class="col-lg-9 main_cotent">

    
<meta http-equiv="refresh" content="2" />

<style>
    .table td, .table th {
    padding: .75rem;
    vertical-align: middle; 
    border-top: 1px solid #dee2e6;
}
</style>

<div class="pl-5 pt-5 pb-2">
        <h3 class="page_heading">Women Safety Application</h3>
        <br />
        <h3 class="page_heading">Manage Users</h3>
        </div>
            <br />

            
            <div class="card p-4 ml-5 shadow">

            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Number</th>
      <th scope="col">Actions</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php 
                
                if($user == TRUE){
                    $count = 0;
                    foreach($user as $row){
                    $count++;
                    ?>
    <tr>
      <th scope="row"><?= $count?></th>
      <td><?= $row['user_name']?></td>
      <td><?= $row['mobile']?></td>
      <td>

      <a href='<?= base_url()?>Institution/user_location/<?= $row['user_id']?>' style="text-decoration: none;">
                                        
                    <img src="<?= base_url()?>upload/location_png.png" style="margin: 10px;width: 30px;height: 30px;"></i>
                                    </a>
                                    <a href='<?= base_url()?>Institution/del_user/<?= $row['user_id']?>' style="text-decoration: none;">
                                        <!-- <i class='fa fa-trash theme_color' style=" margin: 10px;font-size: 20px;"></i> -->
                                        <img src="<?= base_url()?>upload/delete_png.png" style="margin: 10px;width: 30px;height: 30px;"></i>
                                   
                                    </a>
                                    <a href="<?= base_url()?>Institution/cancel_alert/<?= $row['user_id']?>">
                                        <img src="<?= base_url()?>upload/remove_alert.png" style="margin: 10px;width: 30px;height: 30px;"></i>
                                   
                                        </a>

      </td>
      <td>

      <?php
               if($row['status'] == 1){

                         // <i class="fa fa-circle" style="color:grey;"></i>
                               echo ' <i class="fa fa-circle" style="color:red;font-size:25px; "></i>' ;
                                            // echo "<i class='fas fa-dot-circle'style='color: red; text-align: center;'></i>";
                                 }
                            if($row['status'] == 0){

                                            
                        echo ' <i class="fa fa-circle" style="color:grey; font-size:25px; "></i>' ;
                       } ?>

      </td>
    </tr>

    <?php

}

}

?>

   
  </tbody>
</table>

           
        </div>


    </div>

    </div>

</body>
</html>