<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="container">

<section id="top" class="stageBase">
		<div id="dammyHeader" class="ClearFix">
			<div id="siteLogoField">
				<img id="logo" src="<?php bloginfo('template_url'); ?>/images/Header/headerLogo71x60.png" alt="">
				
					<img id="meiship" src="<?php bloginfo('template_url'); ?>/images/Header/headerLogoMeishipWhite.png" alt="">		
					
				
			</div><!-- /siteLogoField -->
			<span id="subDesc">オーダメイド名刺であなたの印象をデザインする</span>
			
		</div><!-- /header -->
	<?php include('frontPageFile/entrance.php'); ?>
</section>


<section id="stage2" class="stageBase forBeginner_1 headerChange">
	<?php include('frontPageFile/forBeginner1.php'); ?>
</section>

<section id="stage3" class="stageBase forBeginner_2">
	<?php include('frontPageFile/forBeginner2.php'); ?>
</section>

<section id="stage4" class="stageBase orderFlow">
	<?php include('frontPageFile/orderFlow.php'); ?>
</section>

<section id="stage5" class="stageBase plice">
	<?php include('frontPageFile/pliceTable.php'); ?>
</section>

<section id="stage6" class="stageBase order">
	<?php include('frontPageFile/order.php'); ?>
</section>

</div><!--/#container-->
</div><!-- #wrap-->

<?php get_footer(); ?>
