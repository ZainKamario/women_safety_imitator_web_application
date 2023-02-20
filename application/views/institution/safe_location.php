    
    <?php include 'leftbar.php';?>
    <div class="col-lg-9 main_cotent">

    <div class="pl-5 pt-5 pb-2">
        <h3 class="page_heading">Women Safety Application</h3>
        <br />
        <h3 class="page_heading">Manage Users</h3>
        </div>
            <br />

        <div class="row space-top">


            <!--Add New-->
            <div class=".container-fluid w-100">
            <div class="card p-4 ml-5 shadow">

            <?php $data = array('action' =>'Institution/signin', 'method' =>'POST' );
     echo form_open("Institution/safe_loc", $data); ?> 
                    
                    <div class="row alignment-justify">
                        <div class='form-group col-6'>
                            <?= form_label('Latitude *')?>
                            <?= form_input(array('type' => 'text','name' => 'latitude', 'class' => 'form-control'))?>
                        </div>

                        <div class='form-group col-6'>
                            <?= form_label('Longitude *')?>
                            <?= form_input(array('type' => 'text','name' => 'longitude', 'class' => 'form-control'))?>
                        </div>
                        <div class="mx-auto pr-4 pt-3">
                        <button class="logout_bn" name="loc_btn" >ADD LOC</button></div>
                        </div>
                        </div>
                      

                        <?= form_close()?>

                </div>

            </div>


            <!--Already Exists-->
            
                <div class="card p-4 ml-5 mt-5 shadow">

                <table class="table">
  <thead>
                        <tr>
                            <th>#</td>
                            <th>Latitude</td>
                            <th>Longitude</td>
                        </tr>
                        <thead>
                            <tbody>
                            <?php 
                
                if($safe_location == TRUE){
                    $count = 0;
                    foreach($safe_location as $row){
                    $count++;
                    ?>
                        <tr>
                            <td><?= $count?></td>
                            <td><?=$row['latitude']?></td>
                            <td><?=$row['longitude']?></td>
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

        </div>

        </div>

</body>
</html>