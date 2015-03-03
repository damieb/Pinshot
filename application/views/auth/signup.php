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
  <form method="post">
    <fieldset>
      <legend>Inscription</legend>

      <div class="row">
        <div class="large-12 columns">
          <label>Nom</label>
          <input autofocus type="text" required="Nom obligatoire" placeholder="Nom" name="lastname">
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Pr&eacute;nom</label>
          <input type="text" required="Prénom obligatoire" placeholder="Pr&eacute;nom" name="firstname">
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Pseudo</label>
          <input type="text" required="Pseudo obligatoire" placeholder="Pseudo" name="username">
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Adresse e-mail</label>
          <input type="email" required="email obligatoire" placeholder="E-mail" name="email">
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Mot de passe</label>
          <input type="password" required="Mot de passe obligatoire" placeholder="Mot de passe" name="password">
        </div>
      </div>
      <input type="submit" class="small button radius" value="Inscription">
    </fieldset>
  </form>
</div>