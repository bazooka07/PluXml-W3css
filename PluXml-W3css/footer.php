<?php if (!defined('PLX_ROOT')) exit; ?>

	<footer role="contentinfo" class=" w3-theme-dark   ">
		
		<div class="w3-left  w3-padding">
		&copy; 2016 <?php $plxShow->mainTitle('link'); ?> - 			<?php $plxShow->subTitle(); ?> <a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><i class="fa fa-cog" aria-hidden="true"></i></a>
		<br />
		<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml <i class="fa fa-leaf" aria-hidden="true"></i></a>
		</div>

		<div class="w3-right  w3-padding">
		<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-eject fa-stack-1x fa-inverse  w3-text-theme"></i></span></a>
		</div>

	</footer>


</body>

</html>