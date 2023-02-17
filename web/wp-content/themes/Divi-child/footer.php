<?php
if (et_theme_builder_overrides_layout(ET_THEME_BUILDER_HEADER_LAYOUT_POST_TYPE) || et_theme_builder_overrides_layout(ET_THEME_BUILDER_FOOTER_LAYOUT_POST_TYPE)) {
    // Skip rendering anything as this partial is being buffered anyway.
    // In addition, avoids get_sidebar() issues since that uses
    // locate_template() with require_once.
    return;
}

/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action('et_after_main_content');

if ('on' === et_get_option('divi_back_to_top', 'false')) : ?>

    <span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if (!is_page_template('page-template-blank.php')) : ?>

    <footer id="main-footer">
        <?php get_sidebar('footer'); ?>


        <?php
        if (has_nav_menu('footer-menu')) : ?>

            <div id="et-footer-nav">
                <div class="container">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'depth' => '1',
                        'menu_class' => 'bottom-nav',
                        'container' => '',
                        'fallback_cb' => '',
                    ));
                    ?>
                </div>
            </div> <!-- #et-footer-nav -->

        <?php endif; ?>

        <div id="footer-bottom">
            <div class="container clearfix">

                <div id="footer-copyright" class="desktop">
                    <p>Copyright © <?php echo date('Y'); ?></p>
                    <p>All Rights Reserved by HelloWorld</p>
                </div>
                <div id="footer-contact">
                    <div id="social-links">
                        <ul>
                            <li class="social-icon linkedin">
                                <a target="_blank" href="https://www.linkedin.com/company/helloworld-devs">
                                    <img src="/helloworld/icons/linkedin-grey.svg" alt="linkedin"/>
                                </a>
                            </li>
                            <li class="social-icon github">
                                <a target="_blank" href="https://github.com/HelloWorldDevs">
                                    <img src="/helloworld/icons/github-grey.svg" alt="github"/>
                                </a>
                            </li>
                            <li class="social-icon twitter">
                                <a target="_blank" href="https://twitter.com/HelloWorldDevs">
                                    <img src="/helloworld/icons/twitter-grey.svg" alt="twitter"/>
                                </a>
                            </li>
                            <li class="social-icon facebook">
                                <a target="_blank" href="https://www.facebook.com/helloworlddevs">
                                    <img src="/helloworld/icons/facebook-grey.svg" alt="facebook"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div style="clear:both"></div>
                    <div id="contact-links">
                        <ul>
                            <li>
                                <a href="tel:1-503-770-0221">
                                    <span>(503) 770-0221</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@helloworlddevs.com">
                                    <span>info@helloworlddevs.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div style="clear:both"></div>
                <div id="footer-copyright" class="mobile large">
                    <p>Copyright © <?php echo date('Y'); ?></p>
                    <p>All Rights Reserved by HelloWorld</p>
                </div>

            </div>    <!-- .container -->
        </div>
    </footer> <!-- #main-footer -->
    </div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

</div> <!-- #page-container -->

<?php wp_footer(); ?>

<?php if (is_page(7)): ?>
<!--home page custom JS-->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/plugins.js"></script>
<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/extensions/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/extensions/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/extensions/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/extensions/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/extensions/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/extensions/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

<script type="text/javascript">




  var tpj = jQuery;
  tpj.noConflict();

  tpj(document).ready(function () {
    console.log("SLIDER!!!!");
    var apiRevoSlider = tpj('.tp-banner').show().revolution(
      {
        sliderType: "standard",
        jsFileLocation: "/wp-content/themes/Divi-child/scripts/extensions/rs-plugin/js/",
        sliderLayout: "fullwidth",
        dottedOverlay: "none",
        delay: 9000,
        navigation: {},
        gridwidth: 1200,
        gridheight: 600,
        lazyType: "none",
        shadow: 0,
        spinner: "off",
        autoHeight: "off",
        disableProgressBar: "on",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLimit: 0,
        debugMode: false,
        fallbacks: {
          simplifyAll: "off",
          disableFocusListener: false,
        },
        navigation: {
          keyboardNavigation: "off",
          keyboard_direction: "horizontal",
          mouseScrollNavigation: "off",
          onHoverStop: "off",
          touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
          },
          arrows: {
            style: "hermes",
            enable: true,
            hide_onmobile: false,
            hide_onleave: false,
            tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
            left: {
              h_align: "left",
              v_align: "center",
              h_offset: 10,
              v_offset: 0
            },
            right: {
              h_align: "right",
              v_align: "center",
              h_offset: 10,
              v_offset: 0
            }
          }
        }
      });

    apiRevoSlider.bind("revolution.slide.onloaded", function (e) {
      setTimeout(function () {
          console.log("2nd Message");
        SEMICOLON.slider.sliderParallaxDimensions();
      }, 200);
    });

    apiRevoSlider.bind("revolution.slide.onchange", function (e, data) {
        console.log("3rd Message");

      SEMICOLON.slider.revolutionSliderMenu();
    });
    $('.map-container')
      .click(function () {
        $(this).find('iframe').addClass('clicked')
      })
      .mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
      });
  }); //ready

</script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts.js"></script>

<?php endif; ?>


</body>
</html>