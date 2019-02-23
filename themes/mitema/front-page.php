<?php get_header();
if (!is_home()):
    include('home-content.php');
else:
    include('loop.php');
endif;
get_footer();

 



