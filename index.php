<?php

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>L'enfer du Jeu</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.css">
    <link rel="stylesheet" href="css/cassebrique.css">
    <link rel="stylesheet" href="css/taquin.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>

<body onload="init();">
  <header>
    <nav>
      <input type="checkbox" id="checkbox1" />
      <label for="checkbox1">
    <ul class="menu demo">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="cartes.php">Jeux traditionnels</a></li>

    </ul>
      <span class="toggle">☰</span>
      </label>
    </nav>
  </header>
  <section>
  <ul class="slides">
  <li class="slide slide1">
    <div class="slide-info">
        <h2>Passion pour les jeux</h2>
<br/>
        <h3>Nos équipes</h3>
<br/>
        <ul class="bxslider">
            <li><img src="images/imagen-slider-01.jpg" /></li>
            <li><img src="images/imagen-slider-02.jpg" /></li>
            <li><img src="images/imagen-slider-03.jpg" /></li>
        </ul>
    </div>
  </li>
  <li class="slide slide2">
    <div class="slide-info">
        <h2>Casse brique </h2>

        <!-- debut casse brique -->

        <div id='conteneur'>
            <div class="content">

            </div>
            <canvas id="canvasElem" width="600" height="500">

            </canvas>
        </div>
          <div id="vie"></div>
        <div id=fond>
        </div>
          <!-- end casse brique -->

    </div>
  </li>
  <li class="slide slide3">
    <div class="slide-info">

      <h2>Solitaire</h2>
      <!--<h3>slide 3 subtitle goes here</h3>
      <a class="btn" href="#">Button</a>
      -->
       <!-- solitaire -->

        <!--<a href="/jeu-wild-west-solitaire.html" alt="Jeu Wild West Solitaire">Jeu <span itemprop="name">Wild West
                        Solitaire</span></a>

        <div class="panel-body">
          <center>
            <div id="scores"></div>
            <div id="overgame">
            </div>
            <div id="divgame"></div>
            <div class="tab-content"></div>-->
            <div class="jsGamePlace">
                <iframe id="sol" src="https://play.famobi.com/wild-west-solitaire/A-FSP0W"
                        border="0" frameborder="0" scrolling="no" width="100%" height="350px"></iframe>
            </div>
          <!--</center>
        </div>
            <div class="col-md-3 text-center"></div>
            <div id="ctn_right"></div>
            <div id="ba_right" class="ba "></div>
          <script>
          OAS_AD('Right')
          </script>-->

        <!-- End solitaire -->
    </div>
  </li>
  <li class="slide slide4">
    <div class="slide-info">
      <h2>Taquin</h2>
      <!--<h3>slide 4 subtitle goes here</h3>
      <a class="btn" href="#">Button</a>-->
      <center>

    <!-- début taquin -->

      <div id="carnet">
        <!-- <div id="aide">
            <button type="button" onclick="clicOuvrirAide()">Mode d'emploi</button>
          </div> -->
        <div id="jeu">
        </div>
        <div class="console">
          <span id="console">Taquin</span>
        </div>
        <div id="controle">
          <button onclick="clicMelanger()" class="btn melange">Mélanger</button>
        </div>
        </div>
      </center>
    </div>
  </li>

    <br /><h1>Un mini formulaire pour savoir si vous êtes dans le game</h1>
<form method="post" action="traitement.php">
<div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
  <label for="tab1">Etape 1</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
  <label for="tab2">Etape 2</label>
  <!-- Tab 3 -->
  <!-- <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
  <label for="tab3">Etape 3</label> -->

  <div class="tab-panels">
    <section id="etape1" class="tab-panel">
      <h2>Etape 1</h2>

        <label for="pseudo">Entrez un pseudo : </label>
        <input type="text" name="pseudo" id="pseudo"><br><br>

        <label for="presentation">Présentation : </label>
        <textarea name="pres" id="presentation"></textarea><br>

        <label>Aimer-vous les jeux ?</label>
        <input type ="radio" name="les jeux">oui
        <input type ="radio" name="les jeux">non
        <input type ="radio" name="les jeux">plus où moins
        <br />
        <label for="votre-nom">Quel est votre nom ?</label>
        <input id ="votre-nom" name="votre-nom" type="text">

    </section>
    <section id="etape2" class="tab-panel">
      <h2>Etape 2</h2>
        <p>Quel genre de jeux vous plait?</p>

        <div><h2>RPG</h2>
                <input type="checkbox" aria-label="Checkbox for following text input">
        </div>
               <input type="text" class="form-control" aria-label="Text input with checkbox">
        </div>
           <div class="input-group mb-3"><h2>SHOOT'EM-UP</h2>
              <div class="input-group-prepend">
                 <div class="input-group-text">
                  <input type="checkbox" aria-label="Checkbox for following text input">
               </div>
        </div>
                  <input type="text" class="form-control" aria-label="Text input with checkbox">
             </div>
             <div class="input-group mb-3"><h2>JEUX DE COURSES</h2>
                <div class="input-group-prepend">
                   <div class="input-group-text">
                  <input type="checkbox" aria-label="Checkbox for following text input">
                </div>
             </div>
                 <input type="text" class="form-control" aria-label="Text input with checkbox">
               </div>
        <div class="input-group">
          <div class="input-group-prepend"><h2>GUERILLA</h2>
            <div class="input-group-text">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                     <div class="input-group-text">
                       <input type="checkbox" aria-label="Checkbox for following text input">
                     </div>
                  </div>
                       <input type="text" class="form-control" aria-label="Text input with checkbox">
             </div>

    </section>
    <!-- <section id="etape3" class="tab-panel">
      <h2>Etape 3</h2> -->

      <input type="submit" value="Envoyer">
    </section>
  </div>
</div>
</form>
</section>

    <script src="js/cassebrique.js"></script>
    <script src="js/taquin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider();
          });
    </script>
    <footer><center>© copyright 2019</center></footer>
</body>
</html>
