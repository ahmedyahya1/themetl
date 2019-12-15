<?php 
include get_template_directory().'/framework/variables/variables-headers.php';
?>
<!--Header Start-->

<div class="fullscreen_header_area">
  <div class="zolo-header-area header_background zolo_preset_header6 <?php echo esc_attr($zolo_header_sticky);?>"> 
    
    <!--Top Area Start-->
    <?php if($apress_data["topbar_border_style_width"] == 'border_style_fix_width'){ echo '<div class="zolo-container">'; }?>
    <div class="zolo-topbar">
      <div class="zolo-container">
        <div class="headertopcontent_box">
          <div class="header_element header_section_one">
            <?php			
		//Topbar Left
		echo '<div class="header_left"><ul class="header_left_col">'; 
		// Header Email
		if($apress_data["header_email"]){
			echo '<li class="top-mail"><i class="fa fa-envelope mail-icon"></i><a href="mailto:'.esc_attr($apress_data["header_email"]).'">'.esc_attr($apress_data["header_email"]).'</a></li>';		
		}
		// Header Phone Number
		if($header_phone_number){
			echo '<li class="top-phone"><i class="fa fa-phone mail-icon"></i><a href="tel:'.esc_attr($header_phone_number).'">'.esc_attr($header_phone_number).'</a></li>';	
		}
		echo '</ul></div>'; 
        //Topbar Right
		echo '<div class="header_right"><ul class="header_right_col">'; 
			// Top Social
			get_template_part('framework/social_icons');
        echo '</ul></div>';  
        ?>
          </div>
        </div>
      </div>
    </div>
    <?php if($apress_data["topbar_border_style_width"] == 'border_style_fix_width'){ echo '</div>'; }?>
    <!--Top Area End-->
    
    <?php 
	//header_sticky_opt Show/Hide
		if($header_sticky_opt == 'on'){ 
		echo $header_sticky_display == 'section2_3' ? $header_sticky_wrapper_start : '' ?>
    <?php } ?>
    <header class="zolo_header">
      <div class="headercontent"> <?php echo $header_sticky_display == 'section2' ? $header_sticky_wrapper_start : '' ?>
      
        <?php if($apress_data["section2_border_style_width"] == 'border_style_fix_width'){ echo '<div class="zolo-container">'; }?>
        <div class="zolo-header_section2_background">  
          <div class="zolo-container">
          <div class="headercontent_box">
            <div class="header_element header_section_two">
		<?php	
        //Menu Bar Left
        echo '<div class="header_left"><ul class="header_left_col">'; 
        ?>
        <?php
        // Header Logo
        apress_theme_header_logo(); ?>
	<?php echo '</ul></div>'; 

	//Menu Bar Right
	echo '<div class="header_right"><ul class="header_right_col">'; 
	
			// Header Ad Area
			if($apress_data["header_ad_section"]){
				echo '<li class="header_right_img">'.wp_kses($apress_data["header_ad_section"],array(
          'span' => array(
           'class' => array(),
          ),
          'i' => array(
           'class' => array(),
          ),
          'img' => array(
           'src' => array(),
           'class' => array(),
           'alt' => array(),
          ),
          'strong' => array(),
          'em' => array(),
          'br' => array(),
          'a' => array(
           'href' => array(),
           'class' => array(),
           'mailto' => array(),
           'callto' => array()
          )
         )).'</li>';		
			}
			
	echo '</ul></div>'; 
?> </div>
          </div>
        </div>
        </div>
        <?php if($apress_data["section2_border_style_width"] == 'border_style_fix_width'){ echo '</div>'; }?>
        
        <?php echo $header_sticky_display == 'section2' ? $header_sticky_wrapper_end : '' ?> <?php echo $header_sticky_display == 'section3' ? $header_sticky_wrapper_start : '' ?>
        
        <?php if($apress_data["section3_border_style_width"] == 'border_style_fix_width'){ echo '<div class="zolo-container">'; }?>
        <div class="navigation-area">
          <div class="zolo-container">
          <div class="navigation-padding">
            <div class="zolo-navigation_parent">
              <div class="header_element header_section_three">
                <?php			
	//Menu Bar Center
	echo '<div class="header_center"><ul class="header_center_col">';
		// Menu
			apress_theme_preset_custom_top_header_main_menu();
		// Cart icon
		if ( class_exists( 'WooCommerce' ) ) {				
			echo '<li class="shopping_cart"><div class="shopping-cart-wrapper">'.apress_theme_tiny_cart().'</div></li>';	
		}
	// Multilingual
	if($multilingual_code){ 
		echo '<li class="zolo_multilingual_code">'.apress_theme_execute_text_php($multilingual_code).'</li>';		
	}
		// Header Search
		echo '<li class="zolo-search-menu"><div class="zolo_navbar_search '.esc_attr($top_search_design).'"><span class="nav_'.esc_attr($top_search_design).' nav_search-icon"></span>';
		if($top_search_design == 'default_search_but'){
			echo '<div class="nav_search_form_area">';
			get_search_form();
			echo '</div>';
		}
		echo '</div></li>';
	
	echo '</ul></div>';
?>
                <!--Expanded Search Content Start-->
                <?php 
if($top_search_design == 'expanded_search_but'){
	echo '<div class="zolo_navbar_search expanded_search_but"><div class="nav_search_form_area">';
	echo '<span id="nav_expanded_search_but" class="nav_search-icon expanded_close_button"></span>';
	get_search_form();
	echo '</div></div>';
}?>
                <!--Expanded Search Content End--> 
              </div>
            </div>
          </div>
          </div>
        </div>
        <?php if($apress_data["section3_border_style_width"] == 'border_style_fix_width'){ echo '</div>'; }?>
        
        <?php echo $header_sticky_display == 'section3' ? $header_sticky_wrapper_end : '' ?> </div>
    </header>
    <?php 
        //header_sticky_opt Show/Hide
        if($header_sticky_opt == 'on'){ 
        echo $header_sticky_display == 'section2_3' ? $header_sticky_wrapper_end : '' ?>
    <?php } ?>
  </div>
  
  <!--Full Screen Search Content Start-->
  <?php if($top_search_design == 'full_screen_search_but'){?>
  <div class="search_overlay"> <span class="search_close_but">
    <?php __( 'Close', 'apress' ); ?>
    </span>
    <div class="content_div full_screen_search">
      <div class="zolo-container">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
  <?php }?>
  <!--Full Screen Search Content End--> 
</div>
<?php 
//Mobile Header Code Header 
get_template_part('framework/headers/mobile_header');
?>
