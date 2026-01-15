<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Bulldozer
 */
$footer_text = get_theme_mod('footer_text');

$footerlogo = get_theme_mod('footer_logo_image'); 
$footerlogo_link = get_theme_mod('footer_logo_url');

$location_heading = get_theme_mod('location_heading');
$location_address = get_theme_mod('location_address');
$email_heading = get_theme_mod('email_heading');
$email_address = get_theme_mod('email_address'); 

$hidefooterbox = get_theme_mod('hide_footer_bar', 1);
?>

<div id="footer">

<?php if( $hidefooterbox == '') { ?>
<div class="footer-infobox">
        <div class="container">
        	<?php 
				if (!empty($footerlogo)) { ?>
            <div class="footer-infobox-left footer-infobox-left"><?php if (!empty($footerlogo_link)) { ?>
                	<a href="<?php echo esc_url($footerlogo_link); ?>">
                    <?php
					}
					?>
                    <img src="<?php echo esc_url($footerlogo); ?>" />
                    <?php 
					if (!empty($footerlogo_link)) { ?>
                    </a>
                    <?php } ?></div>
            <?php } ?>        

            <div class="footer-infobox-left footer-infobox-center">
                <?php if (!empty($location_heading) || !empty($location_address)) { ?><div><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-location.png"></div>
				<?php } ?>
                <?php if (!empty($location_heading)) { ?><h5><?php echo esc_html( $location_heading ); ?></h5><?php } ?>
		        <?php if (!empty($location_address)) { ?><p><?php echo esc_html( $location_address ); ?></p><?php } ?>
            </div>
            
            <div class="footer-infobox-left footer-infobox-right">
            	<?php if (!empty($email_heading) || !empty($email_address)) { ?><div><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/icon-mail.png"></div><?php } ?>
                <?php if (!empty($email_heading)) { ?><h5><?php echo esc_html( $email_heading ); ?></h5><?php } ?>
                <?php if (!empty($email_address)) { ?><p><?php echo esc_html( $email_address ); ?></p><?php } ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<?php } ?>    

<div id="footer-wrapper">
  <div class="copyright-area">
    <?php if ( is_active_sidebar( 'fc-1-rfl' ) || is_active_sidebar( 'fc-2-rfl' ) || is_active_sidebar( 'fc-3-rfl' ) || is_active_sidebar( 'fc-4-rfl' )) : ?>
    <div class="footerarea">
      <div class="container footer ftr-widg">
        <div class="footer-row">
          <?php if ( is_active_sidebar( 'fc-1-rfl' ) ) : ?>
          <div class="cols-3 widget-column-1">
            <?php dynamic_sidebar( 'fc-1-rfl' ); ?>
          </div>
          <!--end .widget-column-1-->
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'fc-2-rfl' ) ) : ?>
          <div class="cols-3 widget-column-2">
            <?php dynamic_sidebar( 'fc-2-rfl' ); ?>
          </div>
          <!--end .widget-column-2-->
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'fc-3-rfl' ) ) : ?>
          <div class="cols-3 widget-column-3">
            <?php dynamic_sidebar( 'fc-3-rfl' ); ?>
          </div>
          <!--end .widget-column-3-->
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'fc-4-rfl' ) ) : ?>
          <div class="cols-3 widget-column-3">
            <?php dynamic_sidebar( 'fc-4-rfl' ); ?>
          </div>
          <!--end .widget-column-3-->
          <?php endif; ?>
          <div class="clear"></div>
        </div>
      </div>
      <!--end .container--> 
    </div>
    <?php endif; ?>
  </div>
  <div class="copyright-wrapper">
    <div class="container">
      <div class="copyright-txt">
        <?php if (!empty($footer_text)) { ?>
        <?php echo esc_html($footer_text); ?>
        <?php } ?>
        <?php bloginfo('name'); ?>
        <?php esc_html_e('Theme By ','skt-bulldozer');?> <a href="<?php echo esc_url('https://www.sktthemes.org/product-category/construction/');?>" target="_blank">
        <?php esc_html_e('SKT Construction Themes','skt-bulldozer'); ?>
        </a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!--end #copyright-area-->
<?php wp_footer(); ?>
</body>
</html>