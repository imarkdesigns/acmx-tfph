<?php get_header();

    global $post;

    switch ( $post->ID ) {

        default:
            $page = 'home';
            break;

    }

    if ( ! post_password_required() ) :

        get_template_part( _page.$page );

    else :

        $post_access .= '<main class="main" role="main">
            <section class="uk-section uk-section-muted">
                <div class="uk-container uk-container-small uk-height-meidum uk-flex uk-flex-middle uk-flex-center uk-text-center">
                    <article>
                        <span uk-icon="icon: lock; ratio: 5"></span>
                        <hr class="uk-divider-small uk-margin-auto">
                        '.get_the_content().'
                    </article>
                </div>
            </section>
        </main>';

        echo $post_access;

    endif;

get_footer();