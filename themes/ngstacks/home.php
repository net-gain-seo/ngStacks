<?php
    get_header();
?>
<div class="container">
    <div class="row">
        <div class="col col-lg-3 hidden-md-down">
            <h3 class="sidenav-title">
                Resources &amp; Support
            </h3>

            <div class="sidenav">
                <nav id="sidenav" class="subnav" role="navigation">

                   <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
                </nav>

                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>


        </div>
        <div class="col col-lg-9 col-md-12 post-content">

            <div class="embed-responsive embed-responsive-16by9 mb-5">
                <iframe class="embed-responsive-item" src="//player.vimeo.com/video/208251079?title=1&amp;byline=1&amp;portrait=0&amp;autoplay=0" allowfullscreen="allowfullscreen"></iframe>
            </div>

            <div class="blog-listing">
            <?php while ( have_posts() ) : the_post(); ?>
                <article>

                    <h2 class="post-title">
                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <em><?php the_excerpt(); ?></em>

                    <div style="font-weight: bold;font-style:italic;">Continue reading <a href="<?php the_permalink(); ?>">here...</a></div>

                </article>
            <?php endwhile; // End of the loop. ?>
            </div>

        </div>
    </div>
</div>

<?php
    get_footer();
