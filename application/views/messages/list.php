<div class="row">
    <fieldset>
      <legend>Boite de réception</legend>
        <div class="row">
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
<li class="arrow"><a id="previous_page_link" href="<?php echo WEBROOT;?>messages/list/<?php echo $back;?>">Pr&eacute;c&eacute;dente</a></li>
<?php
}
$i = 0;
foreach ($pagin as $page){
  if($page == $cPage){ ?>
  <li class="current"><a href="<?php echo WEBROOT;?>messages/list/<?php echo $page;?>"><?php echo $page;?></a></li>
<?php 
} 
if($page != $cPage){ ?>

  <li><a href="<?php echo WEBROOT;?>messages/list/<?php echo $page;?>"><?php echo $page;?></a></li>
<?php 
  }
  $i++;
}
$loop = count($i);
$next = $cPage + 1;
if($next <= $i){
?>
<li class="arrow"><a id="next_page_link"href="<?php echo WEBROOT;?>messages/list/<?php echo $next;?>">Suivante</a></li>
<?php }else{ ?>
<li class="arrow unavailable"><a id="next_page_link"href=""></a></li>
<?php } ?>
</ul>
</div>
<!-- Fin Pagination -->
<?php foreach ($mymsg as $key => $value) { 
$avatar = gravatar::get_gravatar($value->mail,50);
?>
      		<div class="large-12 columns">
      			<div class="panel">
      				<h5>Envoyé par: <small><?php echo $value->sender;?></small><p><small><em>le: <?php echo $value->date_pub; ?></em></small></p></h5>
      				<h5>Objet: <small><?php echo $value->subject;?></small></h5>
      				<a href="#" data-reveal-id="full<?php echo $value->id;?>" class="tiny radius button">D&eacute;tails</a>
              <a href="<?php echo WEBROOT."messages/delete/".$value->id;?>" class="tiny radius button">Supprimer</a>
      			</div>
      		</div>
<!-- Détails du message -->
<div id="full<?php echo $value->id;?>" class="reveal-modal">
	<h2>D&eacute;tails du message</h2>
	<h5>Envoyé par: </h5>
        <div class="row">
            <ul class="vcard">
              <li class="fn"><img src="<?php echo $avatar;?>"></li>
              <li class="street-address"><?php echo $value->sender;?></li>
              <li class="email"><a href="#"><?php echo $value->mail;?></a></li>
            </ul>
            <p><small><em>le: <?php echo $value->date_pub; ?></em></small></p>
        </div>
	<h5>Objet: <small><?php echo $value->subject;?></small></h5>
	<h5>Message: <small><?php echo $value->content;?></small></h5>
	<a class="close-reveal-modal">&#215;</a>
</div>
<?php } ?>
        </div>
     </fieldset>
</div>