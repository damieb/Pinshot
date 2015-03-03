<?php
$avatar = gravatar::get_gravatar($userINFO->email,50);
if(Auth::instance()->get_user() == true){
  $idUSER = Auth::instance()->get_user()->pk();
  $info = helper::info('user','id',$idUSER,2);
?>
<!-- Formulaire d'envoie de message lorsque l'utilisateur est connecter -->
<div class="row">
  <form method="POST">
    <fieldset>
      <legend>Envoie de message à</legend>
      <div class="row">
      <div class="large-12 columns">
        <ul class="vcard">
          <li class="fn"><img src="<?php echo $avatar;?>"></li>
          <li class="fn"><?php echo $userINFO->username; ?></li>
        </ul>
      </div>
        <div class="large-12 columns">
          <label>Votre Nom</label>
          <input type="text" required="Nom obligatoire" placeholder="Votre nom" value="<?php echo $info->username ;?>" name="sender">
        </div>
        <div class="large-12 columns">
          <label>Votre Email</label>
          <input type="email" required="Email obligatoire" placeholder="Votre email" name="mail" value="<?php echo $info->email ;?>">
        </div>
        <div class="large-12 columns">
          <label>Objet</label>
          <input autofocus type="text" required="Objet de message obligatoire" placeholder="L'objet de votre message" name="subject">
        </div>
        <div class="large-12 columns">
          <label>Message</label>
          <textarea class="pubads" placeholder="Votre message" name="content"></textarea>
        </div>
      </div>
      <input type="submit" class="small button radius" value="Envoyer">
    </fieldset>
  </form>
</div>
<?php
}
else{
?>
<!-- Formulaire d'envoi quand non connecter -->
<div class="row">
  <form method="POST">
    <fieldset>
      <legend>Envoie de message à</legend>
      <div class="row">
      <div class="large-12 columns">
        <ul class="vcard">
          <li class="fn"><img src="<?php echo $avatar;?>"></li>
          <li class="fn"><?php echo $userINFO->username; ?></li>
        </ul>
      </div>
        <div class="large-12 columns">
          <label>Votre Nom</label>
          <input autofocus type="text" required="Nom obligatoire" placeholder="Votre nom" name="sender">
        </div>
        <div class="large-12 columns">
          <label>Votre Email</label>
          <input type="email" required="Email obligatoire" placeholder="Votre email" name="mail">
        </div>
        <div class="large-12 columns">
          <label>Objet</label>
          <input type="text" required="Objet de message obligatoire" placeholder="L'objet de votre message" name="subject">
        </div>
        <div class="large-12 columns">
          <label>Message</label>
          <textarea class="pubads" placeholder="Votre message" name="content"></textarea>
        </div>
      </div>
      <input type="submit" class="small button radius" value="Envoyer">
    </fieldset>
  </form>
</div>
<?php
}
?>