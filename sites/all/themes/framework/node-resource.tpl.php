<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">
<?php endif; ?>

<?php print '<div class="resource-title">' . $node->title . '</div>'; ?>

<?php if ($submitted){ ?>
  <div class="resource-submitted"><?php print t(' Updated: ') . format_date($node->changed, 'custom', "F jS, Y");?></div> 
  <?php } ?>

  <div class="content">
    <?php 
    
    print '<div class="resource-body">' . $node->body . '</div>'; 
    
    if(!empty($node->field_resource_images[0][view])){
    
    	print '<div class="resource-images">' . $node->field_resource_images[0][view] . '</div>'; 
    }
    
    
    ?>
  </div>

  <?php if (!empty($terms)): ?>
    <footer>
      <?php if ($terms): ?>
        <div class="resource-terms">
          <span><?php print t('Category: ') ?></span><?php print $terms ?>
        </div>
      <?php endif;?>
      
    </footer>
  <?php endif;?>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif;?>
