<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Mampf</title>
  </head>
  <body>

  <style>
/* responsives Design */

@media screen and (min-width: 961px) {
    .page-footer{
      background-color: rgb(248,249,250); position:absolute;
  bottom: 0; width: 100%;
    }}
@media screen and (max-width: 961px) {
    .page-footer{
      background-color: rgb(248,249,250);}
    }
/* Linktextfarbe verändern */
.white-text{
  color: rgb(179, 120, 87)
}
/* Buttons anpassen */
        .btn-secondary, .btn-secondary:hover, .btn-secondary:active, .btn-secondary:visited {
          background-color: rgb(179, 120, 87) !important;
          border-color:  rgb(179, 120, 87) !important;
          font-size: 1.5rem!important;
          line-height: 1.5 !important;}
          .form-control {
          font-size: 1.5rem !important;}
          .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
          background-color: rgb(179, 120, 87) !important;
          border-color:  rgb(179, 120, 87) !important;}

    
.text-secondary{
  color: rgb(179, 120, 87);
}
   
  </style>

<!-- Navigationleiste wie index.php-->
        <nav class="navbar navbar-default navbar-static-top navbar-expand-md navbar-light bg-light">

                <a class="navbar-brand" href="#">
                  <a href="index.php">  <img src="image/logo_transparent.jpg" width="200" height="auto" alt="">
                  </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="faq.html">FAQ</a> <span class="sr-only">(current)</span>
                    </li>
                  </ul>
                    <form action="login.html">
                      <input class="btn btn-primary" type="submit" value="Login für Restaurants" />
                  </form>
                </div>
              </nav>

<!-- FAQ mithilfe von Accordion (Elemente auf- und zufahren lassen) -->
              
   <div class = 'container' style="padding-top: 2%;">
        <h2> Frequently Ask Questions</h2>        
        
    <div class style="padding-bottom: 2%;"></div>
<div class="accordion md-accordion accordion-1" id="accordion" role="tablist">
    <div class="card">
      <div class="card-header" role="tab" id="heading">
        <h5 class="text-secondary">
          <a class=" collapsed font white-text" data-toggle="collapse" href="#collapse1" 
          aria-expanded="false" aria-controls="collapse1">
            Welchen Nutzen bietet mir MAMPF?
          </a>
        </h5>
      </div>
      <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1"
        data-parent="#accordion">
        <div class="card-body">
          <div class="row my-4">
            <div class="col-md-8">
              <p class="">Mit MAMPF findest du schnell und einfach den leckersten Lunch – und das schon vom Schreibtisch 
                      oder der Vorlesung aus. Du erhälst täglich aktuelle Mittagsangebote von Restaurants aus Ravensburg – 
                      passend zu deinen Vorlieben und Favoriten. 
           </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" role="tab" id="heading">
        <h5 class="text-secondary">
          <a class="collapsed font white-text" data-toggle="collapse" href="#collapse2"
            aria-expanded="false" aria-controls="collapse2">
            Welche Restaurants nehmen teil?
          </a>
        </h5>
      </div>
      <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2"
        data-parent="#accordion">
        <div class="card-body">
          <div class="row my-4">
            <div class="col-md-6" >
              <p class="">  Aktuell nehmen folgende Restaurants teil: 
                      <ul>
                          <li>Kantine der DHBW Ravensburg</li>
                          <li>Slainte Irish Pub</li>
                          <li>Humpis Gaststätte</li>
                          <li>Pizzaria Walfisch</li>
                          </ul>
              </p>
            </div>
            <div class="col-md-6 ">
              <div class="view z-depth-1">
              <!-- Einbinden von Google my Maps -->
                <iframe src="https://www.google.com/maps/d/embed?mid=1B2Gf6sF_nTg9oeSsMgBD3079T8dLO14G&ll=47.78071132589029%2C9.614377104631103&z=17" width="500" height="300"  ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" role="tab" id="heading">
        <h5 >
          <a class="collapsed font white-text" data-toggle="collapse" href="#collapse3"
            aria-expanded="false" aria-controls="collapse3">
            Wie kann ich als Restaurant teilnehmen?
          </a>
        </h5>
      </div>
      <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3"
        data-parent="#accordion">
        <div class="card-body">
          <div class="row my-4">
            <div class="col-md-8">
              <p>Wenn Sie ein Restaurant in Ravensburg führen und dieses auf dieser Website ebenfalls anbieten wollen, nehmen sie bitte Kontakt mit uns auf unter folgender Adresse:
                      E-Mail: mampf@rv.de. </p>
                         Weiteres <a href="login.html">hier</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
              
     </div>         
<!-- Footer wie index.php -->
  <footer class="page-footer font-small" >
        <div class="footer-copyright text-center py-3">© 2019 Copyright: Mampf
        </div>
      
      
      </footer>

 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>