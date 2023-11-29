<?php 

require('inc/db_config.php');
require('inc/essentials.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Pannel</title>
    <?php require('inc/stylelinks.php') ?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">
    
    <div class="login-form text-center shadow bg-white overflow-hidden rounded">
        <form method="POST">
            <h4 class="bg-dark py-3 text-white">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input type="text" name="admin_name" required class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-3">
                    <input type="password" name="admin_password" required class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button type="submit" name="login" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

<?php 

if (isset($_POST['login'])) {
    $frm_data = filteration($_POST);
    
    $query = "SELECT * FROM `admin_crud` WHERE `admin_name` = ? AND `admin_password` = ? ";
    $values = [$frm_data['admin_name'],$frm_data['admin_password']];

    $res = select($query, $values, "ss");
    // print_r ($res);

    if($res-> num_rows == 1){
        echo "Got User";
    }
    else{
       alert('error', 'Login Failed - Invalid Crendentials!');
    }
}

?>

    <?php require('inc/scriptlink.php') ?>
</body>
</html>