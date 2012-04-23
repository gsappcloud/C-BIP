<?php dsm($node); ?>

<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">
<?php endif; ?>
  <div class="content">
    <div class="element-author">by&nbsp;<?php print $node->field_element_author[0]['safe']['title']; ?></div>
	
	<?php if($node->field_element_abstract[0]['safe']){ ?>
	<div class="element-abstract-label">Abstract</div>
	<div class="element-abstract"><?php print $node->field_element_abstract[0]['safe']; ?></div>
	<?php } ?>	
	<div class="element-dsq">
   		<div class="feature-requests-title">Feature Requests</div>
   		<div class="feature-reqeusts-about">Use the disqus-powered forum below to make feature requests. You can comment on existing threads or start your own.</div>
  		<div id="disqus_thread"></div>
<script type="text/javascript">
    var disqus_shortname = 'cbip'; // required: replace example with your forum shortname
    	var url = window.location.protocol + "//" + window.location.host + window.location.pathname;
    	var idx = url.lastIndexOf('/');
   		idx = idx + 1;
    	var uri = url.substring(idx);
   
		var disqus_identifier = 'element-' + uri;
		var disqus_url = url;
		
		console.log("short: " + disqus_shortname + " id: " + disqus_identifier + " url: " + disqus_url);
	
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

  		<div class="expandcontainer"><a id="element-dsq-button" class="expandlinkwhite" href="#disqus_thread">EXPAND</a></div>
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  	</div>
  </div>
  
   
  
  <div class="versions">
  	<?php print views_embed_view('element', 'page_1', $node->nid); ?>
  
  
  </div> <!--/versions-->


    <footer>
     
    </footer>


<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif;?>
