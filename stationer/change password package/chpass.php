<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Data";
$conn = new mysqli("localhost","root", "","Data");
$opass = $_POST['opass'] ;
$npass = $_POST['npass'] ;
if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
echo"<br>";
if($conn)
{
    $sql = mysqli_query($conn,"UPDATE users
SET pass = '$npass' WHERE pass = '$opass'");
     echo "<script>
				alert('password changed successfully!!');
                window.location.replace(\"http://localhost:83/hello/view.html\");
		</script>"
            
		;
}
 $result = $conn->query($sql);                        

?>