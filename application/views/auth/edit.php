<div class="row">
<form method="post">
  <fieldset>
    <legend>Modification de votre compte</legend>
<?php
foreach ($userINF as $key => $value) {

?>
    <div class="row">
      <div class="large-12 columns">
        <label>Nom</label>
        <input autofocus type="text" required="Nom obligatoire" placeholder="Nom" name="lastname" value="<?php echo $value->lastname;?>">
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Pr&eacute;nom</label>
        <input type="text" required="Prénom obligatoire" placeholder="Pr&eacute;nom" name="firstname" value="<?php echo $value->firstname;?>">
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Pseudo</label>
        <input type="text" required="Pseudo obligatoire" placeholder="Pseudo" name="username"  value="<?php echo $value->username;?>">
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Adresse e-mail</label>
        <input type="email" required="email obligatoire" placeholder="E-mail" name="email" value="<?php echo $value->email;?>">
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Mot de passe</label>
        <input type="password" placeholder="Mot de passe" name="password"  value="">
      </div>
    </div>
    <div class="row">
    <div class="large-12 columns">
        <label>Confidentialité profil</label>
        <div class="small-3 switch radius" data-tooltip class="has-tip" title="En public votre profil est visible par tous, en privée il est visible par vos abonnées">
          <input id="z" name="privacy" type="radio" value="0" <?php if($value->privacy == 0){ echo "checked";} ?>>
          <label for="z" onclick="">Public</label>
          <input id="z1" name="privacy" type="radio" value="1" <?php if($value->privacy == 1){ echo "checked";} ?>>
          <label for="z1" onclick="">Priv&eacute;</label>
          <span></span>
        </div>
      </div>
    </div>
    <input type="submit" class="small button radius" value="Modifier">
    <a href="../users/delete" class="small button radius alert">Supprimer votre compte</a>
  </fieldset>
</form>
<?php
}
?>
</div>