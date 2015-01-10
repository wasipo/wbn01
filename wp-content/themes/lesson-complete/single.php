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
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/information/">お知らせ</a> &raquo; </li>
		<li><?php the_category(' ') ?> &raquo; </li>
		<li><?php the_title(); ?></li>
		</ul>
		</div>
</div>
<!-- [ /#panList ] -->
<div id="main">

		<!-- [ #container ] -->
		<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="content"> <!-- [ #post- ] -->
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1 class="entryPostTitle"><?php the_title(); ?></h1>
		<div class="entry-meta">
		投稿日：<?php the_date(); ?> | カテゴリー：<?php the_category(' ') ?>
		</div><!-- .entry-meta -->

		<div class="entry-content post-content">
		<!-- [ 投稿本文 ] -->
			<?php the_content(); ?>
		<!-- [ / 投稿本文 ] -->
		</div><!-- .entry-content -->
		<?php endwhile; ?>
</div>
<!-- [ /#content ] -->

<!-- [ #sideTower ] -->
<div id="sideTower">

	<!-- [ お知らせ用サイドバーアイテム ] -->
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
	<!-- [ /お知らせ用サイドバーアイテム ] -->

	<!-- [ 共通サイドバーアイテム ] -->
	<?php get_sidebar(); ?>
	<!-- [ /共通サイドバーアイテム ] -->
</div>
<!-- [ /#sideTower ] -->
</div>
<!-- [ /#container ] -->

</div><!-- #main -->

<?php get_footer(); ?>