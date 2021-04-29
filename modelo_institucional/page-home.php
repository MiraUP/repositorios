<!-- Chama o header -->
<?php get_header(); ?>

    <div class="content-area">
        <main>
            <section class="slider">Slide/banner</section>
            <section class="services">serviços</section>
            <section class="middle-area container">
                <div class="row">
                    <section class="news col l8">
                        <?php
                            //Se houver algum post
                            if ( have_posts() ):
                                //Enquanto houver posts
                                while( have_posts() ):
                                    //Mostre o post
                                    the_post();
                        ?>

                            <article>
                                    <h2><?php the_title(); ?></h2>
                                    <p>
                                        Published in <?php echo get_the_date(); ?> 
                                        by <?php the_author_posts_link(); ?>
                                    </p>
                                    <p>Categories: <?php the_category(' | '); ?></p>
                                    <p><?php the_tags('Tags: ', ', '); ?></p>
                                    <?php the_content(); ?>
                            </article>

                        <?php
                                //Se não houver post
                                endwhile;
                            else:
                        ?>
                        
                        <p>Não há novidades por enquanto...</p>

                        <?php
                            endif;
                        ?>
                    </section>
                    <aside class="sibe-bar col l4">barra lateral</aside>
                </div>
            </section>
            <section class="map">mapa</section>
        </main>
    </div>

<!-- Chama o footer -->
<?php get_footer(); ?>