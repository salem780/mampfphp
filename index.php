<!doctype html>
<html lang="de">

<head>
<meta charset="utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


   


</head>

<body>

<style>
    

    .btn-primary,
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited {
      background-color: rgb(179, 120, 87) !important;
      border-color: rgb(179, 120, 87) !important;
    }
/* responsives Design */
@media screen and (min-width: 961px) {

   div#viewid { background-image: url('image/stadtansichtkom.jpg');  width: 100vw; height: 83vh; 
   opacity: 1; background-repeat: no-repeat; background-size: cover; background-position: center center;} 
   
   div#rowid {padding-top:25%}

    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:active,
    .btn-secondary:visited {
      background-color: rgb(179, 120, 87) !important;
      border-color: rgb(179, 120, 87) !important;
      font-size: 1.5rem !important;
      line-height: 1.5 !important;
    }
    .form-control {
      font-size: 1.5rem !important;
    }
    
}
/* responsives Design */
@media screen and (max-width: 961px) {
   div#viewid { background-image: url('image/stadtansichtkom.jpg');  width: 100vw; height: 83vh; 
   opacity: 1; background-repeat: no-repeat; background-size: cover; background-position: center center; }
  
  div#rowid {padding-top:50%}
  
  .font-weight-bold{
      size: 17px !important; 
      color: white !important;
}
  .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:active,
    .btn-secondary:visited {
      background-color: rgb(179, 120, 87) !important;
      border-color: rgb(179, 120, 87) !important;
      font-size: 1 rem !important;
      line-height: 1 rem !important;
    }

    .form-control {
      font-size: 1 rem !important;
    }
    
.table-responsive {
        font-size:10px !important;
}

/* Tabellenstyle */
th {
  cursor: pointer;
}
table {
  table-layout: fixed;
  border-spacing: 0;
  width: 100%;
  border-collapse: collapse;
}
th, td {
  padding: 7px;
}
}
</style>

 

<!-- Header in Form einer navbar, gleich wie bei faq.php und login.php (wenn man auf FAQ ist, erscheint FAQ dunkler ) -->
<nav class="navbar navbar-default navbar-static-top navbar-expand-md navbar-light bg-light">

<!-- Bildlink zur index.php-->
<a class="navbar-brand" href="#">
  <a href="index.php"> <img src="image/logo_transparent.jpg" width="200" height="auto" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ</a>
      </li>

    
    </ul>
    <form action="login.html">
      <input class="btn btn-primary" type="submit" value="Login für Restaurants" />
    </form>
  </div>
</nav>

<!-- JS: Weiterleitung, wenn auf Button "Login für Restaurants" geklickt -->
<script>
    
    function relocate_login() {
      location.href = login.html;
    }
  </script>

<!-- Hintergrundbild mit Form und bei erfolgreichem Select ausgegebene Tabelle -->
<div class="view" id="viewid">

<div class="container">

  <form action= "index.php" method = "post">
    <div class="row" id="rowid"> 
    </div>

    <div class="font-weight-bold" style ="font-size: 25px; color: white" >

      <div class="form-group row">
      
        <div class="col-2">
        </div>
        <label class="control-label col-3 font-weight-bold" for="text"><b>Mittagstisch am </b></label>
        <div class="col-4">
        <!-- schreiben der eingegebenen Daten zurück in die Form, idetisch beim Maximalen Preis -->
          <input id="dishdate" name="Dishdate" type="date" value = "<?php $Dishdate= (isset($_POST['Dishdate'])    ? $_POST['Dishdate']    : ''); print ($Dishdate) ?>"class="form-control" >

        </div>

        <div class="col-3"></div>
      </div>
    


      <div class="form-group row">
    
        <div class="col-2"></div>
        <label class="control-label col-3" for="price"><b>Maximaler Preis </b></label>
        <div class="col-4">
          <div class="input-group">
            <input id="Maxprice" name="Maxprice" type="number" step="0.1" value = "<?php $Maxprice= (isset($_POST['Maxprice'])    ? $_POST['Maxprice']    : ''); print ($Maxprice) ?>"class="form-control">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">€</span>
            </div>
          </div>
        </div>
        <div class="col-2"><button id="submit" name="submit" type="submit" 
            class="btn btn-secondary">Suchen</button>
        </div>
        <div class="col-3"></div>
      </div>
     


    </div>
    </form>
</div>



<!-- Tabelle wird erst eingeblendet bei erfolgreichem select durch script -->
<div class="container font" id="tableid" style="display:none" >
<div class="row" id="rowid" style="padding-top:1%"> 
    </div>

   
    <?php

