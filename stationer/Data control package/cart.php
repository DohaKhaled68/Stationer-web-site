<html>
	<head>
	  <meta charset="utf-8">
	  <title>Your Cart</title>
	  <link rel="stylesheet" href="cart.css" />

	</head>
	<body>
		<div class="shopping-cart">
		  <div class="title">
			Shopping Cart
		  </div>
		 

			  <?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "Data";
					$conn = new mysqli("localhost","root", "","Data");
					$code = $_POST['CreditNumber'] ; 
					if($conn){
						$query = mysqli_query($conn,"SELECT * FROM `basket` where card=" . $_POST['CreditNumber']);
						
					?>	
						<div class="description">
                            
						<span>
                        <?php while($row = $query->fetch_assoc()) { ?>
						<p><?php echo ($row['product']."   ".$row['code']); ?></p>
						<?php } ?>
						</span>
						</div>
						
						 <?php  
                    }else{
						header("Location:http://localhost:83/hello/");
						exit; 
					}					
					?>
				</span>
		  </div>
		  
		</div>
		<div class="item">
			  <form action="delet.php" method="POST">
			  Enter product code you want TO DELETE and your credit number .<br><br>
			  <input type="text" name="dnumber"></input>
               <input type="text" name="credit"></input>
			  <button class="delete-btn" >Delete</button>
          
			 
			  </form>
		  </div>
			
		<footer id="footer">
			<div class="copyright">
				copyright &copy; 2019 All Rights Reserved to Alwan &reg; team
			</div>
		</footer>

	</body>
</html>
