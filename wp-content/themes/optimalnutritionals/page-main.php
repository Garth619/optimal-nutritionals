<?php
/**
* Template Name: Main

 */

get_header(); ?>


<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>



			<?php if (strpos($url,'astaxanthin') !== false) {?>
			   
			 	<?php include('products/astaxanthin.php') ?>
			
			<?php } ?>		
						
			
			
			<?php if (strpos($url,'coenzyme') !== false) {?>
			   
			   <?php include('products/coenzyme.php') ?>

			<?php } ?>
			
			
			
			<?php if (strpos($url,'krill-oil') !== false) {?>
			   
			   <?php include('products/krill-oil.php') ?>
			 
			<?php } ?>
			
			
			
			<?php if (strpos($url,'ta-65') !== false) {?>
			   
			 	<?php include('products/ta-65.php') ?>
			
			<?php } ?>
			
			
			
			<?php if (strpos($url,'resveratrol') !== false) {?>
			   
			 	<?php include('products/resveratrol.php') ?>
			 
			<?php } ?>



<?php get_footer(); ?>
