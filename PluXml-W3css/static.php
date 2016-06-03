<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="main grid  main grid w3-row w3-theme" role="main">

		<section class="col sml-12 med-8 w3-col l8 s12">

			<article class="article static article w3-card-4 w3-margin w3-theme-light  w3-padding" role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">

				<header>
					<h1>
						<?php $plxShow->staticTitle(); ?>
					</h1>
				</header>

				<section>
					<?php $plxShow->staticContent(); ?>
				</section>

			</article>

		</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>