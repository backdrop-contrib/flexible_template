<?php
/**
 * @file
 * Template for the Simmons Hero layout.
 *
 * This template does not function without the Flexible Layout module also
 * installed and enabled.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node.)
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the region $content['all'] which
 *   is addapted to providefurther configurable regions, cloumns and rows if the
 *   Flexible Layout module is installed.
 */
?>
<div class="hero-layouts layout--flexible-template <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($messages): ?>
    <div class="l-messages" role="status" aria-label="<?php print t('Status messages'); ?>">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>

  <?php 
    if (!module_exists('flexible_layout')) {
      backdrop_set_message(t('This template requires the <a href="@url">Flexible Layout</a> module for generating configurable regions.', array('@url' => url('https://github.com/backdrop-contrib/flexible_layout'))), 'error');
    }
    else {
      print $output;
    }
  ?>

</div><!-- /.layout--flexible-template -->
