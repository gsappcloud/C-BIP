<?php dsm($node); ?>

<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="thinktankspeaker node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">
<?php endif; ?>


  <div class="content">
	<div class="speaker-left">
    <div class="speaker-portrait">
    	<?php 
    		if(!empty($node->field_speaker_portrait)){
    			print $node->field_speaker_portrait[0]['view'];
    		}
    	?>
    </div> 
    <div class="speaker-text-container">
    	<div class="speaker-name">
    		<?php
    			if(!empty($node->title)){
    				print $node->title;
    			}
    		?>
    	</div>
    	<div class="speaker-title">
    		<?php
    			if(!empty($node->field_speaker_title)){
    				print $node->field_speaker_title[0]['view'];
    			}
    		?>
    	</div>
    </div>
    </div><!-- .speaker-top -->
    <div class="speaker-right">
    	<?php
    		if(!empty($node->field_speaker_quote)){
    			print $node->field_speaker_quote[0]['view'];
    		}
		?>
    </div>
    
  </div>

  

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif;?>
