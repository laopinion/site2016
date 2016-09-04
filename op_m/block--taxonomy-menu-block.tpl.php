<?php 
/**
 * @file
 * Alpha's theme implementation to display a block.
 */
?>
<div class="menu_seccion"<?php print $attributes; ?>>
  <div class="<?php echo trim(strtolower($block->subject)); ?>">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h3<?php print $title_attributes; ?>><?php print $block->subject; ?></h3>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
      <div class="submenu">
        <?php print $content ?>
      </div>
  </div>
</div>