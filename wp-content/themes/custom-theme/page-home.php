<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
  <section class="content">
	<div style="width: 100%;margin: 0px;padding: 0px;">
	  <div class="left-side" style="padding: 0px;">
	    <section class="ribbon">
		    <div class="col-md-12 left" style="padding: 0px;margin: 0px;">
		    	<div class="bg-1" style="background-color: #be0a2f;margin: 0px;padding: 0px;padding-top: 20px;">
		    		<span class="footnote center">Wine Cellar Design</span>
		    		<br/>
		    		<span class="footnote-2">3D Drawing <br/> Request</span>
		    		<br/>
		    		<span class="footnote center">We will create a unique <br/>design just for you!</span>
		    		<br/>
		    		<a class="button-blue" href="#">Click Here</a>
		    		<br/>
		    	</div>
		    	<img class="img-ribbon-bottom" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon-bottom.png">
		    	<img class="img-ribbon-top" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon-top.png">
		    	<div style="height: 16.1vw;background-color: #be0a2f;margin: 0px;padding: 0px;padding-top: 10px;position: relative;bottom: 1.5vw;">
		    			<span class="footnote-2">Fast Quote <span style="font-size: 1vw;">or</span></span>
		    			<span class="footnote-2">Just a Question?</span>
		    			<br class="clear" />
		    			<div style="width: 100%;" style="background-color: #be0a2f;position: relative;">
		    				<div class="col-md-7 left cd-1 tw-container" style="z-index: 3;background-color: #be0a2f;">
		    					<span class="footnote text-left" style="padding-left: 10px;">Have one of <br/>our wine cellar<br/>designers<br/> contact you</span>
		    					<br class="clear" />
		    					<a class="button-blue" href="#">Click Here</a>
		    				</div>
		    				<div class="col-md-5 cd-2 left face-1 tw-container" style="z-index: 2;background-color: #be0a2f;position: relative;">
		    				</div>
		    			</div>
		    	</div>
		    </div>
	    </section>
	    <br class="clear" />
	    <section class="left-side-nav">
		    <?php 
		      $v = 0;
		      $menuargs = array(
		        "theme_location" => "primary",
		        "menu_class" => "s-menu",
		        "menu_id" => "LEFT-MENU",
		      );
		      $items_left = wp_get_nav_menu_items( 'LEFT-MENU', $menuargs); 
		    ?>
	    	<div style="width: 100%;background-color: #ffebc8;">
	    		<div style="background-color: #aea18b;padding-top: 10px;padding-bottom: 10px;padding-left: 25px;padding-right: 25px;">
	    			<span class="footnote text-left">Project Features</span>
	    		</div>
	    		<br/>
	    		<ul class="nav-pages">
	    			<?php foreach( $items_left as $item ){ ?>
	    				<li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
	    			<?php } ?>
	    		</ul>
	    	</div>

	    </section>
	  </div>	
	  <div class="right-side" style="width: 80%;padding-left: 20px;padding-right: 20px;">
	  	<div class="col-md-6 home-content-block left banner-content" style="">
			<div class="bg-block-content-1">
				<div class="bottom-block">
					<span class="content-title">Do you treasure your wine collection and can’t wait to show it off to your loved ones?</span>
					<br class="clear">
					<span class="content-text-small">Owning a beautifully designed one-of-a-kind wine cellar will help create the perfect occasion where you can share your hobby with others.</span>
					<span class="content-title-2">Captivate your family and friends with a stunning  wine cellar that elegantly showoffs your hobby</span>
					<br class="clear">
					<a class="button-red" href="#">Give us a call</a>
				</div>
			</div>
		</div>

	  	<div class="col-md-6 home-content-block left banner-content" style="">
			<div class="bg-block-content-2">
				<div class="top-block">
					<span class="content-title">Do you want a residential wine cellar design that leaves an unforgettable impression?</span>
					<br/>
					<span class="content-text-small">Your home’s interior will be dramatically elevated with the inclusion of an exquisite wine cellar.</span>			
				</div>	
				<div class="bottom-block-2">
					<span class="content-title-2">Custom Wine Cellars Houston can help you through the steps of building an exceptionally unique wine cellar that is tailored to your aesthetic goals</span>	
					<a class="button-red" href="#">get started today</a>
				</div>
			</div>
		</div>

	  	<div class="col-md-6 home-content-block left banner-content" style="">
			<div class="bg-block-content-3">
				<div class="top-block">
					<span class="content-title">Looking to attract new customers and increase revenue for your commercial establishment?</span>
					<br class="clear" />
					<span class="content-title-2">The inclusion of a modern and impressive commercial wine cellar is sure to have a significant impact  on overall sales.</span>			
					<br class="clear" />
					<span class="content-text-small">Display your wines with elegance to increase the profit of your restaurant</span>	
				</div>	
				<div class="bottom-block-2">
					<br class="clear">
					<br class="clear">
					<br class="clear">
					<br class="clear">
					<a class="button-red-2" href="#">fill out a FREE 3D request form</a>
				</div>
			</div>
		</div>

	  	<div class="col-md-6 home-content-block left banner-content" style="">
			<div class="bg-block-content-4">
				<div class="center-block">
					<span class="content-title">Has improper wine cellar refrigeration ruined your expensive wine collection in the past?</span>
					<br class="clear" />
					<span class="content-text-small">Has improper wine cellar refrigeration ruined your expensive wine collection in the past?</span>			
					<br class="clear" />
					<span class="content-title-2">Work with some of the best wine cellar builders in the industry</span>
				</div>	
				<div class="bottom-block-2">
					<br class="clear">
					<br class="clear">
					<br class="clear">
					<br class="clear">
					<a class="button-red-2" href="#">get a hold of an expert today</a>
				</div>
			</div>
		</div>


	  </div>
	</div>
  </section>
<?php get_footer(); ?>