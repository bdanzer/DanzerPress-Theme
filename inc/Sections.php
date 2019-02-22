<?php

class Sections {
    public $legacy_templates = [
        'hero_section' => 'hero-section',
        'half_and_half' => 'half-and-half-section',
        'icons' => 'icons',
        'image_section' => 'image-section',
        'long_image_section' => 'long-image-section',
        'block_text_section' => 'block-text-section',
        'four_image_section' => 'four-image-section',
        'simple_gallery_section' => 'simple-gallery-section',
        'team_member_section' => 'team-member-section',
        'recent_post_section' => 'recent-post-section',
        'testimonial_section' => 'testimonial-section',
        'slider_revolution_section' => 'slider-revolution-section',
        'faq_section' => 'faq-section',
        'tabs_section' => 'tabs-section',
        'raw_code_section' => 'raw-code-section'
    ];
    public $html = '';
    public $section_number = 1;

    public function __construct() {}

    public function get_section_html() 
    {
        $flexible_layout = get_field('flexible_layout');

        if( $flexible_layout ) {
            $transient = get_transient(get_the_ID() . '_section_cache');
            if ($transient) {
                return $transient;
            }

            $context = [
                'section_is_odd' => false,
                'section_number' => 1
            ];
                
            while ( have_rows('flexible_layout') ) : the_row();
                $context['section_id'] = 'section-' . $context['section_number'];

                $context['section_class'] = ($context['section_is_odd']) ? 'danzerpress-odd' : '';
                $context['danzerpressColor'] = ($context['section_is_odd']) ? 'danzerpress-white' : 'danzerpress-grey';

                if (array_key_exists(get_row_layout(), $this->legacy_templates)) {
                    $this->html .= Loader::compile('danzerpress-section-parts/' . $this->legacy_templates[get_row_layout()] . '.php', $context);
                }

                $context['section_is_odd'] = !$context['section_is_odd'];
                $context['section_number']++;
            endwhile;

        } else {
            $this->html = Loader::compile('danzerpress-section-parts/danzerpress-sections-start.php', $context);
        }

        set_transient(get_the_ID() . '_section_cache', $this->html, 999);
        return $this->html;
    }

    public function render() 
    { 
        if (is_home() || is_front_page()) {
            if ( get_field('full_screen_section_1', 'option') === true ) { ?>
                <style type="text/css">
                    .home #section-1 {
                        height: 100vh;
                        display: flex;
                        flex-direction: column;
                    }
                    .home.danzerpress-non-transparent #section-1 {
                        height: calc(100vh - 64px);
                    }
                </style>
            <?php
            }
        }
        ?>

        <div class="danzerpress-container-fw" style="background: transparent;">
            <?php echo $this->get_section_html(); ?>
        </div>

        <?php
    }
}