<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
  <head>
    
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <!--[if lte IE 6]><link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path . path_to_theme(); ?>/css/ie6.css" /><![endif]-->
    <!--[if IE 7]><link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path . path_to_theme(); ?>/css/ie7.css" /><![endif]-->
    <!--[if IE 8]><link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path . path_to_theme(); ?>/css/ie8.css" /><![endif]-->
    <?php print $scripts; ?>
  </head>

  <body class="<?php print $body_classes; ?>">
    <div id="bg">
    	<img src="<?php print $theme_path; ?>/images/bg.jpg" alt="">
    </div>
    <div id="skip">
      <a href="#content"><?php print t('Skip to Content'); ?></a>
      <?php if (!empty($primary_links) || !empty($secondary_links)): ?>
        <a href="#navigation"><?php print t('Skip to Navigation'); ?></a>
      <?php endif; ?>
    </div>
    
    <div class="wrapper">
    <!-- ______________________ HEADER _______________________ -->

    <div id="header">
        <?php if (!empty($logo)): ?>
          <a href="<?php print $front_page; ?>" class="logo" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
          </a>
        <?php endif; ?>
        
        <?php print $header; ?>
    </div> <!-- /header -->
    
     <!-- ______________________ NAVIGATION _______________________ -->
     <?php if (!empty($navigation)): ?>
         <div><?php print $navigation; ?></div><!--/navigation-->
     <?php endif; ?>
     
    <!-- ______________________ MAIN _______________________ -->

    <div id="main" class="clearfix">
    
      <div id="content">
        <div id="content-inner" class="inner column center">

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

          <?php if ($breadcrumb || $title || $mission || $messages || $help || $tabs): ?>
            <div id="content-header">
              
              <?php if ($breadcrumb): ?>
                <div id="breadcrumb"><?php print $breadcrumb; ?></div>
              <?php endif; ?>

              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?> 

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <?php print $content; ?>
          </div> <!-- /#content-area -->

          <?php print $feed_icons; ?>

          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>

          </div>
        </div> <!-- /content-inner /content -->

        <?php if ($left): ?>
          <div id="sidebar-first" class="column sidebar first">
            <div id="sidebar-first-inner" class="inner">
              <?php print $left; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-left -->

        <?php if ($right): ?>
          <div id="sidebar-second" class="column sidebar second">
            <div id="sidebar-second-inner" class="inner">
              <?php print $right; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-second -->

      </div> <!-- /main -->

      <!-- ______________________ FOOTER _______________________ -->

      <div id="footer">
        <?php print $footer_message; ?>
        <?php print $footer_block; ?>

        <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
      </div> <!-- /footer -->

    </div> <!-- /page -->
    <?php print $closure; ?>
  </body>
</html>
