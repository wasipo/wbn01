<!DOCTYPE html>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="edge" />
<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<title>
<?php if (is_front_page()) { ?>
<?php echo get_bloginfo('name'); ?>
<?php } else { ?>
<?php wp_title(' | ', true, 'right');?><?php echo get_bloginfo('name'); ?>
<?php } ?>
</title>
<meta name="keywords" content="" />
<meta name="description" content="<?php echo get_bloginfo('description'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:700|Lato:900|Anton' rel='stylesheet' type='text/css' />
<link rel='stylesheet' id='theme-css'  href='<?php echo get_template_directory_uri(); ?>/css/master.css' type='text/css' media='all' />
<?php wp_head(); ?>
</head>

<body <?php body_class("two-column right-sidebar"); ?>>
<div id="wrap"><!-- [ #headerTop ] -->
<div id="headerTop">
<div class="innerBox">
<div id="site-description"><?php echo get_bloginfo('description'); ?></div>
</div>
</div><!-- [ /#headerTop ] -->

<!-- [ #header ] -->
<div id="header">
<div id="headerInner" class="innerBox">
<!-- [ #headLogo ] -->
<h1 id="site-title">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>" rel="home">
<img src="<?php echo get_template_directory_uri(); ?>/images/head_logo.png" alt="<?php bloginfo('name'); ?>" />
</a>
</h1>
<!-- [ #headLogo ] -->

<!-- [ #headContact ] -->
<div id="headContact"><div id="headContactInner">
<div id="headContactTxt">お気軽にお問い合わせください。</div>
<div id="headContactTel">TEL 000-000-0000</div>
<div id="headContactTime">電話受付時間 10：00～19：00（土・日・祝日除く）</div>
</div></div><!-- [ /#headContact ] -->

</div>
<!-- #headerInner -->
</div>
<!-- [ /#header ] -->


<!-- [ #gMenu ] -->
<div id="gMenu" class="itemClose" onclick="showHide('gMenu');">
<div id="gMenuInner" class="innerBox">
<ul class="menu">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><strong>トップページ</strong><span>Home</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>service/"><strong>サービス案内</strong><span>Service</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/"><strong>会社案内</strong><span>Company</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>information/"><strong>お知らせ</strong><span>Information</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/"><strong>お問い合わせ</strong><span>Contact</span></a></li>
</ul></div>
<!-- [ /#gMenuInner ] -->
</div>
<!-- [ /#gMenu ] -->