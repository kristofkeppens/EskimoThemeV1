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

<!-- Header -->
<div class="container" id="top-container">
  <div class="span-24 last" id="top">
    <img src="<?php print $path; ?>images/inuitsopensource.png" alt="" width=350px />
      <div class="span-4" id="nav-1">
        <ul>
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/blog">News</a>
          </li>
          <li>
            <a href="/content/vision">Vision</a>
          </li>
        </ul>
      </div>
      <div class="span-4" id="nav-2">
        <ul>
          <li>
            <a href="/content/believers">Believers</a>
          </li>
          <li>
            <a href="/content/people">People</a>
          </li>
          <li>
            <a href="/content/jobs">Jobs</a>
          </li>
        </ul>
      </div>
      <div class="span-4" id="nav-3">
        <ul>
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

<!-- Main content -->
<div class="container" id="main">
    

    <div class="span-18" id="content">
      <div class="bordercontent">
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
    <div class="span-6 last ">
      <?php print $right; ?>
    </div>
    <div class="clear"></div>     

       
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