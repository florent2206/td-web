<div class="contenu-footer">
<?php
$data=yaml_parse_file("contact.yaml");
foreach($data AS $tab) {
    /*echo '<h6>'.$tab["contact"].'</h6>';*/
}
?>
<form action="send-email.php" method="POST">
<div class="formu">
<p>
   Votre prénom et votre nom :<br />
   <input type="text" name="prenom" value="" placeholder="Prenom et nom"/>
</p>
<p>
   Votre e-mail :<br />
   <input type="text" name="e-mail" value="" placeholder="mail de l'emetteur"/>
</p>
<p>
   Vous êtes<br />
   <select name="profil">
      <option value="parti">Un professeur</option>
      <option value="profe" selected="selected">Un élève</option>
      <option value="insti">Un intru</option>
   </select>
</p>
<p>
   Objet du message :<br />
   <input name="message" rows="6" placeholder="Objet du message"/>
</p>
<p>
   <input type="submit" value="Envoyer" />
</p>
</form>


</div>


<div class="footer-basic">
        <footer>
            <div class="social">
                <a href="https://www.linkedin.com/in/florent-l-439605257/"><img src="link.png"><i class="icon ion-social-linkedin"></i></a>
                <a href="https://github.com/florent2206"><img src="github.jpg"><i class="icon ion-social-github"></i></a>
            </div>
            <p class="tel">06 69 38 22 05</p><br>
            <p class="copyright">Lamy Florent © 2022</p>
    </footer>
</div>