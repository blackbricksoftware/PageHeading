<?php defined( '_JEXEC' ) or die( 'Restricted access' );

$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$menu = $app->getMenu();
$active = $menu->getActive();
if (empty($active)) return;

$ignore_show_page_heading = $this->params->get('ignore_show_page_heading',true);
$menu_title_backup = $this->params->get('menu_title_backup',true);
$tag = $this->params->get('tag','h1');
$float = $this->params->get('float','');
$classes = $this->params->get('classes','');
$styles = $this->params->get('styles','');

$heading = $active->params->get('page_heading',$menu_title_backup?$active->title:'');

$show_heading = !empty($heading)&&($ignore_show_page_heading||$active->params->get('show_page_heading'));
?>
<?php if ($show_heading) { ?>
	<<?= $tag ?> class="<?= $float,' ',$classes ?>" style="<?= $styles ?>">
		<?= htmlspecialchars($heading) ?>
	</<?= $tag ?>>
	<div class="clearfix"></div>
<?php }


