<?php if(!defined('PLX_ROOT')) exit; ?>

<!-- Comments -->
<div class="coments    w3-card-4 w3-margin w3-theme-light  w3-padding" >

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>

		<h2 id="comments">
			<i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo $plxShow->artNbCom(); ?>
		</h2>

		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<div id="<?php $plxShow->comId(); ?>" class="comment <?php $plxShow->comLevel(); ?>  w3-leftbar w3-theme-border w3-margin-bottom w3-card-2 w3-hover-shadow " >

			<!-- display comment -->
			<div id="com-<?php $plxShow->comIndex(); ?>">

				<p class="w3-margin-0 w3-margin-left">			
					<span class="coment-author w3-left w3-margin-right"><i class="fa fa-user"></i> <?php $plxShow->comAuthor('link'); ?> </span>  
					<span class="coment-date w3-margin-right "><i class="fa fa-calendar"></i><time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate(' #num_day #month #num_year(4) <i class="fa fa-clock-o w3-margin-left" aria-hidden="true"></i> #hour:#minute'); ?></time>  </span> 
					<span class="w3-right w3-tag w3-theme comment-link-reply">
						<span class="coment-link "><a class="nbcom" href="<?php $plxShow->ComUrl(); ?>" title=" #<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>"><i class="fa fa-link" aria-hidden="true"></i></a></span> 
					  |	<span class="coment-reply  "><a rel="nofollow" title="<?php $plxShow->lang('REPLY'); ?>" href="<?php $plxShow->artUrl(); ?>#form" onclick="replyCom('<?php $plxShow->comIndex() ?>')"> <i class="fa fa-share" aria-hidden="true"></i><!-- <?php $plxShow->lang('REPLY'); ?> --></a></span>
					</span>
				</p>
				<blockquote class="w3-margin">
					<p class="content_com type-<?php $plxShow->comType(); ?> w3-margin-0"><?php $plxShow->comContent(); ?></p>
				</blockquote>

			</div>
			
		</div>

		<?php endwhile; # Fin de la boucle sur les commentaires ?>

	<?php endif; ?>


	<!-- Link to RSS feed -->
	<p><i class="fa fa-rss" aria-hidden="true"></i> <?php $plxShow->comFeed('rss',$plxShow->artId()); ?></p>


	<!-- Add a comment -->
	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

	<h2>
		<i class=" fa fa-pencil"></i> <?php $plxShow->lang('WRITE_A_COMMENT') ?>
	</h2>

	<form id="form" action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<fieldset>
				<p>
					<input class="w3-input  w3-animate-input w3-theme-border" style="width:50%" type="text" id="id_name" name="name"  value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" required>
					<label class="w3-label w3-validate" for="id_name"><?php $plxShow->lang('NAME') ?> </label>
				</p>
				<p>
					<input class="w3-input  w3-animate-input w3-theme-border" style="width:50%" type="email" id="id_mail" name="mail"  value="<?php $plxShow->comGet('mail',''); ?>" >
					<label class="w3-label w3-validate" for="id_mail"><?php $plxShow->lang('EMAIL') ?> </label>
				</p>
				<p>
					<input class="w3-input  w3-animate-input w3-theme-border" style="width:50%" type="url" id="id_site" name="site"  value="<?php $plxShow->comGet('site',''); ?>"  >
					<label class="w3-label w3-validate" for="id_site"><?php $plxShow->lang('WEBSITE') ?> </label>
				</p>
				<!-- quote the message  if reply -->
				<div id="id_answer" class=" w3-margin-left  " ></div>
				
				<p>
					<textarea class="w3-input  w3-animate-input w3-theme-border" style="width:75% "   id="id_content" name="content" required ><?php $plxShow->comGet('content',''); ?></textarea>
					<label class="w3-label w3-validate " for="id_content" ><?php $plxShow->lang('COMMENT') ?> </label>
				</p>

				<?php $plxShow->comMessage('<div class="w3-container w3-section w3-red"><span onclick="this.parentElement.style.display=\'none\'" class="w3-closebtn">&times;</span><p id="com_message" class="text-red"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> #com_message</strong></p></div>'); ?>

				<?php if($plxShow->plxMotor->aConf['capcha']): ?>
					<p>
						<input class="w3-input   w3-theme-border"  type="text" id="id_rep" name="rep" maxlength="1" style="width:50% " value="<?php $plxShow->comGet('site',''); ?>"  required >
						<label class="w3-label w3-validate w3-tooltip" for="id_rep"><?php $plxShow->capchaQ(); ?>  <span class="w3-margin-left w3-text w3-theme-light"> <i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo $plxShow->lang('ANTISPAM_WARNING') ?></span> </label>
					</p>
				<?php endif; ?>

				<p>
					<input type="hidden" id="id_parent" name="parent" value="<?php $plxShow->comGet('parent',''); ?>" />
					<input class="w3-btn w3-section w3-theme " type="submit" value="<?php $plxShow->lang('SEND') ?>" />
				</p>
			</fieldset>
	</form>

	<script>
	function replyCom(idCom) {
		document.getElementById('id_answer').innerHTML='<?php $plxShow->lang('REPLY_TO'); ?> :';
		document.getElementById('id_answer').innerHTML+=document.getElementById('com-'+idCom).innerHTML;
		document.getElementById('id_answer').innerHTML+='<a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="cancelCom()" class="w3-tag w3-theme  w3-opacity" href="http://www.w3schools.com"><?php $plxShow->lang('CANCEL'); ?></a>';
		document.getElementById('id_answer').style.display='inline-block';
		document.getElementById('id_parent').value=idCom;
		document.getElementById('id01').focus();
	}
	function cancelCom() {
		document.getElementById('id_answer').style.display='none';
		document.getElementById('id_parent').value='';
		document.getElementById('com_message').innerHTML='';
	}
	var parent = document.getElementById('id_parent').value;
	if(parent!='') { replyCom(parent) }
	</script>


	<?php else: ?>
	<p>
		<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
	</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>

</div>