<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--Custom Css file-->
<link rel="stylesheet" href="http://localhost/women_safety/assets/css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

        <div class="row">

            <div style="background: #fff; max-width: 500px; padding: 20px; margin: auto;">

                <div class="text-center">
                    <h3>User Register</h3>
                </div>

                <?= form_open()?>
                
                    <div class="form-group">
                        <?= form_label('First Name *')?>
                        <?= form_input(array('type' => 'text', 'class' => 'form-control', 'name' => 'first_name', 'required' => 'required'))?>
                    </div>

                    <div class="form-group">
                        <?= form_label('Last Name *')?>
                        <?= form_input(array('type' => 'text', 'class' => 'form-control', 'name' => 'last_name', 'required' => 'required'))?>
                    </div>

                    <div class="form-group">
                        <?= form_label('Email *')?>
                        <?= form_input(array('type' => 'email', 'class' => 'form-control', 'name' => 'email', 'required' => 'required'))?>
                    </div>

                    <div class="form-group">
                        <?= form_label('Mobile *')?>
                        <?= form_input(array('type' => 'mobile', 'class' => 'form-control', 'name' => 'mobile', 'required' => 'required'))?>
                    </div>

                    <div class="form-group">
                        <?= form_label('Password *')?>
                        <?= form_input(array('type' => 'password', 'class' => 'form-control', 'name' => 'password', 'required' => 'required'))?>
                    </div>
                

                    <button name="btn" class="btn btn-default btn-block">Register</button>

                <?= form_close()?>

            </div>

        </div>

    </div>
</body>
</html>