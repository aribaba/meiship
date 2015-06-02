<?php
/*
Template Name: paperTypeArchive
*/
?>

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


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>


<link rel="shortcut icon" href="">
	<?php wp_head(); ?>
</head>
	<body id="outsideBody">

		<div id="Wrap">

		<header id="header" class="ClearFix">
			<a href="http://localhost:8888/kawakamiSite/#!page1" id="siteLogoField">
				<img id="logo" src="<?php bloginfo('template_url'); ?>/images/Header/headerLogo71x60.png" alt="">
				
					<img id="meiship" src="<?php bloginfo('template_url'); ?>/images/Header/headerLogoMeishipGreen.png" alt="">		
					
				
			</a><!-- /siteLogoField -->
			<span id="subDesc">オーダメイド名刺であなたの印象をデザインする</span>
			
		</header><!-- /header -->



    <section id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
     
     <div id="PTInfo">
     	<p>メイシップでは様々な種類の紙の印刷ができます。紙によって印象が大きく変わりますので、お好みの紙をお選び下さい。<br>
     また紙によって裏表の印刷差異の有無、べた塗り・写真の印刷適正がありますのでご注意ください。</p>
     </div>

     <div id="PTEx">
	  <div class="PTWrap ">
	  	<div class="PTHead">
	  	
	  	<p class="PTName">紙の種類</p>
	  	<ul class="PTOption">
	  		<li>白</li>
	  		<p>/</p>
	  		<li>無</li>
	  		<p>/</p>
	  		<li>◯</li>
	  	</ul>
	  	</div>
	  	<p class="PTDesc">
	  		説明
	  	</p>
	  </div>
	</div>

<!-- 変更した場所　開始 -->
<?php $args = array(
    'numberposts' => 30, //表示する記事の数
    'post_type' => 'paper_type' //投稿タイプ名
  ); 
  $customPosts = get_posts($args);
  if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
  ?>

  <div class="PTWrap">
  	<div class="PTHead">
  	
  	<p class="PTName"><?php echo post_custom('paper_type_name'); ?></p>
  	<ul class="PTOption">
  		<li><?php echo post_custom('color'); ?></li>
  		<p>/</p>
  		<li><?php echo post_custom('cover'); ?></li>
  		<p>/</p>
  		<li><?php echo post_custom('proper'); ?></li>
  	</ul>
  	</div>
  	<p class="PTDesc">
  		<?php echo post_custom('desc'); ?>
  	</p>
  </div>

  <?php endforeach; ?>
  <?php else : //記事が無い場合 ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif;
  wp_reset_postdata(); //クエリのリセット ?>
</ul>



        </div><!-- #content -->
    </section><!-- #primary -->

<?php get_footer(); ?>