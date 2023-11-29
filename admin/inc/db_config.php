<?php 

$HostName = 'localhost';
$UserName = 'root';
$Password = '';
$Database = 'hbweb';

$connection = mysqli_connect($HostName, $UserName, $Password, $Database);

if (!$connection) {
    die("Can Not Connect Database".mysqli_connect_error());
}

function filteration($data){
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $value, $datatype){
    $connection = $GLOBALS['connection'];
    if ($stmt = mysqli_prepare($connection, $sql)) {
       mysqli_stmt_bind_param($stmt, $datatype, ...$value);
       if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;
       }
       else{
        mysqli_stmt_close($stmt);
        die("Query Cannot be Exit - Admin Select");
       }
    }
    else{
        die("Query Cannot be Exit - Admin Select");
    }
}


?>