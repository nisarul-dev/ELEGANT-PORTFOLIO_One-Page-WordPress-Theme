<?php
/**
 * Experience Section shortcode
 */
add_shortcode( 'experience-section', function ( $attrs, $content ) {
    $attrs = shortcode_atts( [
        'title'           => 'Experiences',
        'card_1_title'    => 'Full Stack Web Developer',
        'card_1_subtitle' => '2021-Present | Pro Level Developer',
        'card_1_content'  => "I am the master of HTML, CSS and Javascript. I know everything needed to make a website function, efficient. I didn't stop with the web. I went beyond with most popular Javascript framework called Vue JS. I even know the deployment, server and security. I will give you 100% web solution.",
        'card_2_title'    => 'Full Stack Web Developer',
        'card_2_subtitle' => '2021-Present | Pro Level Developer',
        'card_2_content'  => "I am the master of HTML, CSS and Javascript. I know everything needed to make a website function, efficient. I didn't stop with the web. I went beyond with most popular Javascript framework called Vue JS. I even know the deployment, server and security. I will give you 100% web solution.",
    ], $attrs );
    extract( $attrs );
    ob_start();?>

    <!-- 3. Experience Section Starts -->
    <section class="experience">
        <!-- 3.1 Title -->
        <div class="container">
            <h2 class="text-h2 text-center"><?php echo $title; ?></h2>
        </div>
        <!-- 3.2 Experience Card Container -->
        <div class="container flex-container">
            <!-- 3.2.1 Experience Card 1 -->
            <div class="card card-left flex-item-50">
                <h2 class="text-h1"><?php echo $card_1_subtitle; ?></h2>
                <h4 class="text-h4 orange"><?php echo $card_1_subtitle; ?></h4>
                <p class="text-p"><?php echo $card_1_content; ?></p>
            </div>
            <!-- 3.2.2 Experience Card 2 -->
            <div class="card card-right flex-item-50">
                <h2 class="text-h1"><?php echo $card_2_subtitle; ?></h2>
                <h4 class="text-h4 orange"><?php echo $card_2_subtitle; ?></h4>
                <p class="text-p"><?php echo $card_2_content; ?></p>
            </div>
        </div>
    </section>
    <!-- 3. Experience Section Ends -->

    <?php return ob_get_clean();
} );

/**
 * WPBakery 'About Section' element development
 */
if ( function_exists( 'vc_map' ) ) {
    vc_map( [
        'name'     => '3. Experience Section',
        'base'     => 'experience-section',
        'category' => 'Portfolio Page Sections',
        'icon'     => 'https://cdn2.iconfinder.com/data/icons/business-finance-1-1/128/customer-experience-256.png',
        'params'   => [
            [
                'param_name' => 'title',
                'heading'    => 'Section Title',
                'type'       => 'textfield',
                'value'      => 'Experiences',
            ],
            [
                'param_name' => 'card_1_title',
                'heading'    => 'Card 1: Title',
                'type'       => 'textfield',
                'value'      => 'Full Stack Web Developer',
            ],
            [
                'param_name' => 'card_1_subtitle',
                'heading'    => 'Card 1: Subtitle',
                'type'       => 'textfield',
                'value'      => '2021-Present | Pro Level Developer',
            ],
            [
                'param_name' => 'card_1_content',
                'heading'    => 'Card 1: Content',
                'type'       => 'textarea',
                'value'      => "I am the master of HTML, CSS and Javascript. I know everything needed to make a website function, efficient. I didn't stop with the web. I went beyond with most popular Javascript framework called Vue JS. I even know the deployment, server and security. I will give you 100% web solution.",
            ],
            [
                'param_name' => 'card_2_title',
                'heading'    => 'Card 2: Title',
                'type'       => 'textfield',
                'value'      => 'Full Stack Web Developer',
            ],
            [
                'param_name' => 'card_2_subtitle',
                'heading'    => 'Card 2: Subtitle',
                'type'       => 'textfield',
                'value'      => '2021-Present | Pro Level Developer',
            ],
            [
                'param_name' => 'card_2_content',
                'heading'    => 'Card 2: Content',
                'type'       => 'textarea',
                'value'      => "I am the master of HTML, CSS and Javascript. I know everything needed to make a website function, efficient. I didn't stop with the web. I went beyond with most popular Javascript framework called Vue JS. I even know the deployment, server and security. I will give you 100% web solution.",
            ],
        ],
    ] );
}