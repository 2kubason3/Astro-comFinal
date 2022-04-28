<?php 
session_start();
require_once "connect.php";

$connect = @new mysqli($host, $db_user, $db_password, $db_name);
if($connect->connect_errno!=0){
    echo "Coś nie bangla".$connect->connect_errno."opis:".$connect->connect_error;
}
else{
    $login = isset($_POST['emial']) ? $_POST['emial'] : '';
    $password = isset($_POST['haslo']) ? $_POST['haslo'] : '';

    $sql = "SELECT * FROM konto WHERE emial='$login' AND haslo='$password'";

    if($result = @$connect->query($sql)){
        if($result->num_rows>0){
            $row = $result->fetch_assoc();
            $_SESSION['user'] = $row['emial'];
            $_SESSION['uprawnienia']  =$row['uprawnienia'];
            unset( $_SESSION['wrong']);
            
            $result->free_result();
            if( $_SESSION['uprawnienia']== 'administrator'){
                header('Location: admin.php');
            }else{
                
                header('Location: index.php');
            }
            
           

        }else{
            $_SESSION['wrong'] = '<span style = "color:red;font-size:small;">Nieprawidłowy login lub hasło!</span>';
            header('Location: index.php');
        }
    }
   

    $connect->close();
}
?>