<?php
/**
 * @file
 * Template for Panopoly bryant.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */

// We want to collapse the sidebar if there is no content
$full_width = empty($content['sidebar']) ? ' full-width' : '';
?>

<div class="panel-display bryant clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="bryant-container bryant-content-container clearfix">
    <?php if (!empty($content['sidebar'])): ?>
      <div class="bryant-sidebar bryant-content-region panel-panel">
        <div class="bryant-sidebar-inner bryant-content-region-inner panel-panel-inner">
          <?php print $content['sidebar']; ?>
        </div>
      </div>
    <?php endif; ?>
    <div class="bryant-content bryant-content-region panel-panel<?php print $full_width; ?>">
      <div class="bryant-content-inner bryant-content-region-inner panel-panel-inner">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
  </div>

</div><!-- /.bryant -->