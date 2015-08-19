<?php


/**** Adding Theme Customizer Options ****/
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
   
   /**
 * Pages Drop-Down List
 *
 * Since NARGA v1.6
 */



// Adding option to choose simple or expanded sidebar nav
$wp_customize->add_section( 'twentyeleven-sidebar-options' , array(
    	'title'      => __( 'Navigation Style', 'twentyeleven' ),
    	'priority'   => 60,
	) ); 

$wp_customize->add_setting('twentyeleven_sidebar_options_id', array(
    'capability'     => 'edit_theme_options',
    'type'           => 'option',
    'default'		 => 'simple-nav',
    'sanitize_callback' => 'sanitize_sidebar_nav'
 
));

 
$wp_customize->add_control('twentyeleven-sidebar-options', array(
    'label'      => __('Navigation Style', 'twentyeleven'),
    'section'    => 'twentyeleven-sidebar-options',
    'type'    => 'radio',
    'choices' => array(
            'simple-nav' => __( 'Simple Navigation', 'twentyeleven' ),
            'expanded-nav' => __( 'Expanded Navigation', 'twentyeleven' )
        ),
    'settings'   => 'twentyeleven_sidebar_options_id',
));


function sanitize_page_feature( $value ) {
    if ( !$value )
        $value = '-Select-';
 
    return $value;
}

function sanitize_sidebar_nav( $value ) {
    if ( !$value )
        $value = 'simple-nav';
 
    return $value;
}
   
   


}
add_action( 'customize_register', 'mytheme_customize_register' );



register_nav_menu( 'anchored', __( 'Anchored Menu', 'twentyeleven' ) );


/** Add placeholders to gravity forms **/




/* Add a custom field to the field editor (See editor screenshot) */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);

function my_standard_settings($position, $form_id){

// Create settings on position 25 (right after Field Label)

if($position == 25){
?>

<li class="admin_label_setting field_setting" style="display: list-item; ">
<label for="field_placeholder">Placeholder Text

<!-- Tooltip to help users understand what this field does -->
<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>

</label>

<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">

</li>
<?php
}
}

/* Now we execute some javascript technicalitites for the field to load correctly */

add_action("gform_editor_js", "my_gform_editor_js");

function my_gform_editor_js(){
?>
<script>
//binding to the load field settings event to initialize the checkbox
jQuery(document).bind("gform_load_field_settings", function(event, field, form){
jQuery("#field_placeholder").val(field["placeholder"]);
});
</script>

<?php
}

/* We use jQuery to read the placeholder value and inject it to its field */

add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);

function my_gform_enqueue_scripts($form, $is_ajax=false){
?>
<script>

jQuery(function(){
<?php

/* Go through each one of the form fields */

foreach($form['fields'] as $i=>$field){

/* Check if the field has an assigned placeholder */

if(isset($field['placeholder']) && !empty($field['placeholder'])){

/* If a placeholder text exists, inject it as a new property to the field using jQuery */

?>

jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');

<?php
}
}
?>
});
</script>
<?php
}




if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_header-slide-fields',
		'title' => 'Header Slide Fields',
		'fields' => array (
			array (
				'key' => 'field_53e17dc642c8b',
				'label' => 'Action Link',
				'name' => 'action_link',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'post',
					1 => 'page',
					2 => 'event',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_53e17dfe42c8c',
				'label' => 'Action Link Title',
				'name' => 'action_link_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'headerslides',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_home-page-columns',
		'title' => 'Home Page Columns',
		'fields' => array (
			array (
				'key' => 'field_539a1b273f741',
				'label' => 'Highlight Columns',
				'name' => 'highlight_columns',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => '3 Column Row',
						'name' => '3_column_row',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_53e424fe47724',
								'label' => 'Column 1 Title',
								'name' => '3_column_1_text',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_539a1b763f742',
								'label' => 'Column 1',
								'name' => 'column_1',
								'type' => 'wysiwyg',
								'column_width' => 33,
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_53e4253147725',
								'label' => 'Column 2 Title',
								'name' => '3_column_2_text',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_539a1bd73f744',
								'label' => 'Column 2',
								'name' => 'column_2',
								'type' => 'wysiwyg',
								'column_width' => 33,
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_53e4254847726',
								'label' => 'Column 3 Title',
								'name' => '3_column_3_text',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_539a1bdf3f745',
								'label' => 'Column 3',
								'name' => 'column_3',
								'type' => 'wysiwyg',
								'column_width' => 33,
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
						),
					),
					array (
						'label' => '2 Column Row',
						'name' => '2_column_row',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_53e17045cf95a',
								'label' => 'Column 1 Image',
								'name' => 'column_1_image_1',
								'type' => 'image',
								'column_width' => '',
								'save_format' => 'id',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
							array (
								'key' => 'field_53a0249d6cb78',
								'label' => 'Column 1 Title',
								'name' => 'column_1_title_1',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53a01f151d33e',
								'label' => 'Column 1',
								'name' => 'column_1_text',
								'type' => 'wysiwyg',
								'column_width' => 33,
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_53e17077cf95b',
								'label' => 'Column 2 Image',
								'name' => 'column_2_image_1',
								'type' => 'image',
								'column_width' => '',
								'save_format' => 'id',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
							array (
								'key' => 'field_53a024b36cb79',
								'label' => 'Column 2 Title',
								'name' => 'column_2_title_1',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53a0204d09f12',
								'label' => 'Column 2 Content Options',
								'name' => 'content_options',
								'type' => 'select',
								'instructions' => 'Select the type of content you would like to place here.',
								'required' => 1,
								'column_width' => '',
								'choices' => array (
									'text' => 'Text',
									'events' => 'Events',
								),
								'default_value' => '',
								'allow_null' => 0,
								'multiple' => 0,
							),
							array (
								'key' => 'field_53a01f151d33f',
								'label' => 'Column 2',
								'name' => 'column_2_text',
								'type' => 'wysiwyg',
								'conditional_logic' => array (
									'status' => 1,
									'rules' => array (
										array (
											'field' => 'field_53a0204d09f12',
											'operator' => '==',
											'value' => 'text',
										),
									),
									'allorany' => 'all',
								),
								'column_width' => 33,
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_53a020ea09f13',
								'label' => 'Events Title',
								'name' => 'events_title',
								'type' => 'text',
								'conditional_logic' => array (
									'status' => 1,
									'rules' => array (
										array (
											'field' => 'field_53a0204d09f12',
											'operator' => '==',
											'value' => 'events',
										),
									),
									'allorany' => 'all',
								),
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
					),
				),
				'button_label' => 'Add Row',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-hometemplate.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-hometemplate2.php',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'slug',
				6 => 'author',
				7 => 'format',
				8 => 'featured_image',
				9 => 'categories',
				10 => 'tags',
				11 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = '*' . $post->post_type . '-' . $post->post_name;
}
return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );

//Register Widgetized area
function calsArs_widgets_init(){

if(function_exists('register_sidebar')):
	
	register_sidebar( 
		array(
		'name'=>'Location Information',
		'id'=>'footer_widget_area',
		'description'=>'An area of the site dedicated to showcasing your location information.',
		'before_widget'=>'<div id="%1$s" class="widget %2$s">',
		'after_widget'=>'</div>',
		'before_title'=>'<h2>',
		'after_title'=>'</h2>'
		)
	);

endif;

}

add_action('widgets_init', 'calsArs_widgets_init');