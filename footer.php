<footer>
  <div class="container container-xxl">
    <div class="row">
      <div class="col-12-sm col-lg-3 footerlogo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-wh.svg" alt="ASGA logo" /><span class="faa">FAA CRS # 9A1R325B</span>
      </div>
      <div class="col-12-sm col-lg-3">
									<?php
										wp_nav_menu( array(

											'menu'				=>	'Footer Menu',
											'theme_location'	=>	'secondary',
											'container'			=>	'nav',
											'container_class'	=>	'',
											'container_id'		=>	'',
											'menu_class'		=>	'',

										));
									?>
      </div>
      <div class="col-12-sm col-lg-3">
        <h2>ADDRESS</h2>
        <address>
          Kendall Executive Airport<br>
          Hanger 249<br>
          Miami, Florida USA
        </address>
      </div>
      <div class="col-12-sm col-lg-3">
        <h2>CONTACT US</h2>
        <p class="contact">T: 305.253.0803 / 786.401.5556<br>E: <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#64;&#97;&#115;&#103;&#97;&#101;&#114;&#111;&#115;&#112;&#97;&#99;&#101;&#46;&#99;&#111;&#109;">&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#64;&#97;&#115;&#103;&#97;&#101;&#114;&#111;&#115;&#112;&#97;&#99;&#101;&#46;&#99;&#111;&#109;</a></p>
        <div class="social">
          <a href="https://instagram.com"><span class="iconify" data-icon="entypo-social:instagram-with-circle"></span></a>
          <a href="https://youtube.com"><span class="iconify" data-icon="entypo-social:youtube-with-circle"></span></a>
          <a href="https://facebook.com"><span class="iconify" data-icon="entypo-social:facebook-with-circle"></span></a>
          <a href="https://linkedin.com"><span class="iconify" data-icon="entypo-social:linkedin-with-circle"></span></a>
          <a href="https://twitter.com"><span class="iconify" data-icon="entypo-social:twitter-with-circle"></span></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
