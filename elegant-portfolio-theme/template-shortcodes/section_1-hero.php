<?php
/**
 * Hero Section shortcode
 */
define(
    'HERO_DEFAULT_CONTENT',
    "You might saw me jumping, climbing buildings, and stopping trains. But nobody pays me a dime for that work. That's why I am learning and mastering web development. I will not stop until I become the Web Development Hero."
);

add_shortcode( 'hero-section', function( $attrs, $content ) {
    $attrs = shortcode_atts( [
        'welcome_text'        => 'Welcome To',
        'title_yellow'        => 'Nisarul Amin Naim',
        'title_black'         => 'World',
        'sub_title'           => 'Build Climber and Train Stopper',
        'call_to_action'      => 'Hire Me',
        'call_to_action_link' => '',
        'image'               => '',
    ], $attrs );
    extract( $attrs );

    if( function_exists( 'vc_build_link' ) && !empty( vc_build_link( $call_to_action_link )['url'] ) ) {
        $href = vc_build_link( $call_to_action_link );
    } else {
        $href = [
            'url'    => 'https://www.nisarul.com',
            'title'  => 'Nisarul Amin Naim',
            'target' => '_blank'
        ];
    }

    ob_start();?>

    <!-- 1. Hero Section Starts -->
    <header>
        <div class="container flex-container flex-mobile-reverse">
            <!-- 1.1 Left Area -->
            <div class="left-area flex-item-50">
                <!-- 1.1.1 Welcome Text as h2 -->
                <h2 class="text-h2"><?php echo $welcome_text; ?></h2>
                <!-- 1.1.2 Title as h1 -->
                <h1 class="text-h1"><span class="orange"><?php echo $title_yellow; ?></span> <?php echo $title_black; ?></h1>
                <!-- 1.1.3 Subtitle as h4 -->
                <h4 class="text-h4"><?php echo $sub_title; ?></h4>
                <!-- 1.1.4 Paragraph -->
                <p class="text-p"><?php echo !empty( $content ) ? $content : HERO_DEFAULT_CONTENT; ?></p>
                <!-- 1.1.5 Call to action -->
                <a class="btn" href="<?php echo $href['url']; ?>" title="<?php echo $href['title']; ?>"<?php echo !empty($href['target']) ? " target=\"{$href['target']}\"" : ''; ?>><?php echo $call_to_action; ?></a>
            </div>
            <!-- 1.2 Right Area -->
            <div class="right-area flex-item-50 align-items-end">
                <!-- 1.2.1 Hero Image -->
                <img class="img-100" src="<?php echo !empty( wp_get_original_image_url( $image ) ) ? wp_get_original_image_url( $image ) : get_template_directory_uri() . '/img/hero-poster.png'; ?>" alt="image">
            </div>
        </div>
    </header>
    <!-- 1. Hero Section Ends -->

    <?php return ob_get_clean();
} );

/**
 * WPBakery 'About Section' element development
 */
if ( function_exists( 'vc_map' ) ) {
    vc_map( [
        'name'     => '1. Hero Section',
        'base'     => 'hero-section',
        'category' => 'Portfolio Page Sections',
        'icon'     => 'https://cdn2.iconfinder.com/data/icons/alignment-paragraph-9/24/header_style_cell-256.png',
        'params'   => [
            [
                'param_name' => 'welcome_text',
                'heading'    => 'Welcome Text',
                'type'       => 'textfield',
                'value'      => 'Welcome To',
            ],
            [
                'param_name' => 'title_yellow',
                'heading'    => 'Title (First Part - Yellow)',
                'type'       => 'textfield',
                'value'      => 'Nisarul Amin Naim',
            ],
            [
                'param_name' => 'title_black',
                'heading'    => 'Title (Last Part - Black)',
                'type'       => 'textfield',
                'value'      => 'World',
            ],
            [
                'param_name' => 'sub_title',
                'heading'    => 'Subtitle',
                'type'       => 'textfield',
                'value'      => 'Build Climber and Train Stopper',
            ],
            [
                'param_name' => 'content',
                'heading'    => 'Content',
                'type'       => 'textarea',
                'value'      => "You might saw me jumping, climbing buildings, and stopping trains. But nobody pays me a dime for that work. That's why I am learning and mastering web development. I will not stop until I become the Web Development Hero.",
            ],
            [
                'param_name' => 'call_to_action',
                'heading'    => 'Button Text',
                'type'       => 'textfield',
                'value'      => 'Hire Me',
            ],
                        [
                'param_name' => 'call_to_action_link',
                'heading'    => 'Button URL',
                'type'       => 'vc_link',
                'value'      => '',
            ],
            [
                'param_name' => 'image',
                'heading'    => 'Select Image',
                'type'       => 'attach_image',
                'value'      => '',
            ],
        ],
    ] );
}