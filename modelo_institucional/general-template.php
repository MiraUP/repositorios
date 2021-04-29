<?php
/*
Template Name: Template Geral
*/
?>

<!-- Chama o header -->
<?php get_header(); ?>

    <div class="content-area">
        <main>

            <!-- Imagem de cabeçario -->
            <section class="img-cabecario">
                <img class="responsive-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Imagem de cabeçario" />
            </section>

            <section class="middle-area container">
                <div class="row">
                    <section class="news col l12">
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
                </div>
            </section>
        </main>
    </div>

<!-- Chama o footer -->
<?php get_footer(); ?>