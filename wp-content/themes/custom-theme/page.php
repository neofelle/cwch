<?php get_header('pages'); ?>
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
        <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/page/content', 'page' );
                the_content();
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.


        ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>