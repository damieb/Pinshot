<?php if(count($myads) == 0){ ?>
<div data-alert class="alert-box">
  Vous n'avez aucune images
  <a href="#" class="close">&times;</a>
</div>
<?php } ?>
<!-- Navigation dossiers -->
<nav class="breadcrumbs">
  <a href="#">Home</a>
  <a href="#">Photos</a>
  <a class="unavailable" href="#">Design</a>
  <a class="current" href="#">Art</a>
</nav>
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
<li class="arrow"><a id="previous_page_link" href="<?php echo WEBROOT;?>pins/mylist/<?php echo $back;?>">Pr&eacute;c&eacute;dente</a></li>
<?php
}
$i = 0;
foreach ($pagin as $page){
  if($page == $cPage){ ?>
  <li class="current"><a href="<?php echo WEBROOT;?>pins/mylist/<?php echo $page;?>"><?php echo $page;?></a></li>
<?php 
} 
if($page != $cPage){ ?>

  <li><a href="<?php echo WEBROOT;?>pins/mylist/<?php echo $page;?>"><?php echo $page;?></a></li>
<?php 
  }
  $i++;
}
$loop = count($i);
$next = $cPage + 1;
if($next <= $i){
?>
<li class="arrow"><a id="next_page_link"href="<?php echo WEBROOT;?>pins/mylist/<?php echo $next;?>">Suivante</a></li>
<?php }else{ ?>
<li class="arrow unavailable"><a id="next_page_link"href=""></a></li>
<?php } ?>
</ul>
</div>
<!-- Fin Pagination -->
<?php 
$userID = Auth::instance()->get_user()->pk();
foreach ($myads as $key => $value) {
  $Bfile = basename($value->img_path).PHP_EOL;
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
      <form method="post" action ="<?php echo WEBROOT;?>pins/delete/<?php echo $value->id;?>" enctype="multipart/form-data">
        <a href="#" class="tiny button radius alert" data-reveal-id="myModal<?php echo $value->id;?>">Modifier</a>
        <input type="hidden" value="<?php echo $value->id;?>" name="ads">
        <input type="submit" class="tiny radius button alert" value="Supprimer">
        </form>
      </div>
    </div>
  </div>
    <!-- Popup modification pin -->
    <div id="myModal<?php echo $value->id;?>" class="reveal-modal">
        <form method="post" enctype="multipart/form-data">
          <fieldset>
            <legend>Modification de votre Pin</legend>

            <div class="row">
              <div class="large-12 columns">
                <label>Titre</label>
                <input type="hidden" value="<?php echo $value->id;?>" name="idADS">
                <input autofocus type="text" maxlength=140 required="Titre d'annonce obligatoire" placeholder="Titre" name="title" value="<?php echo $value->title;?>">
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <label>Ville</label>
                <input type="text" maxlength=255 placeholder="Ville" name="city" value="<?php echo $value->city;?>">
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <label for="customDropdown1">Catégories</label>
                <select name="category" id="customDropdown" class="medium">
                  <option>Photo</option>
                  <option>Design</option>
                  <option>Art</option>
                  <option selected="selected">Autres</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <label>Description</label>
                <textarea class="pubads" placeholder="Votre description" name="content" ><?php echo $value->content;?></textarea>
              </div>
            </div>
            <input type="submit" class="small radius button alert" value="Modifier">
          </fieldset>
        </form>
      <a class="close-reveal-modal">&#215;</a>
    </div>
    <!-- Popup visisionnage annonce -->
    <div id="full<?php echo $value->id;?>" class="reveal-modal">
      <h2>Annonce compl&egrave;te</h2>
        <h5>Titre: <small><?php echo $value->title; ?></small><p><small><em>le: <?php echo $value->date_pub; ?></em></small></p></h5>
        <h5>Cat&eacute;gorie: <small><?php echo $value->category; ?></small></h5>
        <h5>Annonce: <small><?php echo $value->content; ?></small></h5>
      <a class="close-reveal-modal">&#215;</a>
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

?>