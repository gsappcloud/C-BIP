<?php dsm($node); ?>

<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">
<?php endif; ?>

  <div class="content">
		<div class="think-tank-city">
			<?php 
				print $node->field_thinktank_city[0]['view'] . ' ' . substr($node->field_thinktank_date[0]['value'],0,4);
			?>
		</div>
		<div class="think-tank-date">
			<?php print $node->field_thinktank_date[0]['view']; ?>
		</div>
   		<div class="think-tank-location">
			<?php print $node->field_thinktank_location[0]['view']; ?>
		</div>
		<div class="think-tank-graphic">
			<?php print $node->field_thinktank_graphic[0]['view']; ?>
		</div>
		
		<?php if($node->field_thinktank_about[0]['view']){ ?>
		<div class="think-tank-about">
			<div class="title">About</div>
			<div class="body-text">
				<?php print $node->field_thinktank_about[0]['view']; ?>
			</div>
		</div>
		<?php } ?>
		
		<?php if(!empty($node->field_thinktank_gallery)){ ?>
		<div class="think-tank-gallery">
			<div class="title">Gallery</div>
			<div class="think-tank-gallery-carousel">
				<span class="arrow-prev">PREV</span>
				<span class="think-tank-gallery-image-container">
					<?php 
						$i = 0; 
						$last = count($node->field_thinktank_gallery) -1; 
						dsm('last: ' . $last);
					?>
					<?php foreach($node->field_thinktank_gallery as $n){ ?>
						<div id="image-<?php print $i; ?>" class="think-tank-gallery-image <?php if($i != 0){ print ' hidden'; if($i == $last){ print ' last'; } } else { print ' visible first'; } ?>">
							<div class="think-tank-gallery-image">
								<?php print $n['view']; ?>
							</div>
							<div class="think-tank-gallery-image-caption">
								<?php print $n['data']['description']; ?>
							</div>
						</div>
						
					<?php $i = $i+1; } ?>
				</span>
				<span class="arrow-next">NEXT</span>
			</div>
		</div>
		<?php } ?>
		
		<div class="think-tank-session session-1">
		<?php if(!empty($node->field_tt_s1_title)){ ?>
			<div class="title">
				Session 1: <?php print $node->field_tt_s1_title[0]['view']; ?>
			</div>
		<?php } ?>
		
		<?php if(!empty($node->field_tt_s1_about)){ ?>
			<div class="think-tank-s1-about">
				<?php print $node->field_tt_s1_about[0]['view']; ?>
			</div>
		<?php } ?>
		

		<?php 
			if(!empty($node->field_tt_s1_speakers)){ 
				print '<div class="speakers">Speakers</div>';
				$s1speakercount = count($node->field_tt_s1_speakers);
				if($s1speakercount > 1){
					print '<div class="arrow-prev">PREV</div>';
				}else{
					print '<div class="arrow-prev hide">PREV</div>';
				}
				$i = 0;
				foreach($node->field_tt_s1_speakers as $s){
		?>
						<div id="speaker-<?php print $i; ?>" class="think-tank-s1-speakers <?php if($i == 0){ print ' first visible'; }else{ print ' hidden'; } if($i == ($s1speakercount - 1)){ print ' last'; } ?>">
							<?php print $s['view']; ?>
						</div>
		<?php 
					$i = $i + 1; 
				}
				if($s1speakercount > 1){
					print '<div class="arrow-next">NEXT</div>';
				}else{
					print '<div class="arrow-next hide">NEXT</div>';
				}
			}
		?>
		</div><!-- .session-1 -->
		
   		<div class="think-tank-session session-2">
		<?php if(!empty($node->field_tt_s2_title)){ ?>
			<div class="title">
				Session 2: <?php print $node->field_tt_s2_title[0]['view']; ?>
			</div>
		<?php } ?>
		
		<?php if(!empty($node->field_tt_s2_about)){ ?>
			<div class="think-tank-s2-about">
				<?php print $node->field_tt_s2_about[0]['view']; ?>
			</div>
		<?php } ?>
		

		<?php 
			if(!empty($node->field_tt_s2_speakers)){ 
				print '<div class="speakers">Speakers</div>';
				$s1speakercount = count($node->field_tt_s2_speakers);
				if($s1speakercount > 1){
					print '<div class="arrow-prev">PREV</div>';
				}else{
					print '<div class="arrow-prev hide">PREV</div>';
				}
				$i = 0;
				foreach($node->field_tt_s2_speakers as $s){
		?>
						<div id="speaker-<?php print $i; ?>" class="think-tank-s2-speakers <?php if($i == 0){ print ' first visible'; }else{ print ' hidden'; } if($i == ($s1speakercount - 1)){ print ' last'; } ?>">
							<?php print $s['view']; ?>
						</div>
		<?php 
					$i = $i + 1; 
				}
				if($s1speakercount > 1){
					print '<div class="arrow-next">NEXT</div>';
				}else{
					print '<div class="arrow-next hide">NEXT</div>';
				}
			}
		?>
		</div><!-- .session-2 -->
   
   		<div class="think-tank-session session-3">
		<?php if(!empty($node->field_tt_s3_title)){ ?>
			<div class="title">
				Session 3: <?php print $node->field_tt_s3_title[0]['view']; ?>
			</div>
		<?php } ?>
		
		<?php if(!empty($node->field_tt_s3_about)){ ?>
			<div class="think-tank-s3-about">
				<?php print $node->field_tt_s3_about[0]['view']; ?>
			</div>
		<?php } ?>
		

		<?php 
			if(!empty($node->field_tt_s3_speakers)){ 
				print '<div class="speakers">Speakers</div>';
				$s1speakercount = count($node->field_tt_s3_speakers);
				if($s1speakercount > 1){
					print '<div class="arrow-prev">PREV</div>';
				}else{
					print '<div class="arrow-prev hide">PREV</div>';
				}
				$i = 0;
				foreach($node->field_tt_s3_speakers as $s){
		?>
						<div id="speaker-<?php print $i; ?>" class="think-tank-s3-speakers <?php if($i == 0){ print ' first visible'; }else{ print ' hidden'; } if($i == ($s1speakercount - 1)){ print ' last'; } ?>">
							<?php print $s['view']; ?>
						</div>
		<?php 
					$i = $i + 1; 
				}
				if($s1speakercount > 1){
					print '<div class="arrow-next">NEXT</div>';
				}else{
					print '<div class="arrow-next hide">NEXT</div>';
				}
			}
		?>
		</div><!-- .session-3 -->
   
   
   
   
   
   
   
   
   
   
  </div>
<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif;?>
