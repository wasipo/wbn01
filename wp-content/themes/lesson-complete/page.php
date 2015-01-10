<?php get_header(); ?>

<div id="pageTitBnr">
		<div class="innerBox">
		<div id="pageTitInner">
				<div id="pageTit"><?php the_title(); ?></div>
		</div><!-- [ /#pageTitInner ] -->
		</div>
</div><!-- [ /#pageTitBnr ] -->
<!-- [ #panList ] -->
<div id="panList">
		<div id="panListInner" class="innerBox">
		<ul><li id="panHome"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a> &raquo; </li><li><?php the_title(); ?></li></ul></div>
</div>
<!-- [ /#panList ] -->
<div id="main">

<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	</div>
	<!-- [ /#content ] -->

<!-- [ #sideTower ] -->
<div id="sideTower">
<!-- [ 共通サイドバーアイテム ] -->
<?php get_sidebar(); ?>
<!-- [ /共通サイドバーアイテム ] -->
</div>
<!-- [ /#sideTower ] -->
</div>
<!-- [ /#container ] -->

</div><!-- #main -->

<?php get_footer(); ?>