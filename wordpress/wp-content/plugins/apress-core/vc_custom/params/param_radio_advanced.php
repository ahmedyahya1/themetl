<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if(!class_exists('Zolo_Radio_Advanced_Param')) {
	class Zolo_Radio_Advanced_Param {
		function __construct() {
			if(function_exists('vc_add_shortcode_param')) {
				vc_add_shortcode_param('zolo_radio_advanced' , array(&$this, 'radio_settings_field' ), APRESS_EXTENSIONS_PLUGIN_URL.'vc_custom/assets/admin/js/additional_param.js' );
			}
		}
	
		function radio_settings_field($settings, $value){
			$output = '';
			$uniquid = uniqid('zolo-radio-param');
			
			$param_name = isset($settings['param_name']) ? $settings['param_name'] : '';
			$type = isset($settings['type']) ? $settings['type'] : '';
			$class = isset($settings['class']) ? $settings['class'] : '';
			$style = isset($settings['css_rules']) ? 'style="'.esc_attr($settings['css_rules']).'"' : '';
			
			$options = isset($settings['options']) ? $settings['options'] : '';
			$result = empty($value) ? $settings['value'] : $value;
			
			if(!empty($options) && is_array($options)) {
				$output .= '<div id="'.esc_attr($uniquid).'" class="zolo-radio-advanced-container">';
					$output .= '<ul class="options-list">';
						foreach($options as $name => $val) {
							$checked = ($val == $result) ? 'checked="checked"' : '';
							$output .= '<li '. ($checked != '' ? 'class="active"' : '') .'>'
										. '<label '.$style.'>'
											. '<input type="radio" '. $checked .' value="'.$val.'" />'
											. strip_tags($name,'<i><span>')
										. '</label>'
									. '</li>';
						}
					$output .= '</ul>';
					$output .= '<input type="hidden" name="' . esc_attr($param_name) . '" class="wpb_vc_param_value ' . esc_attr($param_name . ' ' . $type . ' ' . $class) . '" value="'.$result.'" />';
				$output .= '</div>';
			}
			
			return $output;
		}
		
	}
	
	$Zolo_Radio_Advanced_Param = new Zolo_Radio_Advanced_Param();
}
