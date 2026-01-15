<?php
//about theme info
add_action( 'admin_menu', 'skt_bulldozer_abouttheme' );
function skt_bulldozer_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-bulldozer'), esc_html__('About Theme', 'skt-bulldozer'), 'edit_theme_options', 'skt_bulldozer_guide', 'skt_bulldozer_mostrar_guide');   
} 
//guidline for about theme
function skt_bulldozer_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-bulldozer'); ?>
		   </div>
          <p><?php esc_html_e('SKT Bulldozer is suitable for construction industry. It works well for heavy equipment, excavator, loader, grader, trenching and digging services. It also fits earth-moving machine providers, heavy-duty tractor operators, and general contractor firms. The theme supports quick page building and comes ready for popular plugins. You can add online booking, contact forms, maps, pricing tables, and photo galleries with ease. It loads fast and works smoothly on mobiles, tablets, and desktops. SEO friendly features help your website get seen by more clients.','skt-bulldozer'); ?></p>
          <a href="<?php echo esc_url(SKT_BULLDOZER_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="<?php esc_attr_e('Free Vs Pro', 'skt-bulldozer'); ?>" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_BULLDOZER_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-bulldozer'); ?></a> | 
				<a href="<?php echo esc_url(SKT_BULLDOZER_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-bulldozer'); ?></a> | 
				<a href="<?php echo esc_url(SKT_BULLDOZER_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-bulldozer'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_BULLDOZER_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="<?php esc_attr_e('SKT Themes', 'skt-bulldozer'); ?>" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>