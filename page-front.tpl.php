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

  <!--<img id="body-image" src="<?php print $path;?>images/Pictures/inukshuk.png" alt="" />-->


<!-- Start page layout, front page -->
<!-- Header -->
<div class="container" id="top-container">
  <div class="span-24 last">
    <div id="top" class="span-24 last">
    <img src="<?php print $path; ?>images/inuitsopensource.png" alt="" />
      <div class="span-4" id="nav-1">
        <ul>
          <li>
            <a href="/">news</a>
          </li>
          <li>
            <a href="/content/vision">vision</a>
          </li>
          <li>
            <a href="/content/believers">believers</a>
          </li>
        </ul>
      </div>
      <div class="span-4" id="nav-2">
        <ul>
          <li>
            <a href="/content/people">people</a>
          </li>
          <li>
            <a href="/content/jobs">jobs</a>
          </li>
          <li>
            <a href="/content/contact">contact</a>
          </li>
        </ul>
      </div>
      <div class="span-4" id="nav-3">
        <ul>
          <li>
            <a href="/aggregator/sources/1/">planet</a>
          </li>
          <li>
            <a href="/content/rolling-out-open-source-masses">benefits</a>
          </li>
        </ul>
      </div>
      <div id="primary-links">
      <?php print theme('links',$primary_links);?>
      </div>
    </div>
  </div>
</div>

<!-- Main content -->
<div class="container" id="main">

<!-- Navigation, image based menu, links not in drupal !!! -->
    <div class="span-12">
      <div class="why whyborder">
        <?php if($top_left):?>      
        <?php print $top_left;?>
        <?php endif;?>
      </div>
    </div>
    <div class="span-6" id="who">
      <?php if($top_middle):?>
      <?php print $top_middle;?>
      <?php endif;?>
    </div>
    <div class="span-6 last" id="where">
      <?php if($top_right):?>
      <?php print $top_right;?>
      <?php endif;?>  
    </div>
    <div class="span-16">
      <?php if($news):?>
      <?php print $news;?>
      <?php endif;?>
    </div>
    <div class="span-8 last">
      <?php if($customers):?>
      <?php print $customers;?>
      <?php endif;?>
    </div>
    
    <div class="span-12">
      <div id="planet-inuits">
        <?php if($bottom_content_left):?>
        <?php print $bottom_content_left;?>
        <?php endif;?>
      </div>
    </div>
    <div class="span-12 last" id="presentations">
      <?php if($bottom_content_right):?>
      <?php print $bottom_content_right;?>
      <?php endif;?>
    </div>
    <div class="span-6" id="twitter">
      <?php if($bottom):?>
      <?php print $bottom;?>
      <?php endif;?>
    </div>
    <div class="span-18 last" id="cloud">
      <?php if($cloud):?>
      <?php print $cloud;?>
      <?php endif;?>
    </div>

       
    </div>
    <div id="full-width-footer-1">
      <div class="container" id="footer-links">
          <div class="span-8" id="footer-links-people">
            <?php if($people):?>
            <?php print $people;?>
            <?php endif;?>
          </div>
          <div class="span-8" id="footer-links-explore">
            <?php if($explore):?>
            <?php print $explore;?>
            <?php endif;?>
          </div>
          <div class="span-8 last" id="footer-links-info">
            <?php if($info):?>
            <?php print $info;?>
            <?php endif;?>
          </div>
      </div>
    </div>
    <div id="full-width-footer-2">
    <div class="container" >
      <div class="span-24 footer-border last">

          <div id="copyright">
            Copyright - 2009 -<strong> Inuits.be</strong>
          </div>
          <div id="secondary-links">
            <?php if($secondary_links):?>
            <?php print theme('links', $secondary_links);?>
            <?php endif;?>
          </div>

      </div>    
    </div>
    </div>
 
 <?php print $closure;?>

</body>
</html>
