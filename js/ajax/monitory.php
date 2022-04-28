
<?php 
    session_start();
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
   $db_name ="sklep";
    
    $connect = @new mysqli($host, $db_user, $db_password, $db_name);
    if($connect->connect_errno!=0){
        echo "Coś nie bangla".$connect->connect_errno."opis:".$connect->connect_error;
    }
    else{
        $sql = "SELECT * FROM produkty WHERE kategoria='monitory'";
        $result=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_assoc($result)){
            echo "<a onclick='item()'>
            <div class='item'>
                <img alt='brak obrazka'src='".$row['obrazek']."'>
                <span>".$row['nazwa']."</span>
                <span class='kasa'>".$row['cena']."Zł</span>
                <span class='kasa'>Ilość: ".$row['ilosc']."</span>

                <div class='buy'>Do koszyka</div>
            </div>
        </a>";
        
        }
       
        $connect->close();
    }
?>