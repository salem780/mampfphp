
<?php 
$email = $_POST['email'];
$password = $_POST['password'];



$c = mysqli_connect("localhost", "root", "","mampf");

$sql1 = "SELECT password FROM login WHERE '".$email"' = email ";

$result = mysqli_query($c,$sql); //  Parameter: $c Verbindung wird aufgebaut, $sql SQL Befehl wird ausgeführt 

$row = mysqli_fetch_assoc($result);

if ($row == $password) {

    echo '<input type="submit"  href="Mampf_Partner.html"> Weiter </input>'
    
    
} else {

    echo '<input type="submit" href="login.html">Falsch du dummer Wixxer </input>'

}


?>

