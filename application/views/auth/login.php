<div class="row">
<?php
if(isset($errors))
{
?>
<div data-alert class="alert-box alert radius">
  Erreur d'inscription, veuillez vérifiez vos informations !
  <a href="#" class="close">&times;</a>
</div>
<?php
}
?>
  <form method="POST">
    <fieldset>
      <legend>Connexion</legend>

      <div class="row">
        <div class="large-12 columns">
          <label>Pseudo</label>
          <input autofocus type="text" required="Pseudo obligatoire" placeholder="Pseudo" name="username">
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Mot de passe</label>
          <input type="password" required="Mot de passe obligatoire" placeholder="Mot de passe" name="password">
        </div>
      </div>
      <input type="submit" class="small button radius" value="Connexion">
    </fieldset>
  </form>
</div>