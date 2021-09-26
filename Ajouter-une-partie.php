<?php 
  require_once('config.php');

    if(isset($_POST['submit'])){
      $id = $_GET['id'];

      $select = $db->prepare('SELECT * FROM `games` WHERE id=:id');
      $select->execute(['id' => $id]);

      $names = htmlspecialchars($_POST['name']);
      $password = htmlspecialchars($_POST['password']);
      $date = date("F j, Y \a\t g:ia"); 

      $insert = $db->prepare("INSERT INTO `games`(`id`,`names`,`password`,`date`) VALUES(`id`, '$names', '$password', '$date')");
      $insert->execute();

      header("Location: Liste.php");

    }

?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Créer une partie">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Ajouter une partie</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Ajouter-une-partie.css" media="screen">
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
    <meta property="og:title" content="Ajouter une partie">
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
</li><li class="u-nav-item"><a class="u-active-custom-color-1 u-black u-button-style u-hover-custom-color-3 u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Liste.php" style="padding: 10px 24px;">Liste</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.php" style="padding: 10px 20px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Ajouter-une-partie.php" style="padding: 10px 20px;">Ajoutez une partie</a>
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
      </div>
    </header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-f843">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Créer une partie</h2>
        <div class="u-form u-form-1">
          <form action="" method="POST" style="padding: 15px;" source="custom">
            <div class="u-form-group u-form-name">
              <input type="text" placeholder="Nom du gardien de but" id="name-ef64" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-ef64" class="u-form-control-hidden u-label">Mot de passe</label>
              <input type="password" placeholder="Mot de passe" id="email-ef64" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
            </div>
              <input type="submit" name="submit" class="u-btn u-btn-submit u-button-style"></a>
          </form>
        </div>
        <p class="u-text u-text-default u-text-2">Le mot de passe est pour si vous voulez rejoindre/modifier une partie vous aurez besoins de se mot de passe</p>
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