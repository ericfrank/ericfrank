<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/build/production.css?<?php echo filemtime($_SERVER['DOCUMENT_ROOT'].'/css/build/production.css'); ?>"  />
    <link rel="shortcut icon" href="/favicon.ico" />

    <title><?php
    if(is_front_page()) {
        echo bloginfo('name');
    } else {
        echo wp_title("",true),' | ',bloginfo('name');
    }
    ?></title>

    <!-- TypeKit -->
    <script type="text/javascript" src="//use.typekit.net/wbq7cpj.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?>

    <!-- Google Analytics -->
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-7424650-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>

<body <?php body_class(); ?>>
    <div class="container">
