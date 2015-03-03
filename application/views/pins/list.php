<?php
if(count($myads) == 0)
{
?>
<div data-alert class="alert-box">
  Il n'y a aucune Images
  <a href="#" class="close">&times;</a>
</div>
<?php
}
?>
<!-- Partie recherche -->
<form method="post" class="custom">
    <div class="row">
      <div class="large-3 columns">
        <input name="nameads" type="text" id="nameList" placeholder="Recherche par nom">
      </div>
      <div class="large-3 columns">
        <input name="cityads" type="text" id="cityList" placeholder="Ville">
      </div>
      <div class="large-3 columns">
        <select name="categoryads" id="customDropdown" class="small">
            <option selected="selected" value="" DISABLED>Catégorie</option>
                  <option>Photo</option>
                  <option>Design</option>
                  <option>Art</option>
                  <option selected="selected">Autres</option>
        </select>
      </div>
      <div class="large-3 columns">
        <input type="submit" class="small button radius" value="Rechercher">
      </div>
    </div>
</form>

<!-- Pagination -->
<div class="pagination-centered">
<ul class="pagination">
<?php $back = $cPage - 1;
if($back == 0){
?>
<li class="arrow unavailable"><a id="previous_page_link" href=""></a></li>
<?php
}
else{
?>
<li class="arrow"><a id="previous_page_link" href="<?php echo WEBROOT;?>pins/list/<?php echo $back;?>">Pr&eacute;c&eacute;dente</a></li>
<?php
}
$i = 0;
foreach ($pagin as $page){
  if($page == $cPage){ ?>
  <li class="current"><a href="<?php echo WEBROOT;?>pins/list/<?php echo $page;?>"><?php echo $page;?></a></li>
<?php 
} 
if($page != $cPage){ ?>

  <li><a href="<?php echo WEBROOT;?>pins/list/<?php echo $page;?>"><?php echo $page;?></a></li>
<?php 
  }
  $i++;
}
$loop = count($i);
$next = $cPage + 1;
if($next <= $i){
?>
<li class="arrow"><a id="next_page_link"href="<?php echo WEBROOT;?>pins/list/<?php echo $next;?>">Suivante</a></li>
<?php }else{ ?>
<li class="arrow unavailable"><a id="next_page_link"href=""></a></li>
<?php } ?>
</ul>
</div>

<!-- Fin Pagination -->
<?php
if(Auth::instance()->get_user() == true){
$idUser = Auth::instance()->get_user()->pk();
}
foreach ($myads as $key => $value) {
if(isset($idUser) == FALSE OR (isset($idUser) AND $value->id_user != $idUser)){
  $Bfile = basename($value->img_path).PHP_EOL;
  $info = helper::info('user','id',$value->id_user,1);
  foreach ($info as $key => $data) {
    $avatar = gravatar::get_gravatar($data->email);
?>
  <!-- Article -->
  <div class="large-3 columns">
    <div class="panel pinPanel">
    <div class="row">
      <a class="th th-item" href="#" data-reveal-id="imgZ<?php echo $value->id;?>">
        <img class="imgPin" src="<?php echo WEBROOT."/uploads/".$value->id_user."/".$Bfile?>">
      </a>
      <h5><small class="customFont"><?php echo $value->title; ?></small></h5>
    </div>
    <div class="pinRow"></div>
      <div class="row">
        <a href="<?php echo WEBROOT;?>profil/show/<?php echo $value->id_user;?>">
          <span><img class="avatarPin" src="<?php echo $avatar;?>"></span><h5><small class="customFont"><?php echo $data->username; ?></small></h5>
        </a>
      </div>
    </div>
  </div>
    <!-- Affichage commentaires et images -->
    <div id="imgZ<?php echo $value->id;?>" class="reveal-modal">
      <h2><?php echo $value->title;?></h2>
        <div class="large-6 columns"><img src="<?php echo WEBROOT."/uploads/".$value->id_user."/".$Bfile?>"></div>
        <div class="large-6 columns">
        <?php if(Auth::instance()->get_user() == true){ $idUser = Auth::instance()->get_user()->pk(); ?>
          <form method="post" id="comment-Form">
            <div class="row">
              <div class="large-12 columns">
                <label>Commentaire</label>
                <textarea class="pubads" id="content<?php echo $value->id.$idUser;?>" placeholder="Votre commentaire"></textarea>
              </div>
            </div>
            <div class="large-6 columns"><div id="submit_com" onclick="javascript:comment(<?php echo $value->id.",".$idUser;?>);" class="tiny button radius">Publier</div></div>
          </form>
          <?php } ?>
          <div class="row">
            <div id="update" style="height:250px; overflow:scroll;" class="timeline large-12 columns">
              <?php 
              $coms = helper::info('comment','id_pin',$value->id,1);
              foreach ($coms as $key => $comData) {
                $userCom = helper::info('user','id',$comData->id_user,2);
              ?>
            <div class="panel">
              <h5 class="customFont"><small><?php echo $userCom->username;?></small></h5>
              <h5><small><?php echo $comData->content;?></small></h5>
              </div>
              <?php } ?>
            </div>
            <div id="flash<?php echo $value->id; ?>" class="large-12 columns"></div>
          </div>
        </div>
      <a class="close-reveal-modal">&#215;</a>
    </div>
    <!-- Fin bloc affichage -->
<?php
    }
  }
}

?>