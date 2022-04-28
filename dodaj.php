
<?php 
session_start();
require_once "connect.php";

$connect = @new mysqli($host, $db_user, $db_password, $db_name);
if($connect->connect_errno!=0){
    echo "Coś nie bangla".$connect->connect_errno."opis:".$connect->connect_error;
}
else{
    $kategoria = isset($_POST['kategoria']) ? $_POST['kategoria'] : '';
    $nazwa = isset($_POST['nazwa']) ? $_POST['nazwa'] : '';
    $cena = isset($_POST['cena']) ? $_POST['cena'] : '';
    $dane = isset($_POST['dane']) ? $_POST['dane'] : '';
    $ilosc = isset($_POST['ilosc']) ? $_POST['ilosc'] : '';
    $obrazek = isset($_POST['obrazek']) ? $_POST['obrazek'] : '';

    $sql = "INSERT INTO produkty (id_produkty,kategoria,ilosc,dane_techniczne,cena,nazwa,obrazek) VALUES
    ('','".$kategoria."','".$ilosc."','".$dane."','".$cena."','".$nazwa."','".$obrazek."')";
if ($connect->query($sql) === TRUE) {
    echo "Dodano Pomyślnie";
} else {
    echo "Error:".$connect->error;
    echo $sql;
}
    
    }
   

    $connect->close();

?>

