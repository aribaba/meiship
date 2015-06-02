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

<footer id="Footer">
	<div id="footerWrap">
	<div id="footerContents">
	<ul id="footerNav" class="ClearFix">
		<li class="twitter social"><a href="" title=""></a></li>
		<li class="facebook social"><a href="" title=""></a></li>
		<li id="info" class="m-1c-light">メイシップについて</li>
		<li id="privacyPoricy" class="m-1c-light">プライバシーポリシー</li>
		<li id="FAQ" class="m-1c-light">問い合わせ・FAQ</li>
	</ul>
	</div>
	</div>
	<div id="copyWrite">
	<p>© 2015 meiship All Rights Reserved.</p>
</div>

</footer>


</div><!--/#container-->
</div><!-- #wrap-->

<?php get_footer(); ?>
