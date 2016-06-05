<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="main grid w3-row w3-theme" role="main">

		<section class="col sml-12 med-8 w3-col l8 s12">


			<div class="tags-description w3-card-4 w3-margin w3-theme-l3  w3-padding"> 
				<h3><i class="fa fa-tags"></i> <?php $plxShow->tagName(); ?></h3>
				
							<span>
				<?php $plxShow->tagFeed() ?>
			</span>
			</div>
			
			<!-- articles -->
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article class="article w3-card-4 w3-margin w3-theme-light  w3-padding" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<small>
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<?php $plxShow->artNbCom(); ?>
					</small>
				</header>

				<section>
					<?php $plxShow->artThumbnail(); ?>				
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer>
					<small>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
					</small>
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
