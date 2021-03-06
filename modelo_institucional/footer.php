        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>

                <?php 
                    wp_nav_menu( 
                        array( 
                            'theme_location'    => 'footer_menu',
                            'depth'             => 2,
                            'menu_class'        => 'grey-text text-lighten-3'
                        ) 
                    );
                ?>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>