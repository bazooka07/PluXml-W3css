<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="main grid w3-row w3-theme" role="main">

		<section class="w3-col l8 s12">

<div class="archive-description w3-card-4 w3-margin w3-theme-l3  w3-padding"> 
				<h3><i class="fa fa-archive"></i> <?php echo plxDate::formatDate($plxShow->plxMotor->cible, $plxShow->lang('ARCHIVES').' #month #num_year(4)') ?></h3>

			<!-- <span><i class="fa fa-rss" aria-hidden="true"></i> <?php $plxShow->artFeed('rss',$plxShow->catId()); ?></span> -->
			</div>

		

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article class=" article w3-card-4 w3-margin w3-theme-light  w3-padding" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
							<h1 class="w3-margin-0">
								<b><?php $plxShow->artTitle('link'); ?></b>  
							</h1>
							<p class="article-info article-info-header w3-margin-0 w3-margin-bottom">
								<span class="article-author w3-margin-right"> <i class="fa fa-user"></i> <?php $plxShow->artAuthor() ?> </span> 
								<span class="article date w3-margin-right"><i class="fa fa-calendar"></i> <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time></span> 
								<span class="comments"><i class="fa fa-comment" aria-hidden="true"></i> <?php $plxShow->artNbCom(); ?></span>
							</p>
				</header>

				<section>
					<?php $plxShow->artThumbnail(); ?>
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer>
							<p class="article-cat article-info-footer w3-margin-0 w3-margin-top">
								<span class="article-category w3-margin-right"><i class="fa fa-folder-open"></i>  <?php $plxShow->artCat() ?></span>
								<span class="article-tag w3-margin-right"> <i class="fa fa-tags"></i>  <?php $plxShow->artTags() ?></span>
							</p>
				</footer>

			</article>

			<?php endwhile; ?>

			<nav class="pagination text-center">
				<?php $plxShow->pagination(); ?>
			</nav>



		</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>