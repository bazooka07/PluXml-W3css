<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="w3-row w3-theme" role="main">

		<section class="w3-col l8 s12">

			<article class="article w3-card-4 w3-margin w3-theme-light w3-padding" role="article">

				<header>
					<h1>
						<b><?php $plxShow->lang('ERROR'); ?></b>
					</h1>
				</header>

				<section>
					<p>
						<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?php $plxShow->erreurMessage(); ?>
					</p>
				</section>

			</article>

		</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
