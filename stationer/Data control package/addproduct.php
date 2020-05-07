<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Data";
$conn = new mysqli("localhost","root", "","Data");
$code = $_POST['code'] ;
$credit = $_POST['credit'] ;
$pass = $_POST['pass'] ;
if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
if($conn)
{
$sql = mysqli_query($conn,"select * from product_codes where codes = '" . $_POST['code'] . "'");
$row = $sql->fetch_assoc();
    if($row)
    {
        $sql1 = mysqli_query($conn,"select * from Credit where credit='" . $_POST['credit'] . "' and Pass='" . $_POST['pass'] . "'");
        $row1 = $sql1->fetch_assoc();
            if($row1)
            {
                $sql1 = "insert into basket (card,code,product) VALUES('".$credit."','".$code."','".$row['name']."')";
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
                        window.location.replace(\"http://localhost:83/hello/view.html\");
                </script>"

                ;
                    exit;
            }
         
    }
    else
    {
        echo "<script>
				alert('the product is not found !');
                 window.location.replace(\"http://localhost:83/hello/view.html\");
               
		</script>"
            
		;
            exit;
    }
}

$result = $conn->query($sql,"name");                
               
                             
?>
