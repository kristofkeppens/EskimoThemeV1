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
<body class="<?php print $body_classes;?>">
<div class="container">
    <div id="top" class="span-24 last">
      <div id="primary-links">
      <?php print theme('links',$primary_links);?>
      </div>
    </div>
    <div id="header" class="span-24 last">
      <div class="span-4">
      <br />
      </div>
      
      <div class="span-20 last" id="logo">
      <div class="span-4" id="header-bottom-border"><br /></div>
        <div class="borderlogo">
          <h1 id="logo">
            
          </h1>          
        </div>      
      </div>
    </div>
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

    <div class="span-14" id="content">
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
        print '<h2>'. $title .'</h2>';
      }      

      print $help; // Drupal already wraps this one in a class      

      print $content;
    ?>
      </div>
    </div>
    <div class="span-6 last ">
    <div class="bordermenu">
      <?php print $right; ?>
    </div>
    </div>
    <div class="clear"></div>     

       
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