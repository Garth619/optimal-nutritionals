<?php
/**
* Template Name: Main

 */

get_header(); ?>




<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>


<?php if (strpos($url,'ubiquinol') !== false) {?>
   
   
   ubiquinol content


<?php } ?>







<?php if (strpos($url,'krill-oil') !== false) {?>
   
   
   Krill Oil content


<?php } ?>
















	

<?php get_footer(); ?>
