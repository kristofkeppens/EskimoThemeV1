<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="content-language" content="<?php print $language->language ?>" />
  <?php print $meta; ?>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts;?>
  <link rel="stylesheet" href="/inuitsbeta/sites/all/themes/eskimo1/style/blueprint.css" type="text/css" media="screen, projection">
  <link rel="stylesheet" href="/inuitsbeta/sites/all/themes/eskimo1/style/style.css" type="text/css" media="screen, projection">

  
  <!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php print $path; ?>blueprint/ie.css" type="text/css" media="screen, projection">
    <link href="<?php print $path; ?>css/ie.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->  
  <!--[if lte IE 6]>
    <link href="<?php print $path; ?>css/ie6.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->  
</head>

<body id="body" class="<?php print $body_classes;?>">
<!-- Set background image, full page rescalable with js -->

  <img id="body-image" src="/sites/all/themes/eskimo1/images/Pictures/inukshuk.png" alt="" />


<!-- Start page layout, front page -->

<!-- Header -->
<div class="container" id="top-container">
  <div class="span-24 last">
    <div id="top" class="span-24 last">
    <img src="/sites/all/themes/eskimo1/images/inuitsopensource.png" alt="" />
      <div id="primary-links">
      <?php print theme('links',$primary_links);?>
      </div>
    </div>
  </div>
</div>

<!-- Main content -->
<div class="container" id="main">

<!-- Navigation, image based menu, links not in drupal !!! -->
    <div class="span-4">
     <div id="nav">
    <ul>
      <li>
        <a id="news" href="/">news</a>
      </li>
      <li>
        <a id="vision" href="/content/vision">vision</a>
      </li>
      <li>
        <a id="believers" href="/content/believers">believers</a>
      </li>
      <li>
        <a id="people" href="/content/people">people</a>
      </li>
      <li>
        <a id="jobs" href="/content/jobs">jobs</a>
      </li>
      <li>
        <a id="contact" href="/content/contact">contact</a>
      </li>
      <li>
        <a id="planet" href="/aggregator/sources/1/">planet</a>
      </li>
      <li>
        <a id="benefits" href="/content/rolling-out-open-source-masses">benefits</a>
      </li>
    </ul>
    </div>
    </div>
    
    <div class="span-8">
      <div class="why whyborder">      
        <?php print $top_left;?>
      </div>
    </div>
    <div class="span-6" id="who"><?php print $top_middle;?></div>
    <div class="span-6 last" id="where"><?php print $top_right;?></div>

    <div class="span-20 last" id="content-front">
      <div id="inner-content">
        <?php
      if ($breadcrumb != '') {
        print $breadcrumb;
      }

      if ($tabs != '') {
        print '<div class="tabs">'. $tabs .'</div>';
      }

      if ($messages != '') {
        print '<div id="messages">'. $messages .'</div>';
      }
      
      if ($title != '') {
        print '<h2 class="title">'. $title .'</h2>';
      }      

      print $help; // Drupal already wraps this one in a class      

      print $content;
    ?>
    </div>  
    </div>
    <div class="span-10" id="planet-inuits">
      <div class="planet-inuits-border">
        <?php print $bottom_content_left;?>
      </div>
    </div>
    <div class="span-10 last" id="presentations"><?php print $bottom_content_right;?></div>
    <div class="span-20 last" id="twitter"><?php print $bottom;?></div>

       
    </div>
    <div class="container">
      <div class="span-24 footer-border last">

          <div id="copyright">
            Copyright - 2009 -<strong> Inuits.be</strong>
          </div>
          <div id="secondary-links">
            <?php print theme('links', $secondary_links);?>
          </div>

      </div>    
    </div>
 
 <?php print $closure;?>

</body>
</html>
