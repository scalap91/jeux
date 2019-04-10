<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>les jeux</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
  <script src="main.js"></script>

    </head>

      <nav>
          <ul class="navigation">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="cartes.php">Jeux traditionnels</a></li>
         
          </ul>
      </nav>
       <h1> <p> Un mini formulaire pour savoir si vous êtes dans le game</p></h1>
        <form method="post" action="traitement.php">
            <label for="pseudo">Entrez un pseudo : </label>
            <input type="text" name="pseudo" id="pseudo"><br><br>

            <label for="presentation">Présentation : </label>
            <textarea name="pres" id="presentation"></textarea><br><br>

            <input type="submit" value="Envoyer">
        </form>
        <label>Aimer-vous les jeux?
        <input type ="checkbox" name="les jeux">oui
        <input type ="checkbox" name="les jeux">non
        <input type ="checkbox" name="les jeux">plus où moins
        </label>
        <label class ="label-grand" for="votre-nom">
        <input id ="votre-nom" name="votre-nom" type="text">
        Quel est votre nom ?
        </label>


        <p> Quel genre de jeux vous plait?</p>

        <h2>RPG</h2>
        <input type="checkbox" aria-label="Checkbox for following text input">
        <input type="text" class="form-control" aria-label="Text input with checkbox">
           <h2>SHOOT'EM-UP</h2>

            <input type="checkbox" aria-label="Checkbox for following text input">
        <input type="text" class="form-control" aria-label="Text input with checkbox">

            <h2>JEUX DE COURSES</h2>
             <input type="checkbox" aria-label="Checkbox for following text input">
        <input type="text" class="form-control" aria-label="Text input with checkbox">

          <h2>GUERILLA</h2>
        <input type="checkbox" aria-label="Checkbox for following text input">
        <input type="text" class="form-control" aria-label="Text input with checkbox"

         <h4> <p>Quel votre final fantasy de légende ?</p></h4>
              <input type="radio" aria-label="Radio button for following text input">
              <h3>ff7(autre précisez en bas)</h3>

         <h4>
            <p>Quel tales vous à fait vibré ?</p>
         </h4>
          <input type="text" class="form-control" aria-label="Text input with radio button">
          <h3> Tales of Vesperia (Autres ?)</h3>

             <h4> <p>Quel star océan vous à fait voyager dans l'espace ?</p></h4>
            <input type="radio" aria-label="Radio button for following text input">
            <h3>Star océan 2(indiquer le en dessous)</h3>

             <h4>
           <p>En jeu de guerre lequel vous à motivé le plus?</p>
          </h4>
          <input type="text" class="form-control" aria-label="Text input with radio button">

        <h4>
          <p>Concernant les jeux de voitures avec le(s)quel(les)vous avez allumer la route ?</p>

        </h4>
                <input type="radio" aria-label="Radio button for following text input">
            <input type="text" class="form-control" aria-label="Text input with radio button">

                <h4>
                  <p>Terminons par les jeux plate-forme/aventure(vous connaissez la procédure)</p>
                </h4>
                <input type="radio" aria-label="Radio button for following text input">
            <input type="text" class="form-control" aria-label="Text input with radio button">

<footer>
<p>&copy; 2019 mon site.fr<p>
</footer>
        </body>
        </html>
