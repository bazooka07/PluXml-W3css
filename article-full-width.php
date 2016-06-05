<?php include(dirname(__FILE__) . '/header.php'); ?>

	<main class="w3-row w3-theme" role="main">

		<section class="w3-col">

			<article class="w3-card-4 w3-margin w3-theme-light w3-padding" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1 class="w3-margin-0">
						<b><?php $plxShow->artTitle(); ?></b>
					</h1>
					<p class="article-info-header w3-margin-0 w3-margin-bottom">
						<span class="article-author w3-margin-right"><i class="fa fa-user" aria-hidden="true" ></i> <?php $plxShow->artAuthor() ?> </span> 
						<span class="article-date w3-margin-right"><i class="fa fa-calendar" aria-hidden="true"></i> <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time></span> 
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

			<div class="article w3-card-4 w3-margin w3-theme-light  w3-padding" > 
				<i class="fa fa-user" aria-hidden="true"></i> <?php $plxShow->artAuthor() ?> 
				<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
			</div>

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

		</section>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
