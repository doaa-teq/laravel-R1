
<?php
$host="localhost";
$username="root";
$password="";
try{
    $conn= new PDO("mysql::host=$host;dbname=cars",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
}catch(Exception $d){
    echo "connection failed".$d ->getMessage();
}
if (isset($_POST["send"])){
    $seq ='INSERT INTO cars(car_name,dascription,purchase,price) VALUES(?,?,?,?)';
    $STMT = $conn->prepare($seq);
    $name=$_POST["title"];//WITH POST WE USE THE NAMES OF THE FIELDS 
    //IT IS CONNECTED WITH form_data WHICH USE HTML FOR CREATING THE FORM
    $dis=$_POST["description"];
    $pur=$_POST["remember"];
    $price=$_POST["price"];
    $STMT-> execute([$name,$dis,$pur,$price]);

}
echo"<table border=1> 
<th>car_Neme</th>
<th>describtion</th>
<th>purphase</th>
<th>price</th>";
    try{
        $conn=new PDO("mysql:host=$host;dbname=cars",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $DATA=$conn->query("select* from cars")->fetchAll();
        foreach($DATA as $row){
            echo"    
            <tr>
            <td>{$row['car_name']}</td>
            <td>{$row['dascription']}</td>
            <td>{$row['purchase']}</td>
            <td>{$row['price']}</td>
          
          </tr>";
        }
        echo "</table>";
    }catch(Exception $D){
        echo "connection failed".$D->getMessage();
    }
    ?>