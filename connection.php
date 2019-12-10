        <?php 
		
        $email = $_POST['email'];
      
        $password = $_POST['password'];
		
        if (($_POST['email']) == "") {
   echo ("<script LANGUAGE='JavaScript'>
   window.alert('you forgot to enter your email-address');   

   window.location.href='login.html';
 

    </script>");
}


 if (($_POST['password']) == "") {
   echo ("<script LANGUAGE='JavaScript'>
   window.alert('you forgot to enter your password');   

   window.location.href='login.html';
 

    </script>");
}


        
        
        $c = mysqli_connect("localhost", "root", "","mampf");
        
        $sql = "SELECT name FROM login WHERE email='$email' AND password='$password'";
        
        $result = mysqli_query($c,$sql); //  Parameter: $c Verbindung wird aufgebaut, $sql SQL Befehl wird ausgeführt 
        $row = mysqli_fetch_assoc($result);
		 // echo $row["name"];


		
				if(isset($row["name"]))
				
				{ 
                    header ('Location: Mampf_Partner.html');
                     //include ("Mampf_Partner.html");
					//echo '<form action="Mampf_Partner.html" method="POST">';
    
					//echo '<input type="submit"></input>';
					// echo  '</form>';
										
								
				
				} 
					
				else {    
                        
                       echo ("<script LANGUAGE='JavaScript'>
   window.alert('your login failed. For trying again please click the button below');   

   window.location.href='login.html';
 

    </script>");
                 
					//echo "login failed";

                    //echo '<form action="login.html" method="POST">';
					//echo '<input type="button"></input>';
					//echo  '</form>';
					
					}

        
        ?>
   