<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="w3-row w3-theme" role="main" >

		<section class="w3-col l8 s12">


			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

					<article class="w3-card-4 w3-margin w3-theme-light  w3-padding" role="article" id="post-<?php echo $plxShow->artId(); ?>">

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
							<?php $plxShow->artChapo("Lire la suite ...",true); ?>
						</section>

						<footer>
							<p class="article-info-footer w3-margin-0 w3-margin-top">
								<span class="article-category w3-margin-right"><i class="fa fa-folder-open"  aria-hidden="true" ></i>  <?php $plxShow->artCat() ?></span>
								<span class="article-tag w3-margin-right"> <i class="fa fa-tags"  aria-hidden="true" ></i>  <?php $plxShow->artTags() ?></span>
							</p>
						</footer>

					</article>

			<?php endwhile; ?>


		<nav class="w3-center w3-margin"><?php $plxShow->pagination(); ?></nav>

		</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
