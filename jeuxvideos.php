<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="generator" content="BBEdit 8.7" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
   integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
  <link rel="stylesheet" href="css/cassebrique.css">
  <link rel="stylesheet" href="css/taquin.css">

    <title>les jeux vidéos</title>
  </head>

 <body onload="init();">

    <nav>
       <ul class ="navigation">
          <li><a href="index.php">Accueil</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="cartes.php">Jeux traditionnels</a></li>
          <li><a href="#">Jeux vidéos</a></li>
        </ul>
    </nav>

<div class="slides"></div>
  <li class="slide slide1">
    <div class="slide-info">

    </div>
  </li>
  <li class="slide slide2">
    <div class="slide-info">

    </div>
  </li>
  <li class="slide slide3">
    <div class="slide-info">

    </div>
  </li>

  <h1>Hello, world!</h1>

  <img src="images/akuma-force2.gif" />

  <!-- Optionnel JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- solitaire -->

        <li>
    <div class="vignette">
    </div>
        </li>

<!-- <a href="/jeu-wild-west-solitaire.html" alt="Jeu Wild West Solitaire">Jeu <span itemprop="name">Wild West
                Solitaire</span></a> -->

    <div class="panel-body"> </div>
  <center>
    <div id="scores"></div>
    <div id="overgame">
    </div>
    <div id="divgame"></div>
    <div class="tab-content"></div>
    <div class="jsGamePlace"><iframe id="sol" src="https://play.famobi.com/wild-west-solitaire/A-FSP0W"
border="0" frameborder="0" scrolling="no"></iframe></div>
  </center>

    <div class="col-md-3 text-center"></div>
    <div id="ctn_right"></div>
    <div id="ba_right" class="ba "></div>
  <script>
  OAS_AD('Right')
  </script>

<!-- End solitaire -->

<!-- debut casse brique -->
<title>Casse brique</title>

  <h1>Casse brique </h1>
<div id='conteneur'>
  <div class="content">

  </div>
  <canvas id="canvasElem" width="600" height="500">

  </canvas>
  </div>
  <div id="vie"></div>
  <div id=fond>
  </div>
  <!-- casse brique -->

<center>
  <!-- début taquin -->
<div id="carnet">
  <!-- <div id="aide">
      <button type="button" onclick="clicOuvrirAide()">Mode d'emploi</button>
    </div> -->
  <h1>
    Taquin
  </h1>
      <div id="jeu">
    </div>
  <div class="console">
    <span id="console">Taquin</span>
  </div>
    <div id="controle">
      <button onclick="clicMelanger()" class="melange">Mélanger</button>
    </div>
  </div>
</center>
<footer>
<p>&copy; 2019 mon site.fr<p>
</footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
 integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="js/cassebrique.js"></script>
  <script src="js/taquin.js" type="text/javascript" charset="utf-8"></script>

  <!-- <script src="leprojetunifie/p.js"></script> -->
</body>

</html>
