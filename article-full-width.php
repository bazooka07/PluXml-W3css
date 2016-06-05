<?php include(dirname(__FILE__) . '/header.php'); ?>

	<main class="main grid w3-row w3-theme" role="main">

		<section class="w3-col">

			<article class=" article w3-card-4 w3-margin w3-theme-light  w3-padding" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle(); ?>
					</h1>
							<p class="article-info article-info-header w3-margin-0 w3-margin-bottom">
								<span class="article-author w3-margin-right"> <i class="fa fa-user"></i> <?php $plxShow->artAuthor() ?> </span> 
								<span class="article date w3-margin-right"><i class="fa fa-calendar"></i> <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time></span> 
								<span class="comments"><i class="fa fa-comment" aria-hidden="true"></i> <?php $plxShow->artNbCom(); ?></span>
							</p>
				</header>

				<section>
					<?php $plxShow->artThumbnail(); ?>
					<?php $plxShow->artContent(); ?>
				</section>

				<footer>
							<p class="article-cat article-info-footer w3-margin-0 w3-margin-top">
								<span class="article-category w3-margin-right"><i class="fa fa-folder-open"></i>  <?php $plxShow->artCat() ?></span>
								<span class="article-tag w3-margin-right"> <i class="fa fa-tags"></i>  <?php $plxShow->artTags() ?></span>
							</p>
				</footer>

			</article>

			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

		</section>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>