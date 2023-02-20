<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institution Signup</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <!--Custom Css file-->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
    <script>alert(<= $response ?>);</script>
    
    <div class="container">

        <div class="row">

            <div class="form_wrapper">

                <div class="text-center">

                    <h3>Institution SignUp</h3>

                </div>


                 <?php $data = array('action' =>'Institution/signin', 'method' =>'POST' );
     echo form_open("Institution/signup", $data); ?> 
                
                    <div class="form-group">
                        <?= form_label('Institute Name *')?>
                        <?= form_input(array('type' => 'text', 'class' => 'form-control', 'required' => 'required', 'name' => 'institiution_name', 'placeholder' => 'Institiution Name'))?>
                    </div>

                    <div class="form-group">
                        <?= form_label('Phone Number *')?>
                        <?= form_input(array('type' => 'number', 'class' => 'form-control', 'name' => 'phone_number', 'required' => 'required', 'placeholder' => 'Phone Number'))?>
                    </div>

                    <div class="form-group">
                        <?= form_label('Offical Email *')?>
                        <?= form_input(array('type' => 'email', 'class' => 'form-control', 'name' => 'email', 'required' => 'required', 'placeholder' => 'Email'))?>
                    </div>

                    <div class="form-group">
                        <?= form_label('Password ')?>
                        <?= form_input(array('type' => 'password', 'class' => 'form-control', 'name' => 'password', 'required' => 'required', 'placeholder' => '*****'))?>
                    </div>

                    <div class="form-group">
                        <?= form_label('City *')?>
                        <select name="city" class="form-control">
                            <?php 
                            
                                if($city == TRUE){

                                    foreach($city as $row){

                                        // echo "<option value='". $row['city_id'] ."'>
                                        //     ". $row['city_name'] ."
                                        // </option>";
                                        
                                        
                                        echo '<option value ="'.$row['city_id'].'">'.$row['city_name'].'</option>';

                                    }

                                }
                            
                            ?>
                        </select>
                    </div>

                    <button name="button" class="btn btn-default btn-block">SignUp</button>
                
                <?= form_close()?>

            </div>

        </div>

    </div>

</body>
</html>