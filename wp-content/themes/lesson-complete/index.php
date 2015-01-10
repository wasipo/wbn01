<?php get_header(); ?>

<!-- [ #pageTitBnr ] -->
<div id="pageTitBnr">
	<div class="innerBox">
	<div id="pageTitInner">
			<div id="pageTit">お知らせ</div>
	</div><!-- [ /#pageTitInner ] -->
	</div>
</div>
<!-- [ /#pageTitBnr ] -->

<!-- [ #panList ] -->
<div id="panList">
<div id="panListInner" class="innerBox">
<ul>
<li id="panHome"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a> &raquo; </li>
<?php if ( is_category() ) { ?>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>information">お知らせ</a> &raquo; </li>
	<li><?php single_cat_title(); ?></li>
<?php } else if ( is_archive() ) { ?>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>information">お知らせ</a> &raquo; </li>
	<li><?php echo esc_html( get_the_date('Y年m月') ); ?></li>
<?php } else { ?>
	<li>お知らせ</li>
<?php } ?>
</ul>
</div>
</div>
<!-- [ /#panList ] -->

<div id="main">

<!-- [ #container ] -->
<div id="container" class="innerBox">

<!-- [ #content ] -->
<div id="content">
<div class="infoList">

<?php if ( is_category() ) { ?>
<h2><?php single_cat_title(); ?></h2>
<?php } else if ( is_archive() ) { ?>
<h2><?php echo esc_html( get_the_date('Y年m月') ); ?></h2>
<?php } ?>

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

</div><!-- [ /.infoList ] -->
</div>
<!-- [ /#content ] -->

<!-- [ #sideTower ] -->
<div id="sideTower">

	<!-- [ .localSection ] -->
	<div class="localSection sideWidget">

	<div class="localNaviBox">
	<h3 class="localHead">カテゴリー</h3>
	<ul class="localNavi">
	<?php wp_list_categories('title_li='); ?>
	</ul>
	</div>
	</div>

	<div class="localSection sideWidget">
	<div class="localNaviBox">
	<h3 class="localHead">アーカイブ</h3>
	<ul class="localNavi">
	<?php wp_get_archives('type=monthly'); ?>
	</ul>
	</div>

	</div>
	<!-- [ .localSection ] -->

	<!-- [ 共通サイドバーアイテム ] -->
	<?php get_sidebar(); ?>
	<!-- [ /共通サイドバーアイテム ] -->
</div>
<!-- [ /#sideTower ] -->
</div>
<!-- [ /#container ] -->

</div><!-- #main -->

<?php get_footer(); ?>