<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.typekit.net/pjy3pqi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> data-barba="wrapper">
  <div data-scroll-container>
  <div class="page-cover"></div>
  <div id="barba-container" data-barba="container">
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <?php echo \Roots\view(\Roots\app('sage.view'), \Roots\app('sage.data'))->render(); ?>


    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
    </div>
    </div>
  </body>
</html>
