<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webtheme
 */

?>



<footer>
    <?php if (get_field('cta') === true) : ?>
        <section class="cta">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-10 offset-lg-1 text-left text-lg-center">
                        <h2><?php the_field('titel', 'options'); ?></h2>
                        <p><?php the_field('content', 'options'); ?></p>
                        <?php
                        $link = get_field('button_link', 'options');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn btn_arrow_left" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>"><i class="far fa-long-arrow-alt-right"></i><?php the_field('button', 'options'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <div class="container footer">
        <div class="row">
            <div class="col-sm-12 col-lg-4 mb-4 mb-lg-0">
                <h3><?php the_field( 'footer_title', 'options' ); ?></h3>
            </div>
            <div class="col-sm-12 col-lg-2 mb-4 mb-lg-0">
                <h3><?php the_field( 'kolom_1', 'options' ); ?></h3>
            </div>
            <div class="col-sm-12 col-lg-2 mb-4 mb-lg-0">
                <h3><?php the_field( 'kolom_2', 'options' ); ?></h3>
            </div>
            <div class="col-sm-12 col-lg-2 mb-4 mb-lg-0">
                <h3><?php the_field( 'kolom_3', 'options' ); ?></h3>
            </div>
            <div class="col-sm-12 col-lg-2">
                <svg id="footer_logo" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.81 11.4"><defs><style>.cls-1{fill:#1d1d1b;}</style></defs><path class="cls-1" d="M358,493.68h-.76l-1.87-5.13h.9l1.38,4,0,.19v-.18l1.35-4.05H360Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M361.84,491c0,1.21.61,1.95,1.63,1.95a2,2,0,0,0,1.29-.5l.33.65a3,3,0,0,1-1.8.61,2.65,2.65,0,0,1,0-5.26,1.88,1.88,0,0,1,1.93,2.07V491Zm1.43-1.81a1.37,1.37,0,0,0-1.37,1.19h2.45C364.33,489.58,364,489.16,363.27,489.16Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M370.31,493.53V490a1.28,1.28,0,0,0-.08-.58.53.53,0,0,0-.5-.27c-.51,0-1.05.38-1.92,1.34v3H367v-5h.82v1a5.33,5.33,0,0,1,.68-.68,2.1,2.1,0,0,1,1.33-.49c.88,0,1.31.45,1.31,1.38v3.73Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M374.38,493.68a1,1,0,0,1-1-1.12v-3.32h-.84v-.48l.84-.21V487.1h.83v1.45h1.32v.69h-1.32v3.06c0,.15,0,.25,0,.31s.11.24.29.24.37-.09.72-.35l.34.55C375.05,493.53,374.77,493.68,374.38,493.68Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M380.42,493.53v-1a2.44,2.44,0,0,1-2,1.19,1.22,1.22,0,0,1-1.33-1.4v-3.74h.82v3.53c0,.62.18.87.6.87a3,3,0,0,0,1.89-1.35v-3.05h.83v5Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M385.84,489.45c-.17-.14-.25-.2-.35-.2-.31,0-.71.45-1.18,1.31v3h-.82v-5h.82v.9c.62-.79.93-1,1.3-1a1,1,0,0,1,.64.34Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M388,491c0,1.21.62,1.95,1.63,1.95a2.06,2.06,0,0,0,1.3-.5l.33.65a3,3,0,0,1-1.8.61,2.65,2.65,0,0,1,0-5.26,1.88,1.88,0,0,1,1.92,2.07V491Zm1.43-1.81a1.37,1.37,0,0,0-1.36,1.19h2.44C390.47,489.58,390.09,489.16,389.4,489.16Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M399.63,489.24a1.79,1.79,0,0,1,.3,1,1.94,1.94,0,0,1-1.94,1.88l-.3,0-.17,0c-.46.39-.65.61-.65.75s.11.18.42.18h1.86c.92,0,1.34.36,1.34,1.16a2.45,2.45,0,0,1-2.69,2.11c-1.05,0-1.95-.55-1.95-1.2a1.19,1.19,0,0,1,.15-.52,3.78,3.78,0,0,1,.66-.86c-.5-.14-.71-.31-.71-.59s.31-.7,1-1.25a1.72,1.72,0,0,1-1-1.58,1.87,1.87,0,0,1,2-1.9,2.74,2.74,0,0,1,1.06.21h.76l.9-.08v.69Zm-.48,4.57h-1.86l-.16.25c-.32.5-.42.69-.42.88,0,.38.49.64,1.16.64,1,0,1.93-.59,1.93-1.27C399.8,494,399.59,493.81,399.15,493.81ZM397.91,489a1.25,1.25,0,0,0,0,2.49,1.17,1.17,0,0,0,1.11-1.24A1.18,1.18,0,0,0,397.91,489Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M404.57,489.45c-.16-.14-.25-.2-.35-.2-.31,0-.7.45-1.18,1.31v3h-.82v-5H403v.9c.62-.79.93-1,1.3-1a1,1,0,0,1,.64.34Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M408.3,493.68a2.64,2.64,0,1,1,2.45-2.63A2.57,2.57,0,0,1,408.3,493.68Zm0-4.53a1.93,1.93,0,1,0,1.55,1.9A1.74,1.74,0,0,0,408.3,489.15Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M415.82,493.53v-1a2.43,2.43,0,0,1-2,1.19,1.23,1.23,0,0,1-1.34-1.4v-3.74h.83v3.53c0,.62.18.87.59.87a3,3,0,0,0,1.89-1.35v-3.05h.84v5Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M420.91,493.66a1.76,1.76,0,0,1-1.19-.34v2.84h-.83v-7.61h.83v.63a2.15,2.15,0,0,1,1.64-.77,2.21,2.21,0,0,1,2.09,2.49A2.56,2.56,0,0,1,420.91,493.66Zm.32-4.47a1.84,1.84,0,0,0-1,.34,2.16,2.16,0,0,0-.54.55v1.73c0,.42,0,.48.1.64a1,1,0,0,0,1,.43,1.74,1.74,0,0,0,1.74-2C422.56,489.91,422,489.19,421.23,489.19Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M303.83,490l-3.19-4.87H303l1.8,3.18,1.91-3.18h2.22L305.7,490v3.63h-1.87Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M309.77,489.38a4.76,4.76,0,0,1,.34-1.85,4,4,0,0,1,2.4-2.3,5.62,5.62,0,0,1,3.68,0,4.15,4.15,0,0,1,1.45.89,4.08,4.08,0,0,1,.95,1.41,5.2,5.2,0,0,1,0,3.7,4.08,4.08,0,0,1-.95,1.41,4.46,4.46,0,0,1-1.45.89,5.62,5.62,0,0,1-3.68,0,4.36,4.36,0,0,1-1.45-.89,4.08,4.08,0,0,1-.95-1.41A4.76,4.76,0,0,1,309.77,489.38Zm1.94,0a3,3,0,0,0,.19,1.1,2.44,2.44,0,0,0,.53.86,2.41,2.41,0,0,0,.83.57,3.07,3.07,0,0,0,2.18,0,2.41,2.41,0,0,0,.83-.57,2.44,2.44,0,0,0,.53-.86,3,3,0,0,0,.19-1.1,3,3,0,0,0-.19-1.09,2.4,2.4,0,0,0-.53-.87,2.28,2.28,0,0,0-.83-.57,2.93,2.93,0,0,0-2.18,0,2.28,2.28,0,0,0-.83.57,2.4,2.4,0,0,0-.53.87A3,3,0,0,0,311.71,489.38Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M328.33,490.35a4.14,4.14,0,0,1-.23,1.39,3,3,0,0,1-.68,1.11,3.16,3.16,0,0,1-1.12.73,4.13,4.13,0,0,1-1.55.26,4.18,4.18,0,0,1-1.56-.26,3.16,3.16,0,0,1-1.12-.73,3,3,0,0,1-.68-1.11,4.14,4.14,0,0,1-.23-1.39v-5.22H323v5.15a2.15,2.15,0,0,0,.12.73,1.72,1.72,0,0,0,.36.58,1.5,1.5,0,0,0,.54.39,1.8,1.8,0,0,0,.69.13,1.73,1.73,0,0,0,.69-.13,1.59,1.59,0,0,0,.54-.39,1.7,1.7,0,0,0,.35-.58,2.15,2.15,0,0,0,.13-.73v-5.15h1.87Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M331.37,485.13h2.54l3.62,5.91h0v-5.91h1.87v8.5H337l-3.7-6.05h0v6.05h-1.87Z" transform="translate(-300.64 -484.92)"/><path class="cls-1" d="M350.1,493a7.15,7.15,0,0,1-1.73.62,8.64,8.64,0,0,1-1.84.19,5.17,5.17,0,0,1-1.83-.31,4.36,4.36,0,0,1-1.45-.89,4.11,4.11,0,0,1-1-1.41,5.2,5.2,0,0,1,0-3.7,4.11,4.11,0,0,1,1-1.41,4.06,4.06,0,0,1,1.45-.89,5.17,5.17,0,0,1,1.83-.31,7,7,0,0,1,1.88.24,3.7,3.7,0,0,1,1.51.85l-1.32,1.44a2.58,2.58,0,0,0-.86-.6,3.05,3.05,0,0,0-1.21-.21,2.67,2.67,0,0,0-1.08.21,2.2,2.2,0,0,0-.83.57,2.29,2.29,0,0,0-.54.87,3.2,3.2,0,0,0-.18,1.09,3.25,3.25,0,0,0,.18,1.1,2.49,2.49,0,0,0,1.37,1.43,2.67,2.67,0,0,0,1.08.2,3.7,3.7,0,0,0,1.06-.13,3.56,3.56,0,0,0,.71-.29v-1.38h-1.52v-1.72h3.32Z" transform="translate(-300.64 -484.92)"/></svg>
            </div>
        </div>
    </div>

</footer>
<div class="bottom_bar">
    <div class="container ">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <span>@<?php echo date('Y') ?> Young Venture Group</span>

            </div>
            <div class="col-sm-12 col-lg-6">
                <a class="privacy_modal">Privacy</a>

            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>

