<?php require("function/fctCalculEmpreinte.php"); ?>

<html>
 <section>
    <h1>Empreinte de Carbone de l'alimentation</h1>
     <div>En fonction de son mode d'alimentation</div>

      <form action="forestdisplay.php" method="POST">

          <?php formCreation($alimTable) ?>

        <div class="sendForm">
          <input type="submit" value="Calculer mon empreinte"  /
        </div>

      </form>
    </section>
</html>