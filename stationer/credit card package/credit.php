<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Data";
$conn = new mysqli("localhost","root", "","Data");
$code = $_POST['code'];
$credit = $_POST['credit'] ;
$pass = $_POST['password'] ;

echo("credit number : " .$credit);
echo"<br>";
if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
if($conn)
{
$sql = mysqli_query($conn,"select * from Credit where credit='" . $_POST['credit'] . "' and Pass='" . $_POST['password'] . "'");
$row = $sql->fetch_assoc();
    if($row)
    {
        $sql1 = "insert into basket (card) VALUES('".$credit."')";
        $result = $conn->query($sql1); 
         echo "<script>
				alert('the product add to your CART successfully !');
                window.location.replace(\"http://localhost:83/hello/view.html\");
		</script>"
            
		;
    }
    else
    {
        echo "<script>
				alert('your credit number not found !');
                window.location.replace(\"http://localhost:83/hello/credit.html\");
		</script>"
            
		;
            exit;
    }
}

$result = $conn->query($sql);                
               
                             
?>
