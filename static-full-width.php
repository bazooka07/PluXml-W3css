<?php include(dirname(__FILE__) . '/header.php'); ?>

	<main class="w3-row w3-theme" role="main">

		<section class="w3-col l8 s12">

			<article class="article static  w3-card-4 w3-margin w3-theme-light w3-padding" role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">

				<header>
					<h1 class="w3-margin-0 w3-text-theme-dark">
						<b><?php $plxShow->staticTitle(); ?></b>
					</h1>
				</header>

				<section>
					<?php $plxShow->staticContent(); ?>
				</section>

			</article>

		</section>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>

