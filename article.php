<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class=" main grid w3-row w3-theme" role="main">

		<section class="col sml-12 med-8 w3-col l8 s12 ">

			<article class="article w3-card-4 w3-margin w3-theme-light  w3-padding" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1 class="">
						<b><?php $plxShow->artTitle('link'); ?></b>
					</h1>
					<p class="art-info">
						<span class="author"><i class="fa fa-user"></i> <?php $plxShow->artAuthor() ?></span> 
						<span class="date"><i class="fa fa-calendar"></i> <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time></span> 
						<span class="comments"><i class="fa fa-comment" aria-hidden="true"></i> <a href="#comments"><?php $plxShow->artNbCom(); ?></a></span>
					</p>
				</header>

				<section>
					<?php $plxShow->artThumbnail(); ?>
					<?php $plxShow->artContent(); ?>
				</section>
<?php eval($plxShow->callHook('MySocialNetwork')) ?>
				<footer>
					<p class="art-cat">
						<span class="category"><i class="fa fa-folder-open"></i>  <?php $plxShow->artCat() ?></span>
						<span class="tag"> <i class="fa fa-tags"></i>  <?php $plxShow->artTags() ?></span>
					</p >

				</footer>

			</article>

			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

		</section>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>