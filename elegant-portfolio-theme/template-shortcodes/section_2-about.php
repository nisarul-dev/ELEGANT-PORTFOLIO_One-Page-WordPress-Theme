<?php
/**
 * About Section shortcode
 */
define(
    'ABOUT_DEFAULT_CONTENT',
    "I already learned the basic HTML and CSS. I can build any simple website. I can even teach my grandma how to make simple website. My goal is to build 3 websites and learn advanced topics."
);
add_shortcode( 'about-section', function ( $attrs, $content ) {
    $attrs = shortcode_atts( [
        'image'               => '',
        'welcome_text'        => 'Dream Big',
        'title'               => 'Become a web developer',
        'call_to_action'      => 'Get in Touch',
        'call_to_action_link' => '',
    ], $attrs );
    extract( $attrs );

    if ( function_exists( 'vc_build_link' ) && !empty( vc_build_link( $call_to_action_link )['url'] ) ) {
        $href = vc_build_link( $call_to_action_link );
    } else {
        $href = [
            'url'    => 'https://www.nisarul.com',
            'title'  => 'Nisarul Amin Naim',
            'target' => '_blank',
        ];
    }

    ob_start();?>

    <!-- 2. About section Starts -->
    <section class="about">
        <div class="container flex-container">
            <!-- 2.1 Left Area -->
            <div class="left-area flex-item-50 align-items-start">
                <!-- 2.1.1 Hero Image -->
                <img class="img-100" src="<?php echo !empty( wp_get_original_image_url( $image ) ) ? wp_get_original_image_url( $image ) : get_template_directory_uri() . '/img/section-2-poster.png'; ?>" alt="image">
            </div>
            <!-- 2.2 Right Area -->
            <div class="right-area flex-item-50">
                <!-- 2.2.1 Welcome Text as h2 -->
                <h2 class="text-h2"><?php echo $welcome_text; ?></h2>
                <!-- 2.2.2 Title as h4 -->
                <h4 class="text-h4"><?php echo $title; ?></h4>
                <!-- 2.2.3 Paragraph -->
                <p class="text-p"><?php echo !empty($content) ? $content : ABOUT_DEFAULT_CONTENT; ?></p>
                <!-- 2.2.4 Call to action -->
                <a class="btn" href="<?php echo $href['url']; ?>" title="<?php echo $href['title']; ?>"<?php echo !empty( $href['target'] ) ? " target=\"{$href['target']}\"" : ''; ?>><?php echo $call_to_action; ?></a>
            </div>
        </div>
    </section>
    <!-- 2. About section Ends -->

    <?php return ob_get_clean();
} );

/**
 * WPBakery 'About Section' element development
 */
if ( function_exists( 'vc_map' ) ) {
    vc_map( [
        'name'     => '2. About Section',
        'base'     => 'about-section',
        'category' => 'Portfolio Page Sections',
        'icon'     => 'https://cdn2.iconfinder.com/data/icons/user-interface-169/32/about-256.png',
        'params'   => [
            [
                'param_name' => 'image',
                'heading'    => 'Select Image',
                'type'       => 'attach_image',
                'value'      => '',
            ],
            [
                'param_name' => 'welcome_text',
                'heading'    => 'Welcome Text',
                'type'       => 'textfield',
                'value'      => 'Dream Big',
            ],
            [
                'param_name' => 'title',
                'heading'    => 'Title',
                'type'       => 'textfield',
                'value'      => 'Become a web developer',
            ],
            [
                'param_name' => 'content',
                'heading'    => 'Content',
                'type'       => 'textarea',
                'value'      => "I already learned the basic HTML and CSS. I can build any simple website. I can even teach my grandma how to make simple website. My goal is to build 3 websites and learn advanced topics 2.",
            ],
            [
                'param_name' => 'call_to_action',
                'heading'    => 'Button Text',
                'type'       => 'textfield',
                'value'      => 'Get in Touch',
            ],
            [
                'param_name' => 'call_to_action_link',
                'heading'    => 'Button URL',
                'type'       => 'vc_link',
                'value'      => '',
            ],
        ],
    ] );
}