<?php 
/// Site créer le 13 septembre
  require_once('config.php');
   $id = $_GET['id'];
  $names = $_GET['name'];

  $select = $db->prepare('SELECT * FROM `games` WHERE id=:id AND names=:names');
  $select->execute(['id' => $id, 'names' => $names]);
  $s = $select->fetch(PDO::FETCH_OBJ);

  if(isset($_POST['password']) && $_POST['password'] == $s->password){
     $select = $db->prepare('SELECT * FROM `games` WHERE id=:id AND names=:names');
     $select->execute(['id' => $id, 'names' => $names]);
      $s = $select->fetch(PDO::FETCH_OBJ);

    header("Location: Stats.php?id=$s->id&name=$s->names&pass=$s->password&acess=accepted");
  }
  if(isset($_GET['id']) && $_GET['name'] && $_GET['pass'] && $_GET['acess'] != 'denided'){

  


   $id = $_GET['id'];
  $names = $_GET['name'];

  $select = $db->prepare('SELECT * FROM `games` WHERE id=:id AND names=:names');
  $select->execute(['id' => $id, 'names' => $names]);
  $s = $select->fetch(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Stats</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Stats.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.25.0, nicepage.com">
<<<<<<< HEAD
    <link rel="icon" href="images/favicon.jpg">
=======
    <link rel="icon" href="favicon.png">
>>>>>>> 979ad63 (Version 2.0.0)
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Stats">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-palette-5-dark-3 u-header" id="sec-bb51"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-active-color u-custom-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-custom-color-1 u-black u-button-style u-hover-custom-color-3 u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Accueil.php" style="padding: 10px 24px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-1 u-black u-button-style u-hover-custom-color-3 u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Ajouter-une-partie.php" style="padding: 10px 24px;">Ajoutez une partie</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.php" style="padding: 10px 20px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Ajouter-une-partie.php" style="padding: 10px 20px;">Ajoutez une partie</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-1 u-black u-button-style u-hover-custom-color-3 u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Liste.php" style="padding: 10px 24px;">Liste</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <h3 class="u-headline u-text u-text-1">
<<<<<<< HEAD
          <a href="/">Goalie Stats</a>
=======
          <img class="favicone" src="favicon.png">
>>>>>>> 979ad63 (Version 2.0.0)
        </h3>
      </div></header>
      <div id="bttns"></div>
    <section class="u-clearfix u-palette-5-dark-2 u-section-1" id="sec-6a2c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <blockquote class="u-text u-text-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/casque.jpg" alt=""></span> Gardien de but: <div style="color: #888888"><?= $names ?></div>
        </blockquote>
        <img class="u-image u-image-round u-radius-10 u-image-1" src="images/goalie.jfif" alt="" data-image-width="450" data-image-height="359">
        <div class="u-container-style u-custom-color-6 u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-bottom-lg u-container-layout-1">
            <a onclick="stop()" name="stop" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">ARRÊT</a>
            <p id="demo"></p>
            <a href="https://nicepage.com/c/art-design-website-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">but</a>
            <a href="https://nicepage.cloud" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-3">RETOUR</a>
            <a href="https://nicepage.app" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-4">sAUVEGARDER</a>
          </div>
        </div>
        <form action="" method="POST">
        <a class="u-border-2 u-border-black u-btn u-button-style u-hover-white u-none u-btn-5" href="Stats.php" data-page-id="251442175">
          <span style="font-size: 0.75rem;">tIR :<br>bUT:&nbsp;<br>eFFICACITÉ:
          </span>
          <br>
        </a>
        <a class="u-border-2 u-border-black u-btn u-button-style u-hover-white u-none u-text-black u-btn-6" href="Stats.php" data-page-id="251442175">
          <span style="font-size: 0.75rem;">tIR :<br>bUT:&nbsp;<br>eFFICACITÉ:
          </span>
          <br>
        </a>
        <a class="u-border-2 u-border-black u-btn u-button-style u-hover-white u-none u-btn-7" href="Stats.php" data-page-id="251442175">
          <span style="font-size: 0.75rem;">tIR :<br>bUT:&nbsp;<br>eFFICACITÉ:
          </span>
          <br>
        </a>
        <a class="u-border-2 u-border-black u-btn u-button-style u-hover-white u-none u-btn-8" href="Stats.php" data-page-id="251442175">
          <span style="font-size: 0.75rem;">tIR :<br>bUT:&nbsp;<br>eFFICACITÉ:
          </span>
          <br>
        </a>
        <a class="u-border-2 u-border-black u-btn u-button-style u-hover-white u-none u-btn-9" href="Stats.php" data-page-id="251442175">
          <span style="font-size: 0.75rem;">tIR :<br>bUT:&nbsp;<br>eFFICACITÉ:
          </span>
          <br>
        </a>
        <a class="u-border-2 u-border-black u-btn u-button-style u-hover-white u-none u-btn-10" href="Stats.php" data-page-id="251442175">
          <span style="font-size: 0.75rem;">tIR :<br>bUT:&nbsp;<br>eFFICACITÉ:
          </span>
          <br>
        </a>
        <a class="u-border-2 u-border-black u-btn u-button-style u-hover-white u-none u-btn-11" href="Stats.php" data-page-id="251442175">
          <span style="font-size: 0.75rem;">tIR :<br>bUT:&nbsp;<br>eFFICACITÉ:
          </span>
          <br>
        </a>
        <a class="u-border-2 u-border-black u-btn u-button-style u-hover-white u-none u-btn-12" href="Stats.php" data-page-id="251442175">
          <span style="font-size: 0.75rem;">tIR :<br>bUT:&nbsp;<br>eFFICACITÉ:
          </span>
          <br>
        </a>
        <a class="u-border-2 u-border-black u-btn u-button-style u-hover-white u-none u-btn-13" href="Stats.php" data-page-id="251442175">
          <span style="font-size: 0.75rem;">tIR :<br>bUT:&nbsp;<br>eFFICACITÉ:
          </span>
          <br>
        </a>
      </form>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-a340"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ce site a été conçu pour les gardiens de but de hockey et savoir leurs points fort et leur point faible<br>
          <br>Conçu par: Alexis Therrien Alias: DevRevoltium&nbsp;<br>Gardien de but
        </p>
      </div>
    </footer>
  </body>
</html>

<?php
}
 if(isset($_GET['acess']) == 'denided' && $_GET['acess'] != 'accepted'){
    ?>
  <center>
    <form method="POST">
      <label>Entrer le mot de passe</label>
      <input type="password" name="password" />
      <input type="submit" name="validate" />
    </form>
  </center>
    <?php
 }

?>
<script type="text/javascript">
  var button = document.getElementById("bttns");

  var bt = ["Button 1", "Button 2", "Button 3", "Button 4", "Button 5", "Button 6", "Button 7", "Button 8", "Button 9"];

  for(var i in bt){
      var cbt = document.createElement("BUTTON");
      cbt.innerHTML = bt[i];

      bttns.appendChild(cbt); 
  }
</script>