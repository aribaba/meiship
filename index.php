<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="container">

<section id="top" class="stageBase">
	<?php include('frontPageFile/entrance.php'); ?>
</section>


<section id="stage2" class="stageBase forBeginnerSection headerChange">
	<?php include('frontPageFile/forBeginner.php'); ?>
</section>

<section id="stage3" class="stageBase meishipIsSection">
	<?php include('frontPageFile/meishipIs.php'); ?>
</section>

<section id="stage4" class="stageBase orderFlow">
	<?php include('frontPageFile/orderFlow.php'); ?>
</section>

<section id="stage5" class="stageBase price">
	<?php include('frontPageFile/priceTable.php'); ?>
</section>

<section id="stage6" class="stageBase order">
	<?php include('frontPageFile/order.php'); ?>
</section>

</div><!--/#container-->
</div><!-- #wrap-->

<?php get_footer(); ?>
