<?php 
$avatar = gravatar::get_gravatar($userINF->email,100);
if(Auth::instance()->get_user() == true){
  $idUSER = Auth::instance()->get_user()->pk();
  $followlist = helper::info('follower','id_user',$idUSER,2);
  $search = strstr($followlist->follows, $userINF->id);
}
?>
<div class="row">
	<div class="small-6 large-centered columns">
		<div class="panel pinPanel">
			<span><img src="<?php echo $avatar;?>"></span>
			<a class="small button radius" href="<?php echo WEBROOT. "messages/contact/".$userINF->id;?>">Message</a>
<?php
      if(Auth::instance()->get_user() == true && $search == FALSE){
?>
			<a class="small button radius" href="<?php echo WEBROOT;?>profil/subscribe/<?php echo $userINF->id;?>">S'abonner</a>
<?php
      }
      if(Auth::instance()->get_user() == true && $search == TRUE){
?>
      <a class="small button radius" href="<?php echo WEBROOT;?>profil/unsuscribe/<?php echo $userINF->id;?>">Se d&eacute;sabonner</a>
<?php } ?>
			<h5><small class="customFont"><?php echo $userINF->username; ?></small></h5>
		</div>
	</div>
</div>
<?php
if(Auth::instance()->get_user() == true && $search == TRUE){
foreach ($usrPINS as $key => $value) {
  $Bfile = basename($value->img_path).PHP_EOL;
?>
  <!-- Article -->
  <div class="large-3 columns">
    <div class="panel pinPanel">
    <div class="row">
      <a class="th th-item" href="#" data-reveal-id="imgZ<?php echo $value->id;?>">
        <img class="imgPin" src="<?php echo WEBROOT."/uploads/".$userINF->id."/".$Bfile?>">
      </a>
      <h5><small class="customFont"><?php echo $value->title; ?></small></h5>
    </div>
    <div class="pinRow"></div>
      <div class="row">
        <a href="<?php echo WEBROOT;?>profil/show/<?php echo $value->id_user;?>">
          <span><img class="avatarPin" src="<?php echo $avatar;?>"></span><h5><small class="customFont"><?php echo $userINF->username; ?></small></h5>
        </a>
      </div>
    </div>
  </div>
    <!-- Image zoom -->
    <div id="imgZ<?php echo $value->id;?>" class="reveal-modal">
      <h2>Image de : <?php echo $value->title;?></h2>
        <img src="<?php echo WEBROOT."/uploads/".$value->id_user."/".$Bfile?>">
      <a class="close-reveal-modal">&#215;</a>
    </div>
<?php 
  }
}
?>