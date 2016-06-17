<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="w3-row w3-theme" role="main">

		<section class="w3-col l8 s12 ">

			<article class="w3-card-4 w3-margin w3-theme-light w3-padding" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1 class="w3-margin-0 w3-text-theme-dark">
						<b><?php $plxShow->artTitle(); ?></b>
					</h1>
					<p class="article-info-header w3-margin-0 w3-margin-bottom">
						<span class="article-author w3-margin-right"><i class="fa fa-user" aria-hidden="true" ></i> <?php $plxShow->artAuthor() ?> </span> 
						<span class="article date w3-margin-right w3-tooltip"><i class="fa fa-calendar"></i> <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> 
							<?php if($plxMotor->plxRecord_arts->f('date_update')!=$plxMotor->plxRecord_arts->f('date_creation')) {	echo '  <i class="fa fa-history fa-flip-horizontal w3-animate-opacity" aria-hidden="true"></i>   <span class="w3-text"> mis &agrave; jour le ';	$plxShow->artUpdateDate('#num_day #month #num_year(4)') ; echo'</span>';	}	?>
						</span>
						<span class="article-comments"><i class="fa fa-comment" aria-hidden="true"></i> <a href="#comments"><?php $plxShow->artNbCom(); ?></a></span>
					</p>
				</header>

				<section>
					<?php $plxShow->artThumbnail(); ?>
					<?php $plxShow->artContent(); ?>
				</section>

				<footer>
					<p class="article-info-footer w3-margin-0 w3-margin-top">
						<span class="article-category w3-margin-right"><i class="fa fa-folder-open" aria-hidden="true" ></i>  <?php $plxShow->artCat() ?></span>
						<span class="article-tag w3-margin-right"><i class="fa fa-tags" aria-hidden="true" ></i>  <?php $plxShow->artTags() ?></span>
					</p >
				</footer>

			</article>

			<?php $plxShow->artAuthorInfos('<div class="article w3-card-4 w3-margin w3-theme-light  w3-padding" ><i class="fa fa-user" aria-hidden="true"></i> #art_author <div class="author-infos">#art_authorinfos</div> </div>'); ?>
		
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

		</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
