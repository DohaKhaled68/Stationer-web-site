<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Data";
$conn = new mysqli("localhost","root", "","Data");
$delete = $_POST['dnumber'] ;
$credit = $_POST['credit'] ;
if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}

if($conn)
{
$sql = mysqli_query($conn,"delete from basket where code='" . $_POST['dnumber'] . "' and card='" . $_POST['credit'] . "'");
    $result = $conn->query($sql);    
    echo "<script>
                        alert('the product deleted from your CART successfully !');
                        window.location.replace(\"http://localhost:83/hello/view.html\");
                </script>"

                ;
}
else{
        header("Location: http://localhost:83/hello/");
        exit; 
    }

            
                
?>