// Prüfung ob Inputforms null sind
if (isset($_POST['submit'])) {
  
  $Dishdate    = (isset($_POST['Dishdate'])    ? $_POST['Dishdate']    : '');
  $Maxprice    = (isset($_POST['Maxprice'])    ? $_POST['Maxprice']    : '');

// Wenn Datum leer ist Alert, keine Prüfung für maxpreis
if (($_POST['Dishdate']) == "" ) {
  echo ("<script LANGUAGE='JavaScript'>
  
  window.alert('Du hast das Datum vergessen! ');   

  windows.location.href='stand0812.php';
   </script>");}

// Datenbankzugriff mithilfe von PHP Data Objects 


try {
   $pdo = new PDO('mysql:host=localhost;dbname=mampf', 'root', '');

// Abfrage, wenn maxprice und datum eingegeben wurden --> sql mit prepared statements (Vorteil: Parameter von DBS auf Gültigkeit geprüft und schneller)
   if (($_POST['Maxprice']) <> "" && ($_POST['Dishdate']) <> "" ){
   //vorbereitetes Statement mit benannten Parametern
   $stmt = $pdo->prepare('SELECT dish, dishday, veg, price, lunch.restaurant AS na, restaurant.street AS str, 
    restaurant.plz AS pl, restaurant.town AS tow 
    FROM lunch, restaurant 
    WHERE lunch.restaurant = restaurant.name AND dishday = :Dishdate and price <= :Maxprice' );
//Statement ausführen und übergeben von Variablenwert 
 $stmt->execute(array('Dishdate' => $Dishdate, 'Maxprice' => $Maxprice ));

//Prüfen ob Einträge gefunden wurden, wenn ja Tabelle einblenden und Form verschieben, ansonsten Alert ausgeben und Seite neu laden 
 if ($stmt ->rowCount() > 0) {
     
   echo ("<script LANGUAGE='JavaScript'>
   function suche(){
     document.getElementById('rowid').style.paddingTop='4%';
      document.getElementById('tableid').style.display='block';
    }
  suche(); 
  </script>");
   
  }else{
    echo ("<script LANGUAGE='JavaScript'>
  window.alert('Kein Mittagessen vorhanden! ');   
  windows.location.href='index.php';
   </script>");}
  }

// Abfrage, wenn nur Datum eingegeben wurde (siehe oben)
   if (($_POST['Maxprice']) == ""&& ($_POST['Dishdate']) <> ""){

$stmt = $pdo->prepare('SELECT dish, dishday, veg, price, lunch.restaurant AS na, restaurant.street AS str, 
    restaurant.plz AS pl, restaurant.town AS tow 
    FROM lunch, restaurant 
    WHERE lunch.restaurant = restaurant.name AND dishday = :Dishdate');
   $stmt->execute(array('Dishdate' => $Dishdate));
   
  if ($stmt ->rowCount() > 0) {
   
   echo ("<script LANGUAGE='JavaScript'>  
   function such(){
     document.getElementById('rowid').style.paddingTop='4%';
      document.getElementById('tableid').style.display='block';
    }
    such();
   </script>");

    }else{
    echo ("<script LANGUAGE='JavaScript'>
  window.alert('Kein Mittagessen vorhanden! ');   
  windows.location.href='index.php';
   </script>");}
  }
}catch (PDOException $er) {
  print "Error!: " . $er->getMessage() . "<br/>";
  die();
} 

}

// Funktion zur Umwandlung von Sonderzeichen 
 $e = function ($value) {
     return htmlspecialchars($value, ENT_COMPAT, 'UTF-8'); 
 } 
?>


<!-- Ausgabeteil der Tabelle -->
      <div class="form-group row">
        
        <div class="col-12">
           
<table class="table-border table-responsive table-striped w-auto" id ="tabe" style= 'background-color: rgb(255,255,255);width:100%'>
      
          <tr>
<!-- Tabelle kann durch Klicken auf Überschriften sortiert werden -->
              <th  onclick="sortTable(0)">Gericht</th>
              <th  onclick="sortTable(1)">Tag</th>
              <th  onclick="sortTable(2)">Preis</th>
              <th  onclick="sortTable(3)">Veg</th>
              <th  onclick="sortTable(4)">Restaurant</th>
          </tr>
<!-- gefundene Einträge der SQL-Anweisung übergeben und darstellen in Tabelle -->
          <?php foreach($stmt as $row): ?>
          <tr>
              <td><?php echo $e($row['dish']) ?></td>
              <td><?php echo $e($row['dishday']); ?></td>
              <td><?php echo $e($row['price']) ,"€"; ?></td>
              <td><?php echo $e($row['veg']); ?></td>
              <td><?php echo $e($row['na'])," ",$e($row['str']), " ",$e($row['pl']), " ",$e($row['tow']); ?></td>
              </tr>
          <?php endforeach; ?>
      </table>
      </div> 
          
    </div>
 </div>   
   
</div>



<script>

  // Funktion, zum Sortieren der Tabellenspalten
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("tabe");
  switching = true;
  dir = "asc";
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

<!-- Footer mit Coyright identisch auf anderen Seiten -->
  <footer class="page-footer font-small" style="background-color: rgb(248,249,250);
  bottom: 0; width: 100%;">
    <div class="footer-copyright text-center py-3"> © 2019 Copyright: Mampf
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>


</body>

</html>

