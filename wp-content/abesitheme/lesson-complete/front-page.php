<?php get_header(); ?>

<div id="topMainBnr">
		<div id="topMainBnrFrame" class="flexslider">
				<ul class="slides">
						<li><span class="slideFrame"><img src="<?php echo get_template_directory_uri(); ?>/images/topVisual.jpg" alt="" /></span></li>
						</ul>
				</div>
</div>
<div id="main">
		
<!-- [ #container ] -->
<div id="container" class="innerBox">

<!-- [ #content ] -->
<div id="content"> <!-- [ #topPr ] -->
<div id="topPr">
		<div id="topPrLeft" class="topPrOuter">
		<div class="topPrInner">
		<h3 class="topPrTit"><a href="/service/">サービス案内</a></h3>
				<div class="topPrTxtBox">
						<p class="topPrDescription"><a href="/service/">無料で使えるWordPressビジネステンプレート「BizVektor」の特徴をご紹介しています。</a></p>
						<div class="moreLink"><a href="/service/">詳しくはこちら</a></div>
		</div>
		</div>
		</div><!-- /#topPrLeft -->
		
		<div id="topPrCenter" class="topPrOuter">
		<div class="topPrInner">
		<h3 class="topPrTit"><a href="/company/">会社概要</a></h3>
				<div class="topPrTxtBox">
						<p class="topPrDescription"><a href="/company/">ただ今BizVektor株式会社では一緒に働く仲間を募集しています。沢山のご応募をお待ちしています。</a></p>
						<div class="moreLink"><a href="/company/">詳しくはこちら</a></div>
		</div>
		</div>
		</div><!-- /#topPrCenter -->
		
		<div id="topPrRight" class="topPrOuter">
		<div class="topPrInner">
		<h3 class="topPrTit"><a href="/contact/">お問い合わせ</a></h3>
				<div class="topPrTxtBox">
						<p class="topPrDescription">
								<a href="/contact/">弊社サービスや採用に関するお問い合わせやご質問などお気軽にご連絡下さい。</a></p>
						<div class="moreLink"><a href="/contact/">詳しくはこちら</a></div>
		</div>
		</div>
		</div><!-- /#topPrRight -->
</div>
<!-- [ #topPr ] -->

<div id="topInfo" class="infoList">

	<h2>お知らせ</h2>

	<?php $wp_query = new WP_Query( array( 'post_type' => 'post' ) ); ?>

	<ul class="entryList">
		<?php if(have_posts()) { ?>
		<?php while(have_posts()): the_post(); ?>
		<!-- [ お知らせ（投稿）1件分 ] -->
		<li>
		<span class="infoDate"><?php the_date(); ?></span>
		<span class="infoCate"><?php the_category(' ') ?></span>
		<span class="infoTxt"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></span>
		</li>
		<!-- [ / お知らせ（投稿）1件分 ] -->
		<?php endwhile; ?>
		<?php } ?>
	</ul>

	<?php wp_reset_query();?>

</div><!-- [ /#topInfo ] -->

	</div>
	<!-- [ /#content ] -->
	
	<!-- [ #sideTower ] -->
	<div id="sideTower">
	<?php get_sidebar(); ?>
	</div>
	<!-- [ /#sideTower ] -->
</div>
<!-- [ /#container ] -->

</div><!-- #main -->

<?php get_footer(); ?>