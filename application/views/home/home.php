<?php defined('SYSPATH') or die('No direct script access.'); ?>
 <!-- Header Content -->
 <!-- Non logged -->
 <?php
  if(Auth::instance()->get_user() == FALSE )
  {
?>
<div class="fade"></div>
<div class="row">
    <div class="reveal-modal open textPop" style="display: block; opacity: 1; visibility: visible; top: 100px;">
      <h2 class="altH superSize">Come !</h2>
      <a href="<?php echo WEBROOT."users/signup";?>" class="button radius">Cr&eacute;ez un compte Pinshot</a>
    </div>
</div>
<div id="myClearingEx" class="container">
  <ul class="clearing-thumbs" data-clearing>
<?php
    foreach ($slide as $key => $value) {
      $Bfile = basename($value->img_path).PHP_EOL;
?>
        <li><img class="gallery" src="<?php echo WEBROOT."/uploads/".$value->id_user."/".$Bfile?>"></li>
<?php
}
?>
    </ul>
</div>
<?php
}
?>
<!-- Logged -->
<?php
if(Auth::instance()->get_user() == true)
{
  $idUSER = Auth::instance()->get_user()->pk();
  $followers = helper::info('follower','id_user',$idUSER,2);
  $listFLW = explode(",",$followers->follows);

  foreach ($listFLW as $key => $flw){
    $listUSR = helper::info('user','id',$flw,1);
    foreach ($listUSR as $key => $value){
      $listPin = helper::info('pin','id_user',$value->id,1);
      $avatar = gravatar::get_gravatar($value->email);
      foreach ($listPin as $key => $data){
        $Bfile = basename($data->img_path).PHP_EOL;
?>
  <!-- Article -->
  <div class="large-3 columns">
    <div class="panel pinPanel">
    <div class="row">
      <a class="th th-item" href="#" data-reveal-id="imgZ<?php echo $data->id;?>">
        <img class="imgPin" src="<?php echo WEBROOT."/uploads/".$value->id."/".$Bfile?>">
      </a>
      <h5><small class="customFont"><?php echo $data->title; ?></small></h5>
    </div>
    <div class="pinRow"></div>
      <div class="row">
        <a href="<?php echo WEBROOT;?>profil/show/<?php echo $value->id;?>">
          <span><img class="avatarPin" src="<?php echo $avatar;?>"></span><h5><small class="customFont"><?php echo $value->username; ?></small></h5>
        </a>
      </div>
    </div>
  </div>
  <!-- Affichage commentaires et images -->
    <div id="imgZ<?php echo $data->id;?>" class="reveal-modal">
      <h2><?php echo $data->title;?></h2>
        <div class="large-6 columns"><img src="<?php echo WEBROOT."/uploads/".$data->id_user."/".$Bfile?>"></div>
        <div class="large-6 columns">
        <?php if(Auth::instance()->get_user() == true){ $idUser = Auth::instance()->get_user()->pk(); ?>
          <form method="post" id="comment-Form">
            <div class="row">
              <div class="large-12 columns">
                <label>Commentaire</label>
                <textarea class="pubads" id="content<?php echo $data->id.$idUser;?>" placeholder="Votre commentaire"></textarea>
              </div>
            </div>
            <div class="large-6 columns"><div id="submit_com" onclick="javascript:comment(<?php echo $data->id.",".$idUser;?>);" class="tiny button radius">Publier</div></div>
          </form>
          <?php } ?>
          <div class="row">
            <div id="update" style="height:250px; overflow:scroll;" class="timeline large-12 columns">
              <?php 
              $coms = helper::info('comment','id_pin',$data->id,1);
              foreach ($coms as $key => $comData) {
                $userCom = helper::info('user','id',$comData->id_user,2);
              ?>
            <div class="panel">
              <h5 class="customFont"><small><?php echo $userCom->username;?></small></h5>
              <h5><small><?php echo $comData->content;?></small></h5>
              </div>
              <?php } ?>
            </div>
            <div id="flash<?php echo $data->id; ?>" class="large-12 columns"></div>
          </div>
        </div>
      <a class="close-reveal-modal">&#215;</a>
    </div>
    <!-- Fin bloc affichage -->
<?php
      }
    }
  }
}
?>

 
 
      <!-- End Header Content -->