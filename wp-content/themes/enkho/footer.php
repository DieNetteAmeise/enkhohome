
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                        </ul>
                    </div>
                </div>
                <!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                        </ul>
                    </div>
                </div>
                <!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                        </ul>
                    </div>
                </div>
                <!--/.col-md-3-->
            </div>
        </div>
    </section>
    <!--/#bottom-->

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.top-bar-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; ENKHO Theme - alle Rechte vorbehalten.

                </div>
                <div class="col-sm-6">

                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'container' => '',
                            'menu_class' => 'pull-right' /* Klasse des ul-Elements (optional)*/
                        ));
                    ?>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/contactform/contactform.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/final.js"></script>

</body>

</html>
