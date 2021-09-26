<?php 
  session_start();
  require_once('config.php');

  $select = $db->prepare('SELECT * FROM `games`');
  $select->execute();

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Liste des parties</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<<<<<<< HEAD
=======
        <link rel="stylesheet" href="style.css">
  <link href="css/all.css" rel="stylesheet"> <!--load all styles -->

>>>>>>> 979ad63 (Version 2.0.0)
<link rel="stylesheet" href="Liste.css" media="screen">
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
    <meta property="og:title" content="Liste">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <header class="u-clearfix u-header u-palette-5-dark-3 u-header" id="sec-bb51"><div class="u-clearfix u-sheet u-sheet-1">
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
</li><li class="u-nav-item"><a class="u-active-custom-color-1 u-black u-button-style u-hover-custom-color-3 u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Liste.php" style="padding: 10px 24px;">Liste</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.php" style="padding: 10px 24px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Ajouter-une-partie.php" style="padding: 10px 24px;">Ajoutez une partie</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Liste.php" style="padding: 10px 24px;">Liste</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <h3 class="u-headline u-text u-text-1">
<<<<<<< HEAD
          <a href="/">Goalie Stats</a>
        </h3>
      </div></header>
=======
          <img class="favicone" src="favicon.png">
        </h3>
      </div> <div class="search-box">
                  <input class="search-txt" type="text" name="" placeholder="Recherchez un goaler">
                  <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>


                  </a>
          </div></header>
         
>>>>>>> 979ad63 (Version 2.0.0)
    <section class="u-clearfix u-section-1" id="sec-e598">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
          <?php 
            while($s = $select->fetch(PDO::FETCH_OBJ)){
          ?>
            <div align="center" class="u-container-style u-list-item u-palette-5-dark-3 u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/favicon.jpg?rand=c54c" alt="" data-image-width="600" data-image-height="600">
                <h3 class="u-text u-text-default u-text-1"><?= $s->names; ?></h3>
                <p class="u-text u-text-2"><?= $s->date; ?></p>
                <a href="Stats.php?id=<?= $s->id; ?>&name=<?= $s->names; ?>&pass=?&acess=denided" class="u-active-none u-border-2 u-border-custom-color-7 u-border-hover-custom-color-1 u-btn u-button-style u-hover-none u-none u-text-white u-btn-1">Accèder</a>
              </div>
            </div>
          <?php 
            }
          ?>  
          </div>
        </div>
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