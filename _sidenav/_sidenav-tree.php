<?php namespace ProcessWire;

/**
 * _sidenav-tree.php
 *
 */

/** @var Config $config */
/** @var AdminThemeCustomer3000 $adminTheme */
/** @var User $user */
/** @var string $layout */

if(!defined("PROCESSWIRE")) die();

if(!isset($content)) $content = '';

?><!DOCTYPE html>
<html class="pw pw-sidebar-frame" lang="<?php echo $adminTheme->_('en');
	/* this intentionally on a separate line */ ?>">
<head>
	<?php $adminTheme->includeFile('_head.php', array('layout' => $layout)); ?>
	<script>
		var pageListRefresh = {
			refreshPage: function(id) {
				$(document).trigger('pageListRefresh', id); 
			}
		};
		$(document).on('mouseover', 'a', ProcessWireAdminTheme.linkTargetMainMouseoverEvent);
	</script>
</head>
<body class='<?php echo $adminTheme->getBodyClass(); ?> pw-narrow-width pw-iframe'>
	<main id='main' class='pw-container uk-container uk-container-expand uk-margin-small-top uk-margin-remove-left uk-margin-large-bottom'>
		<div class='pw-content' id='content'>
			<div id='pw-content-body'>
				<?php echo $content; ?>
			</div>	
		</div>
	</main>
</body>
</html>
