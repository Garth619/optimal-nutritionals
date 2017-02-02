<?php
/**
* Template Name: Product

 */

get_header(); ?>



						
			
			
		<section class="top_wrapper">
	
	
	<div class="container">
	
	
	<div class="inner_top">
		
		
		
		<span class="optimal_title">Optimal Nutritionals</span><!-- optimal_title -->
		
		<div class="product_title_wrapper">

			
			   
			 <h1 class="product_title"><?php the_field('product_title');?></h1>
			 
			 
			 
			 <span class="large_description"><?php the_field('product_subtitle');?></span><!-- large_description -->
			 <span class="sub_description"><?php the_field('product_sub_description');?></span><!-- sub_description -->
			 <span class="sub_description"><?php the_field('product_sub_description_two');?></span><!-- sub_description -->
			
					
			
		</div><!-- product_title_wrapper -->
		
		<div class="top_image_wrapper">
			
			<img src="<?php bloginfo('template_directory');?>/images/woman.png"/>
			
		</div><!-- top_image_wrapper -->
		
		<div style="clear:both"></div>
		
	</div><!-- inner_top -->
	

		<a href="<?php the_field('buy_now_link');?>" target="_blank">
				<img class="product_image" src="<?php the_field('product_image');?>"/>
			</a>   
			 
			

		<div id="myform" class="form_wrapper">
	
	<span class="subheader">LEARN MORE ToDAY!</span>
	<a class="tel" href="tel:"><?php the_field('phone_number');?></a>
	
	<?php gravity_form(1, false, false, false, '', true, 12); ?>
	

	
</div><!-- form_wrapper -->






<div style="clear:both"></div>

</div><!-- container -->
	
	
	
	<div class="purple_bar"></div><!-- purple_bar -->
	
	
</section><!-- top_wrapper-->


<section class="why">
	
	<h2><?php the_field('why_section_title');?></h2>
	
			 <span class="yellowline"></span><!-- yellowline -->
	
			 <div class="why_content">
	
			 	<?php the_field('why_section_content');?>
		
			 	<a href="<?php the_field('buy_now_link');?>" target="_blank">
			 	<img class="buy_now" src="<?php bloginfo('template_directory');?>/images/buynow.png"/>
			</a>

 
 </div><!-- why_content -->
	
</section><!-- why -->

<section class="benefits">
	
	
	<h2><?php the_field('benefits_title');?></h2>
	
	<span class="description"><?php the_field('benefits_description');?></span><!-- description -->
	
	
	<div class="benefits_container">
	
	<div class="girl_wrapper">
	
		<img src="<?php bloginfo('template_directory');?>/images/girl.png"/>
	
	</div><!-- girl_wrapper -->
	
	<div class="benefits_wrapper">
		
		<?php if(get_field('benefits')): ?>
		 
			<?php while(has_sub_field('benefits')): ?>
		 
				
				<div class="single_benefit">
			
					<div class="benefit_img">
						
						
						<?php $benefitsimg = wp_get_attachment_image_src(get_sub_field('image'), 'benefitthumb'); ?>
            
            <img src="<?php echo $benefitsimg[0]; ?>"/>
						
						
					</div><!-- benefit_img -->
			
			
					<div class="benefit_content">
				
						<?php the_sub_field('add_description');?>
				
					</div><!-- benefit_content -->
		
				</div><!-- single_benefit -->
				
				
			<?php endwhile; ?>
		 
		<?php endif; ?>

		</div><!-- benfits_wrapper -->
	
	</div><!-- benefits_container -->
	
</section><!-- benefits -->


<section class="testimonials">
	
	<h2><?php the_field('testimonial_1_name');?></h2>
	
	<span class="yellowline"></span><!-- yellowline -->
	

	<div class="testimonials_wrapper">
		
		
		<div class="single_testimonial">
			
			<div class="testimonial_profile">
			
				<img class="real_people" src="<?php bloginfo('template_directory');?>/images/real_people.png"/>
			
				<?php $profile = wp_get_attachment_image_src(get_field('testimonial_1_image'), 'testimonialprofile'); ?>
            
        <img class="testimonial_pic" src="<?php echo $profile[0]; ?>"/>
				

				<span class="name"><?php the_field('testimonial_1_name');?></span><!-- name -->
			
			</div><!-- testimonial_profile -->
			
			<div class="testimonial_content">
				
				<p><?php the_field('testimominal_1_content');?></p>
				
				
			</div><!-- testimonial_content -->
			
		</div><!-- single_testimonial -->
		
		
		<div class="single_testimonial">
			
			<div class="testimonial_profile">
			
				<img class="real_results" src="<?php bloginfo('template_directory');?>/images/real-results.png"/>
			
				<?php $profile = wp_get_attachment_image_src(get_field('testimonial_2_image'), 'testimonialprofile'); ?>
            
        <img class="testimonial_pic" src="<?php echo $profile[0]; ?>"/>
				
				<span class="name"><?php the_field('testimonial_2_name');?></span><!-- name -->
			
			</div><!-- testimonial_profile -->
			
			<div class="testimonial_content">
				
				<p><?php the_field('testimominal_2_content');?></p>
				
				
			</div><!-- testimonial_content -->
			
		</div><!-- single_testimonial -->
		
		
	</div><!-- testimonials_wrapper -->
	
</section><!-- testimonials -->



<section class="buy_now_section">
	
	
	<div class="buy_now_container">
	
	<div class="content">
		
		<span class="sub_header"><?php the_field('buy_now_banner_sub_header');?></span>
		<span class="large_header"><?php the_field('buy_now_banner_large_header');?></span>
		
		<a href="<?php the_field('buy_now_link');?>" target="_blank">
			<img class="buy_now" src="<?php bloginfo('template_directory');?>/images/buynow.png"/>
		</a>
		
	</div><!-- content -->

	<a href="<?php the_field('buy_now_link');?>" target="_blank">
	
	<img class="buy_now_product_image" src="<?php bloginfo('template_directory');?>/images/bottle.png"/><!-- product_image -->
	
	</a>
	
	</div><!-- buy_now_container -->

</section><!-- buy_now_section -->


<section  class="other_products">
	
	<h2><?php the_field('see_other_prducts_title');?></h2>
	<span class="yellowline"></span><!-- yellowline -->
	
	<div class="product_wrapper">
		
		
		<?php if(get_field('other_products')): ?>
		 
			<?php while(has_sub_field('other_products')): ?>
		 
				<?php the_sub_field('');?>
				
				<div class="single_product">
			
				<a href="<?php the_sub_field('other_product_link');?>" target="_blank">
				
					<img src="<?php the_sub_field('other_product_image');?>"/>
					<span class="product_title"><?php the_sub_field('other_product_title');?></span>
					<span class="product_subtitle"><?php the_sub_field('other_product_sub_title');?></span>
				
					<span class="buy_now_button">Buy Now</span><!-- buy_now_button -->
				
				</a>
			
		</div><!-- single_product -->

		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
		
	</div><!-- product_wrapper -->
	
	
	
</section><!-- other_products -->


<footer>
	<span><?php the_field('footer_disclaimer');?></span>
</footer>

<div class="mobile_bar">
	
	<a class="contact_us" href="#myform">Contact Us</a>
	<a class="footer_buy_now" href="<?php the_field('buy_now_link');?>" target="_blank">Buy Now</a>
	
</div><!-- mobile_bar -->


<?php get_footer(); ?>
