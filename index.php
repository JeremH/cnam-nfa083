<!-- fichier cnam/nfa017/2017-cf1/index.inc.php - 20180604-PBO -->

<!-- ENTETE HTML ===============================================================-->
<?php
     include("inc/entete.inc.php");
     entete("NFA083 CF1 : Présentation hébergeur",0); /* pour le title et le h1 */ ?>

<!-- PRESENTATION Hébergeur ============================================================== -->
  <section><h2>Informations sur mon hébergeur</h2>
           <p><strong>Nom : </strong> Gandi</p>
           <p><strong>Logo : </strong> <img src="img/gandi.jpg" alt="logo de gandi"/></p>
           <p><strong>Siège social : </strong> 63, 65 Boulevard Massena 75013 Paris</p>
           <p><strong>Lien d'inscription : </strong>
           <a href="https://www.gandi.net/fr/simple-hosting" target="_blanck" >Inscription Gandi</a></p>
  </section>
  <section><h2>Informations sur la page question.php</h2>
           <p><strong>Temps de chargement total en ms( https://tools.pingdom.com/ ): </strong> 1 120 s</p>
           <p><strong>Temps lié hébergeur (ms) : </strong> 1 050 s</p>
           <p><strong>Temps lié image (ms) : </strong>  ms</p>
           <p><strong>Temps lié CSS (ms) : </strong> 84 ms</p>
           <p><strong>Temps lié JS (ms) : </strong>  ms</p>
           <p><strong>Adresse IP d'hébergement de la page question.php 
           (http://www.mon-ip.com/adresse-ip-site-internet.php) : </strong> 145.14.144.184</p>
           <p><strong>Nom du serveur d'hébergement de la page question.php : </strong> gpaas12.dc0.gandi.net</p>
  </section>
  <section><h2>Complément d'information</h2>
           <p><strong>Une question complémentaire ? </strong> 
              <a href="questions.php" id="question" class="actif">Poser une question</a>
           </p>
  </section>
  <!--<section>
  récupération du formulaire informations
        <p><?php echo $_POST['question_pseudo']; ?></p>
      <p>Vous avez laissé le message suivant <?php echo $_POST['question_text']; ?>
  </section>-->
  <footer>Copyright P.BOUQUET</footer>

</body>
</html>
