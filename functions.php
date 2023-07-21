<?php

add_action( 'wp_enqueue_scripts', function() {

  wp_enqueue_style( 'arke-parent-style', get_template_directory_uri() . '/style.css' );
});

function disable_wp_auto_p( $content ) {
  if ( is_singular( 'page' ) ) {
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );
  }
  return $content;
}
add_filter( 'the_content', 'disable_wp_auto_p', 0 );

add_filter( 'wpforms_field_properties_select', function($properties, $field, $form_data) {
	if ( isset( $field['dynamic_choices'], $field['dynamic_post_type']) 
		&& 'post_type' === $field['dynamic_choices'] 
		&& 'post' === $field['dynamic_post_type'] 
	) {
		foreach ($properties['inputs'] as $key => $value) {
			if ($starting_price = (int)get_field('starting_price', $value['attr']['value'])) {
				$properties['inputs'][$key]['label']['text'] .= ' (Starting price: ' . $starting_price . ')';
			}
		}
	}
	return $properties;
}, 10, 3 );

add_action( 'init', function() {
	$post_type = get_post_type_object('post');
	$labels = [];
	foreach (get_object_vars($post_type->labels) as $key => $value) {
		$labels[$key] = str_ireplace(['Post', 'post'], ['Journal', 'journal'], $value);
	}
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', ),
	);

	register_post_type( 'journal', $args );
});

add_action('admin_init', function() {
	$post_type = get_post_type_object('post');
	$labels = $post_type->labels;
	foreach (get_object_vars($labels) as $key => $value) {
		$labels->$key = str_ireplace(['Post', 'post'], ['Trip', 'trip'], $value);
	}
});

add_action( 'admin_menu', function() {
    global $menu;
    global $submenu;

	$menu[5][0] = 'Trips';

    $submenu['edit.php'][5][0] = 'All Trips';
} );

function acf_repeater() {
    ob_start(); ?>
    <?php if( have_rows('page_gallery' ) ): ?>
        <div class="page_gallery">
            <div class="custom-row">
                <?php while ( have_rows('page_gallery' ) ) : the_row();
                    ?>
                    <div class="custom-col">
                        <?php
                        $image = get_sub_field('image');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php $output = ob_get_clean();
    return $output;
}
add_shortcode('page_gallery', 'acf_repeater');