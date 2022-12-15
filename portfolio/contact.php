<div class="contenu-footer">
<a name="contact"></a>
<?php
$data=yaml_parse_file("contact.yaml");
foreach($data AS $tab) {
    /*echo '<h6>'.$tab["contact"].'</h6>';*/
}
?>
<div class="formulaire">
<form name="mon-formulaire1" action="page-envoi.html" method="get">
<p>
   <input type="radio" name="civi" value="Mme" /> Madame
   <input type="radio" name="civi" value="Mlle" /> Mademoiselle
   <input type="radio" name="civi" value="Mr" /> Monsieur
</p>
<p>
   Votre prénom :<br />
   <input type="text" name="prenom" value="" />
</p>
<p>
   Votre nom :<br />
   <input type="text" name="nom" value="" />
</p>
<p>
   Votre mot de passe :<br />
   <input type="password" name="passe" value="" />
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
   Votre message :<br />
   <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici un message.</textarea>
</p>
<p>
   <input type="submit" value="Envoyer" />
   <input type="reset" value="Annuler" />
</p>
</form>
</div>

<div class="footer-basic">
        <footer>
            <div class="social">
                <a href=""><img src="linkedin.png"><i class="icon ion-social-gmail"></i></a>
                <a href="https://www.linkedin.com/in/florent-l-439605257/"><img src="linkedin.png"><i class="icon ion-social-linkedin"></i></a>
                <a href="https://github.com/florent2206"><i class="icon ion-social-github"></i></a>
            </div>
            <p class="tel">06 69 38 22 05</p><br>
            <p class="copyright">Lamy Florent © 2022</p>
    </footer>
</div>