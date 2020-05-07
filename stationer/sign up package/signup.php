<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Data";
$conn = new mysqli("localhost","root", "","Data");
$fname = $_POST['fName'] ;
$lname = $_POST['lName'] ;
$email = $_POST['email'] ;
$tele = $_POST['tele'] ;
$pass = $_POST['password'] ;
$age = $_POST['age'] ;
$gender = $_POST['gender'] ;
if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
if($conn)
{
$sql = mysqli_query($conn,"select * from users where email='" . $_POST['email'] . "' ");
$row = $sql->fetch_assoc();
    if($row)
    {
         echo "<script>
				alert('this email is already taken please enter a new one');
                window.location.replace(\"http://localhost:83/hello/signup.html\");
		</script>"
            
		;
    }
    else
    {
       $sql1 = "insert into users (fName, lName, email, telephone, pass, age, gender) VALUES('".$fname."','".$lname."','".$email."','".$tele."','".$pass."','".$age."','".$gender."')";
        $result = $conn->query($sql1); 
        echo "<script>
				alert('your form submited successfully');
                window.location.replace(\"http://localhost:83/hello/view.html\");
		</script>"
            
		;
            exit;
    }
}

$result = $conn->query($sql);                
               
                             
?>
