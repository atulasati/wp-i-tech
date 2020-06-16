<footer class="footerNew">
    <div class="container">
        <div class="footerRow">
            <div class="footerCol footerCol-L">
                <div class="f-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></div>
            </div>
            <div class="footerCol footerCol-M">
                <h3>Asati Infotech</h3>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </div>
            <div class="footerCol footerCol-R">
                <h3>Contact Us</h3>
                <ul>
                    <li><span><i class="fa fa-map-marker"></i> Silver Market, RNT Road, Indore</span></li>
                    <li><span><i class="fas fa-phone-alt"></i><a href="tel:+919303558009" target="_blank">93035-58009</a></span></li>
                    <li><span><i class="fa fa-envelope"></i> <a href="mailto:info@asatiinfotech.com" target="_blank">info@asatiinfotech.com</a></span></li>
                    <li><span><i class="fab fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=+91-9303558009&text=hi" target="_blank">Whatsapp Chat</a></span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footerRowBottom ">
        <div class="container">
            <div class="copyright">&copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?></div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</body>

</html>
