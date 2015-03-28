<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
  <?php global $page, $paged;
if (is_search()):
wp_title('', true, 'left' );
echo ' | ';
else:
  wp_title('|', true ,'right' );
endif;
bloginfo('name');
if (is_front_page()) :
echo " | ";
bloginfo('description');
endif;
if ($paged >= 2 || $page >= 2) :
echo ' | ' . sprintf('%sページ',
  max($paged,$page));
  endif;
  ?>
</title>
<meta charset="utf-8">
<meta name="description" content="meiship">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/verticalPageScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.js"></script>
<!-- <script src="<?php bloginfo('template_url'); ?>/js/scrollHeader.js"></script> -->


<link rel="shortcut icon" href="">
	<?php wp_head(); ?>
</head>
	<body>

		<div id="Wrap">
		<header id="header" class="ClearFix">
			<div id="siteLogoField">
				<img id="logo" src="<?php bloginfo('template_url'); ?>/images/Header/headerLogo71x60.png" alt="">
				
					<img id="meiship" src="<?php bloginfo('template_url'); ?>/images/Header/headerLogoMeishipGreen.png" alt="">		
					
				
			</div><!-- /siteLogoField -->
			<span id="subDesc">オーダメイド名刺であなたの印象をデザインする</span>
			
		</header><!-- /header -->
