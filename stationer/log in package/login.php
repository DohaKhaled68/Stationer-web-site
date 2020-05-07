<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Data";
$conn = new mysqli("localhost","root", "","Data");
$email = $_POST['email'] ;
$pass = $_POST['password'] ;
if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}

if($conn)
{
$sql = mysqli_query($conn,"select * from users where email='" . $_POST['email'] . "' and Pass='" . $_POST['password'] . "'");
$row = $sql->fetch_assoc();
    if($row)
    {
        $_SESSION['pass']=$row['pass'];
        $_SESSION["email"]=$email;
        $_SESSION['tele']=$row['telephone'];
        header("Location:http://localhost:83/hello/view.html");
        exit;
    }
    else
    {
        echo "<script>
				alert('wrong mail or pass');
                window.location.replace(\"http://localhost:83/hello/logIn.html\");
		</script>"
            
		;
    }
}
else{
        header("Location: http://localhost:83/hello/");
        exit; 
    }

$result = $conn->query($sql);                
                
?>
