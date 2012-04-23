$(document).ready(function() {
	/* Disqus */
	
	var expandDisqusElementFunc = function(){
		window.disqus_no_style = true;
		
		$("#disqus_thread").css("display", "block");
	
		/*var disqus_shortname = 'cbip'; // required: replace example with your forum shortname
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
*/
	
		$(this).text("COLLAPSE");
		$(this).addClass("collapse");
		$(this).unbind('click');
		$(this).bind('click', collapseDisqusElementFunc);
		$(this).parent().css("border-top", "1px solid white").css("border-bottom", "none");
	};
	
	var collapseDisqusElementFunc = function(){
		$("#disqus_thread").css("display", "none");
		$content = $(this).parents('.content');
		//$('#disqus_thread').empty();
		$(this).text("EXPAND");
		$(this).removeClass("collapse");
		$(this).unbind('click');
		$(this).bind('click', expandDisqusElementFunc);
		$(this).parent().css("border-top", "none");
	};
	
	$('#element-dsq-button').bind('click', expandDisqusElementFunc);

	
	

	var alignSideBarRight = function(link){
		var ww = $(window).width();
		var right = (ww - 1024)/2;
		link.css('right', right);
	};
	var alignSideBarLeft = function(link){
		var ww = $(window).width();
		var right = (ww - 1024)/2;
		link.css('left', right);
	};

	$("#main .think-tank-gallery-carousel .arrow-prev").bind('click', function(){
		if($("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.visible").hasClass('first')){
			$("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.last").removeClass('hidden').addClass('visible');
		}else{
			var id = $("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.visible").attr('id');
			id = id.substring(6);
			id = parseInt(id) - 1;
			$("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-gallery-carousel .think-tank-gallery-image-container #image-"+id).removeClass('hidden').addClass('visible');	
		}
	});
	
	$("#main .think-tank-gallery-carousel .arrow-next").bind('click', function(){
		if($("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.visible").hasClass('last')){
			$("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.first").removeClass('hidden').addClass('visible');
		}else{
			var id = $("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.visible").attr('id');
			id = id.substring(6);
			id = parseInt(id) + 1;
			$("#main .think-tank-gallery-carousel .think-tank-gallery-image-container .think-tank-gallery-image.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-gallery-carousel .think-tank-gallery-image-container #image-"+id).removeClass('hidden').addClass('visible');	
		}
	});
	
	
	$("#main .think-tank-session.session-1 .arrow-prev").bind('click', function(){
		if($("#main .think-tank-session.session-1 .think-tank-s1-speakers.visible").hasClass('first')){
			$("#main .think-tank-session.session-1 .think-tank-s1-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-1 .think-tank-s1-speakers.last").removeClass('hidden').addClass('visible');
		}else{
			var id = $("#main .think-tank-session.session-1 .think-tank-s1-speakers.visible").attr('id');
			id = id.substring(8);
			id = parseInt(id) - 1;
			$("#main .think-tank-session .think-tank-s1-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-1 #speaker-"+id).removeClass('hidden').addClass('visible');	
		}
	});
	
	$("#main .think-tank-session.session-1 .arrow-next").bind('click', function(){
		if($("#main .think-tank-session.session-1 .think-tank-s1-speakers.visible").hasClass('last')){
			$("#main .think-tank-session.session-1 .think-tank-s1-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-1 .think-tank-s1-speakers.first").removeClass('hidden').addClass('visible');
		}else{
			var id = $("#main .think-tank-session.session-1 .think-tank-s1-speakers.visible").attr('id');
			id = id.substring(8);
			id = parseInt(id) + 1;
			$("#main .think-tank-session .think-tank-s1-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-1 #speaker-"+id).removeClass('hidden').addClass('visible');	
		}
	});
	
	$("#main .think-tank-session.session-2 .arrow-prev").bind('click', function(){
		if($("#main .think-tank-session.session-2 .think-tank-s2-speakers.visible").hasClass('first')){
			$("#main .think-tank-session.session-2 .think-tank-s2-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-2 .think-tank-s2-speakers.last").removeClass('hidden').addClass('visible');
		}else{
			var id = $("#main .think-tank-session.session-2 .think-tank-s2-speakers.visible").attr('id');
			id = id.substring(8);
			id = parseInt(id) - 1;
			$("#main .think-tank-session .think-tank-s2-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-2 #speaker-"+id).removeClass('hidden').addClass('visible');	
		}
	});
	
	$("#main .think-tank-session.session-2 .arrow-next").bind('click', function(){
		if($("#main .think-tank-session.session-2 .think-tank-s2-speakers.visible").hasClass('last')){
			$("#main .think-tank-session.session-2 .think-tank-s2-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-2 .think-tank-s2-speakers.first").removeClass('hidden').addClass('visible');
		}else{
			var id = $("#main .think-tank-session.session-2 .think-tank-s2-speakers.visible").attr('id');
			id = id.substring(8);
			id = parseInt(id) + 1;
			$("#main .think-tank-session .think-tank-s2-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-2 #speaker-"+id).removeClass('hidden').addClass('visible');	
		}
	});
	
	$("#main .think-tank-session.session-3 .arrow-prev").bind('click', function(){
		if($("#main .think-tank-session.session-3 .think-tank-s3-speakers.visible").hasClass('first')){
			$("#main .think-tank-session.session-3 .think-tank-s3-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-3 .think-tank-s3-speakers.last").removeClass('hidden').addClass('visible');
		}else{
			var id = $("#main .think-tank-session.session-3 .think-tank-s3-speakers.visible").attr('id');
			id = id.substring(8);
			id = parseInt(id) - 1;
			$("#main .think-tank-session .think-tank-s3-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-3 #speaker-"+id).removeClass('hidden').addClass('visible');	
		}
	});
	
	$("#main .think-tank-session.session-3 .arrow-next").bind('click', function(){
		if($("#main .think-tank-session.session-3 .think-tank-s3-speakers.visible").hasClass('last')){
			$("#main .think-tank-session.session-3 .think-tank-s3-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-3 .think-tank-s3-speakers.first").removeClass('hidden').addClass('visible');
		}else{
			var id = $("#main .think-tank-session.session-3 .think-tank-s3-speakers.visible").attr('id');
			id = id.substring(8);
			id = parseInt(id) + 1;
			$("#main .think-tank-session .think-tank-s3-speakers.visible").removeClass('visible').addClass('hidden');
			$("#main .think-tank-session.session-3 #speaker-"+id).removeClass('hidden').addClass('visible');	
		}
	});
	
	$("#sidebar-left ul.menu li a").each(function(index) {
    	var section = $(this).attr('href');
    	section = section.substring(1,2);
    	switch(section)
		{
case 's':
  $(this).addClass('studios');
  break;
case 't':
  $(this).addClass('thinktanks');
  break;
  case 'a':
  $(this).addClass('about');
  break;
  case 'p':
  $(this).addClass('people');
  break;
default:
  break;
		}
	});


});