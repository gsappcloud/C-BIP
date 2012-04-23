<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29153313-1']);
  _gaq.push(['_setDomainName', 'c-bip.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  
</head>

<?php
	$url = curPageURL();
    $start = strpos($url, "c-bip.org");
    $start = $start + 10;//for c-bip.org/
    $end = strpos($url, '/', $start);
      		
    if($end){
      $len = $end - $start;
      $x = strrpos($url, '/');
      $backurl = "http://" . substr($url, 0, $x);
    }else{
      $len = strlen($url) - $start;
      $backurl = "http://www.c-bip.org";
    }
    
    $section = substr($url, $start, $len);
    $home = false;
    $subsection = '';
    
    if($section == "studios"){
    	$startsub = $start + $len;
    	$idxsub = strpos($url, '/', $startsub+1);
    	if(!$idxsub){
    		$lensub = strlen($url) - $startsub;
    	}else{
    		$lensub = $idxsub - $startsub;
    	}
    	$subsection = substr($url, $startsub+1, $lensub-1);
    }
    /*$subsection = false; get rid of this line to use this function for highlighting active page*/
?>

<body class="<?php print $body_classes; 
	if($section){ print " section-" . $section; }
	if($subsection){ print " subsection-" . $subsection; }
?>">

  <div id="container" class="clearfix">

    <header id="header" role="banner" class="clearfix">
    	<div id="headertop">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      
      <?php
			function curPageURL() {
 				$pageURL = '';
 				if ($_SERVER["SERVER_PORT"] != "80") {
  					$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 				} else {
  					$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 				}
 				return $pageURL;
			}
		?>
      
      <div id="headersection">
      <?php 
      		
      		switch($section){
      			case 'studios':
      				print '<img src="/sites/default/files/assets/studiosheader_color.png" />';
      				break;
      			case 'people':
      				print '<img src="/sites/default/files/assets/peopleheader_color.png" />';
      				break;
      			case 'think-tanks':
      				print '<img src="/sites/default/files/assets/thinktankheader_color.png" />';
      				break;
      			case 'about':
      				print '<img src="/sites/default/files/assets/aboutheader_color.png" />';
      				break;
      			case 'user': //for login page, don't display diagram
      				break;
      			default:
      				$home = true;
      				break;
      		}
      		
      		print '</div> <!-- #headersection -->';
      		print '</div> <!-- #headertop -->';
      		print '<img id="oldcastle" src="/sites/default/files/assets/oldcastle.gif" />';
      
      		if ($search_box){ print $search_box; }
      		print $header; //secondary links
      ?>

    
    
    <?php
    	if ($home){
      			print '<div id="diagram" class="clearfix"><img src="/sites/default/files/assets/cbip-diagram940x113.gif" /></div>';
      		}
    ?>
    
    </header> <!-- /#header -->

    
    <div id="wrapper" class="clearfix">
    
    <?php
    	if(!$home){
      			print '<div id="homecontainer" class="clearfix"><a id="home" href="/">HOME</a></div>';
      		}
    ?>

    <section id="main" role="main" class="clearfix">
      <?php if (!empty($messages)): print $messages; endif; ?>
      <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php /*
      if (!$home && !empty($title)): ?><h1 class="title" id="page-title"><?php print $title ?></h1><?php endif;
      	*/
      ?>
      <?php if (!empty($tabs)): ?><div class="tabs-wrapper clearfix"><?php print $tabs; ?></div><?php endif; ?>
      <?php if (!empty($help)): print $help; endif; ?>
      <?php print $content; ?>
    </section> <!-- /#main -->

    

    

    

    
    
    </div> <!-- /#wrapper -->
    
    <?php if (!empty($left)): ?>
      <aside id="sidebar-left" role="complementary" class="sidebar clearfix <?php print $section; ?>">
        <?php print $left; ?>
      </aside> <!-- /sidebar-left -->
    <?php endif; ?>
    
    <?php if (!empty($right)): ?>
      <aside id="sidebar-right" role="complementary" class="sidebar clearfix">
        <?php print $right; ?>
      </aside> <!-- /sidebar-right -->
    <?php endif; ?>
    
    <footer id="footer" role="contentinfo" class="clearfix">
      <?php print $footer_message; ?>
      <?php if (!empty($footer)): print $footer; endif; ?>
      <?php print $feed_icons ?>
    </footer> <!-- /#footer -->
    
    <?php print $closure ?>

  </div> <!-- /#container -->

</body>
</html>