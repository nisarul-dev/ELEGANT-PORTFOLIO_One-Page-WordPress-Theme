<?php
/**
 * Footer Section shortcode
 */
define(
    'FOOTER_DEFAULT_CONTENT',
    "© Nisarul Amin Naim 2023, World University of Bangladesh."
);
add_shortcode( 'footer-section', function ( $attrs, $content ) {
    ob_start();?>

    <!-- 4. Footer Section Starts -->
    <footer>
        <p class="text-p text-center"><?php echo !empty( $content ) ? $content : FOOTER_DEFAULT_CONTENT; ?></p>
    </footer>
    <!-- 4. Footer Section Ends -->

    <?php return ob_get_clean();
} );

/**
 * WPBakery 'Footer Section' element development
 */
if ( function_exists( 'vc_map' ) ) {
    vc_map( [
        'name'     => '4. Footer Section',
        'base'     => 'footer-section',
        'category' => 'Portfolio Page Sections',
        'icon'     => 'https://cdn4.iconfinder.com/data/icons/user-interface-collection/16/030-page_footer-256.png',
        'params'   => [
            [
                'param_name' => 'content',
                'heading'    => 'Footer Text',
                'type'       => 'textarea',
                'value'      => '© Nisarul Amin Naim 2023, World University of Bangladesh.',
            ]
        ]
    ] );
}