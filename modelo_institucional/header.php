<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo de Site MiraUP</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row valign-wrapper">
                    <section class="social-media col l6 m6 s12 hide-on-small-only">
                        <a class="btn-floating waves-effect waves-light"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn-floating waves-effect waves-light"><i class="fab fa-instagram"></i></a>
                        <a class="btn-floating waves-effect waves-light"><i class="fab fa-google-plus-g"></i></a>
                    </section>
                    <section class="search col l6 m6 s12">
                        <nav>
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field">
                                        <input id="search" type="search" required>
                                        <label class="label-icon" for="search">
                                            <i class="material-icons fas fa-search"></i>
                                        </label>
                                        <i class="material-icons fas fa-times"></i>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </section>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <nav>
                    <div class="nav-wrapper">
                        <a href="#!" class="brand-logo">Logo</a>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger right">
                            <i class="fas fa-bars material-icons"></i>
                        </a>

                        <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme_location'    => 'main_menu', /* Informando qual menu será usado neste local */
                                    'depth'             => 2, /* Quantidade de níveis */
                                    'menu_class'        => 'right hide-on-med-and-down'
                                ) 
                            );
                        ?>
                    </div>
                </nav>

                <?php 
                    wp_nav_menu( 
                        array( 
                            'theme_location'    => 'main_menu',
                            'depth'             => 2,
                            'menu_id'           => 'mobile-demo',
                            'menu_class'        => 'sidenav'
                        ) 
                    );
                ?>
            </div>           
        </section>
    </header>