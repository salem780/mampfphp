        <?php 
		
        $email = $_POST['email'];
        $password = $_POST['password'];
		
        
        
        
        $c = mysqli_connect("localhost", "root", "","mampf");
        
        $sql = "SELECT name FROM login WHERE email='$email' AND password='$password'";
        
        $result = mysqli_query($c,$sql); //  Parameter: $c Verbindung wird aufgebaut, $sql SQL Befehl wird ausgeführt 
        $row = mysqli_fetch_assoc($result);
		echo $row["name"];
		
				if(isset($row["name"]))
				
				{ 
					echo '<form action="Mampf_Partner.html" method="POST">';
					echo '<input type="submit"></input>';
					echo '</form>';
										
					
				}
					
				else {
					
					echo '<form action="login.html" method="POST">';
					echo '<input type="submit">Falsch</input>';
					echo '</form>';
					}

        
        ?>
   