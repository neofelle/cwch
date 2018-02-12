    <br class="clear">
    <?php 
      $v = 0;
      $menuargs = array(
        "theme_location" => "primary",
        "menu_class" => "s-menu",
        "menu_id" => "MAIN-MENU",
      );
      $items_footer = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs); 
    ?>
    <section class="footer">
      <div class="footer-container" style="display: flex;background-color: #aea18b;padding-bottom: 5px;border-top: 1px solid #f4efd1;">
        <div class="col-md-1 left">
          <img style="max-width: 170px;" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon.png" alt="Menu"> 
        </div>
        <div class="col-md-8 left center" style="padding-top: 32px;">
          <ul class="nav-footer">
            <?php foreach( $items_footer as $item ){ ?>
              <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-md-3 left" style="text-align: right;padding-top: 35px;">
          <span class="footer-copyright">Copyright All Rights Reserved © 2017</span>
          <br/>
          <span class="footer-copyright">2127 S Vasco Road Suite A Livermore, CA 94550</span>
        </div>
      </div>
    </section>

    <section class="footer-mobile">
      <div class="footer-container" style="display: flex;background-color: #aea18b;padding-bottom: 5px;border-top: 1px solid #f4efd1;">
        <div class="col-md-12 center" style="display: flex;justify-content: center;">
          <img style="max-width: 170px;" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon.png" alt="Menu"> 
        </div>
        <br class="clear" />
      </div>
      <div class="col-md-12 center" style="display: flex;justify-content: center;background-color: #aea18b;">
        <span class="footer-copyright">Copyright All Rights Reserved © 2017 <br/>2127 S Vasco Road Suite A Livermore, CA 94550</span>
      </div>
    </section>
  <!-- footer-->
  </div> <!-- footer-container -->
<script>
$(function() {
  var pull    = $('#pull');
    menu    = $('.mobiletop ul');
    menuHeight  = menu.height();

  $(pull).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });
  $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
          menu.removeAttr('style');
        }
    });
});
</script>
<?php wp_footer();?>
</body>
</html> 