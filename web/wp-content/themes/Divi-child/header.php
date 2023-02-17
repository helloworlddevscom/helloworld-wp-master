<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php
	elegant_description();
	elegant_keywords();
	elegant_canonical();

	/**
	 * Fires in the head, before {@see wp_head()} is called. This action can be used to
	 * insert elements into the beginning of the head before any styles or scripts.
	 *
	 * @since 1.0
	 */
	do_action( 'et_head_meta' );

	$template_directory_uri = get_template_directory_uri();
?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>


	<?php wp_head(); ?>

     <style>
          .revo-slider-emphasis-text {
          font-size: 64px;
          font-weight: 700;
          letter-spacing: -1px;
          font-family: 'Raleway', sans-serif;
          padding: 15px 20px;
          /* border-top: 2px solid #FFF;
          border-bottom: 2px solid #FFF; */
          }

          .revo-slider-desc-text {
          font-size: 20px;
          font-family: 'Lato', sans-serif;
          width: 650px;
          text-align: center;
          line-height: 1.5;
          }

          .revo-slider-caps-text {
          font-size: 16px;
          font-weight: 400;
          letter-spacing: 3px;
          font-family: 'Raleway', sans-serif;
          }

          .tp-video-play-button {
          display: none !important;
          }

          .tp-caption {
          white-space: nowrap;
          }

     </style>


</head>
<body <?php body_class(); ?>>



<?php
	wp_body_open();

	$product_tour_enabled = et_builder_is_product_tour_enabled();
	$page_container_style = $product_tour_enabled ? ' style="padding-top: 0px;"' : ''; ?>

	<!-- Slider
        ============================================= -->
        <section id="slider" class="revslider-wrap slider-parallax clearfix with-header">
        <div class="slider-parallax-inner">
            <div class="tp-banner-container rev_slider_wrapper">
                <div class="tp-banner">
                    <ul>    <!-- SLIDE  -->
                        <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                            data-thumb="<?php echo get_stylesheet_directory_uri(); ?>/images/pdx-thumb.jpg" data-saveperformance="off"
                            data-title="Hello World!">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pdx.jpg" alt="kenburns6" data-bgposition="left 20%" data-kenburns="on"
                                 data-duration="9500" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100"
                                 data-bgpositionend="center bottom" data-rjs="3">
                            <div class="tp-screen"></div>


                            <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                                 data-x="500"
                                 data-y="200"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-customout="x:0;y:150;o:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1200"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 23; white-space: nowrap;">Hello!
                            </div>

                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                                 data-x="165"
                                 data-y="290"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-customout="x:0;y:150;o:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="1400"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn"
                                 style="z-index: 23; width: 750px; max-width: 750px; white-space: normal;">How can we help your
                            </div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                                 data-x="304"
                                 data-y="290"
                                 data-customin="x:0;y:50;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-customout="x:0;y:-50;z:0;o:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="3000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-end="5000"
                                 data-endeasing="Power4.easeIn"
                                 style="z-index: 23; width: 750px; max-width: 750px; white-space: normal;">agency?
                            </div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                                 data-x="308"
                                 data-y="290"
                                 data-customin="x:0;y:50;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-customout="x:0;y:-50;z:0;o:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="5000"
                                 data-end="7000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn"
                                 style="z-index: 23; width: 750px; max-width: 750px; white-space: normal;">start up?
                            </div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                                 data-x="314"
                                 data-y="290"
                                 data-customin="x:0;y:50;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-customout="x:0;y:150;o:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                 data-speed="800"
                                 data-start="7000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn"
                                 style="z-index: 23; width: 750px; max-width: 750px; white-space: normal;">company?
                            </div>

                        </li>


                        <!--<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500"-->
                        <!--data-thumb="images/pdx2-thumb.jpg" data-delay="10000" data-saveperformance="off"-->
                        <!--data-title="Junior Developers">-->
                        <!--&lt;!&ndash; MAIN IMAGE &ndash;&gt;-->
                        <!--<img src="images/pdx2.jpg" alt="kenburns6" data-bgposition="right center" data-kenburns="on"-->
                        <!--data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100"-->
                        <!--data-bgpositionend="left bottom">-->
                        <!--<div class="tp-screen"></div>-->
                        <!--&lt;!&ndash; LAYERS &ndash;&gt;-->

                        <!--&lt;!&ndash; LAYER NR. 2 &ndash;&gt;-->
                        <!--<div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"-->
                        <!--data-x="200"-->
                        <!--data-y="150"-->
                        <!--data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"-->
                        <!--data-speed="800"-->
                        <!--data-start="1500"-->
                        <!--data-easing="easeOutQuad"-->
                        <!--data-splitin="none"-->
                        <!--data-splitout="none"-->
                        <!--data-elementdelay="0.01"-->
                        <!--data-endelementdelay="0.1"-->
                        <!--data-endspeed="1000"-->
                        <!--data-endeasing="Power4.easeIn" style="z-index: 23; white-space: nowrap; color: #eee;">What to do with-->
                        <!--</div>-->

                        <!--<div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"-->
                        <!--data-x="200"-->
                        <!--data-y="180"-->
                        <!--data-customin="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"-->
                        <!--data-speed="600"-->
                        <!--data-start="1700"-->
                        <!--data-easing="easeOutCubic"-->
                        <!--data-splitin="chars"-->
                        <!--data-splitout="none"-->
                        <!--data-elementdelay="0.1"-->
                        <!--data-endelementdelay="0.1"-->
                        <!--data-endspeed="1000"-->
                        <!--data-endeasing="Power4.easeIn"-->
                        <!--style="z-index: 23; white-space: nowrap; color: #eee; line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;">So Many Junior Developers?-->
                        <!--</div>-->
                        <!--<div class="tp-caption tp-italic customin ltl tp-resizeme nopadding noborder"-->
                        <!--data-x="640"-->
                        <!--data-y="360"-->
                        <!--data-customin="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 50%;"-->
                        <!--data-speed="600"-->
                        <!--data-start="4600"-->
                        <!--data-easing="easeOutCubic"-->
                        <!--data-elementdelay="0.1"-->
                        <!--data-endelementdelay="0.1"-->
                        <!--data-endspeed="1000"-->
                        <!--data-endeasing="Power4.easeIn"-->
                        <!--style="z-index: 23; white-space: nowrap; color: #eee; line-height: 1.2; max-width: 450px; width: 450px; white-space: normal;">-->
                        <!--(We know)-->
                        <!--</div>-->
                        <!--</li>-->
                        <li class="dark" data-transition="slideup" data-slotamount="1" data-masterspeed="1000"
                            data-thumb="<?php echo get_stylesheet_directory_uri(); ?>/images/pdx3-thumb.jpg" data-fstransition="fade" data-fsmasterspeed="1000"
                            data-fsslotamount="7" data-duration="9500" data-saveperformance="off" data-title="Technologies">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pdx3.jpg" alt="Portland" data-bgposition="center center"
                                 data-duration="9500" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-screen"></div>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-8"
                                 data-x="900"
                                 data-y="107"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutQuad;"
                                 data-speed="700"
                                 data-start="2600"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 23; white-space: nowrap;"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/android.png" alt="Image"></div>

                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-7"
                                 data-x="800"
                                 data-y="267"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutQuad;"
                                 data-speed="700"
                                 data-start="2800"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 24;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/wp.png"
                                                                                          alt="Image"></div>
                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-7"
                                 data-x="690"
                                 data-y="397"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutQuad;"
                                 data-speed="700"
                                 data-start="2200"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 24;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/js.png"
                                                                                          alt="Image"></div>

                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-6"
                                 data-x="670"
                                 data-y="107"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutCubic;"
                                 data-speed="700"
                                 data-start="3000"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 25;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/apple.png"
                                                                                          alt="Image"></div>

                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-5"
                                 data-x="940"
                                 data-y="307"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutCubic;"
                                 data-speed="700"
                                 data-start="3200"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 26;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/drupal.png"
                                                                                          alt="Image"></div>

                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-4"
                                 data-x="640"
                                 data-y="277"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutCubic;"
                                 data-speed="700"
                                 data-start="3400"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 27;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/220px-Laravel.png"
                                                                                          alt="Image"></div>

                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-3"
                                 data-x="900"
                                 data-y="237"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutCubic;"
                                 data-speed="700"
                                 data-start="3600"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 28;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/php.png"
                                                                                          alt="Image"></div>

                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-2"
                                 data-x="780"
                                 data-y="157"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutCubic;"
                                 data-speed="700"
                                 data-start="3800"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 29;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/react.png"
                                                                                          alt="Image"></div>

                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-1"
                                 data-x="700"
                                 data-y="237"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutCubic;"
                                 data-speed="700"
                                 data-start="4000"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 30;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/redux.png"
                                                                                          alt="Image"></div>

                            <div class="tp-caption customin ltl tp-resizeme rs-parallaxlevel-1"
                                 data-x="825"
                                 data-y="397"
                                 data-customin="x:0;y:-250;z:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;s:700;e:Power4.easeOutCubic;"
                                 data-speed="700"
                                 data-start="4300"
                                 data-easing="easeOutCubic"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 30;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech/vue.png"
                                                                                          alt="Image"></div>

                            <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text"
                                 data-x="190"
                                 data-y="120"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1200"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 31; white-space: nowrap;">Modern Technologies?
                            </div>

                            <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder uppercase"
                                 data-x="187"
                                 data-y="140"
                                 data-customin="x:5;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:5;skewY:0;opacity:0;s:800;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1400"
                                 data-easing="easeOutQuad"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 31; font-size: 56px;white-space: nowrap;">We can do that
                            </div>

                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft"
                                 data-x="190"
                                 data-y="240"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:800;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1600"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 31; max-width: 550px; white-space: normal;">No matter the technology, we can help
                            </div>


                        </li>
                    </ul>
                </div>
            </div>
			</div>
    </section><!-- END REVOLUTION SLIDER -->

	<div id="page-container"<?php echo et_core_intentionally_unescaped( $page_container_style, 'fixed_string' ); ?>>
<?php
	if ( $product_tour_enabled || is_page_template( 'page-template-blank.php' ) ) {
		return;
	}

	$et_secondary_nav_items = et_divi_get_top_nav_items();

	$et_phone_number = $et_secondary_nav_items->phone_number;

	$et_email = $et_secondary_nav_items->email;

	$et_contact_info_defined = $et_secondary_nav_items->contact_info_defined;

	$show_header_social_icons = $et_secondary_nav_items->show_header_social_icons;

	$et_secondary_nav = $et_secondary_nav_items->secondary_nav;

	$et_top_info_defined = $et_secondary_nav_items->top_info_defined;

	$et_slide_header = 'slide' === et_get_option( 'header_style', 'left' ) || 'fullscreen' === et_get_option( 'header_style', 'left' ) ? true : false;
?>

	<?php if ( $et_top_info_defined && ! $et_slide_header || is_customize_preview() ) : ?>
		<?php ob_start(); ?>
		<div id="top-header"<?php echo $et_top_info_defined ? '' : 'style="display: none;"'; ?>>
			<div class="container clearfix">

			<?php if ( $et_contact_info_defined ) : ?>

				<div id="et-info">
				<?php if ( '' !== ( $et_phone_number = et_get_option( 'phone_number' ) ) ) : ?>
					<span id="et-info-phone"><?php echo et_core_esc_previously( et_sanitize_html_input_text( $et_phone_number ) ); ?></span>
				<?php endif; ?>

				<?php if ( '' !== ( $et_email = et_get_option( 'header_email' ) ) ) : ?>
					<a href="<?php echo esc_attr( 'mailto:' . $et_email ); ?>"><span id="et-info-email"><?php echo esc_html( $et_email ); ?></span></a>
				<?php endif; ?>

				<?php
				if ( true === $show_header_social_icons ) {
					get_template_part( 'includes/social_icons', 'header' );
				} ?>
				</div> <!-- #et-info -->

			<?php endif; // true === $et_contact_info_defined ?>

				<div id="et-secondary-menu">
				<?php
					if ( ! $et_contact_info_defined && true === $show_header_social_icons ) {
						get_template_part( 'includes/social_icons', 'header' );
					} else if ( $et_contact_info_defined && true === $show_header_social_icons ) {
						ob_start();

						get_template_part( 'includes/social_icons', 'header' );

						$duplicate_social_icons = ob_get_contents();

						ob_end_clean();

						printf(
							'<div class="et_duplicate_social_icons">
								%1$s
							</div>',
							et_core_esc_previously( $duplicate_social_icons )
						);
					}

					if ( '' !== $et_secondary_nav ) {
						echo et_core_esc_wp( $et_secondary_nav );
					}

					et_show_cart_total();
				?>
				</div> <!-- #et-secondary-menu -->

			</div> <!-- .container -->
		</div> <!-- #top-header -->
	<?php
		$top_header = ob_get_clean();

		/**
		 * Filters the HTML output for the top header.
		 *
		 * @since 3.10
		 *
		 * @param string $top_header
		 */
		echo et_core_intentionally_unescaped( apply_filters( 'et_html_top_header', $top_header ), 'html' );
	?>
	<?php endif; // true ==== $et_top_info_defined ?>

	<?php if ( $et_slide_header || is_customize_preview() ) : ?>
		<?php ob_start(); ?>
		<div class="et_slide_in_menu_container">
			<?php if ( 'fullscreen' === et_get_option( 'header_style', 'left' ) || is_customize_preview() ) { ?>
				<span class="mobile_menu_bar et_toggle_fullscreen_menu"></span>
			<?php } ?>

			<?php
				if ( $et_contact_info_defined || true === $show_header_social_icons || false !== et_get_option( 'show_search_icon', true ) || class_exists( 'woocommerce' ) || is_customize_preview() ) { ?>
					<div class="et_slide_menu_top">

					<?php if ( 'fullscreen' === et_get_option( 'header_style', 'left' ) ) { ?>
						<div class="et_pb_top_menu_inner">
					<?php } ?>
			<?php }

				if ( true === $show_header_social_icons ) {
					get_template_part( 'includes/social_icons', 'header' );
				}

				et_show_cart_total();
			?>
			<?php if ( false !== et_get_option( 'show_search_icon', true ) || is_customize_preview() ) : ?>
				<?php if ( 'fullscreen' !== et_get_option( 'header_style', 'left' ) ) { ?>
					<div class="clear"></div>
				<?php } ?>
				<form role="search" method="get" class="et-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
						printf( '<input type="search" class="et-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
							esc_attr__( 'Search &hellip;', 'Divi' ),
							get_search_query(),
							esc_attr__( 'Search for:', 'Divi' )
						);

						/**
						 * Fires inside the search form element, just before its closing tag.
						 *
						 * @since ??
						 */
						do_action( 'et_search_form_fields' );
					?>
					<button type="submit" id="searchsubmit_header"></button>
				</form>
			<?php endif; // true === et_get_option( 'show_search_icon', false ) ?>

			<?php if ( $et_contact_info_defined ) : ?>

				<div id="et-info">
				<?php if ( '' !== ( $et_phone_number = et_get_option( 'phone_number' ) ) ) : ?>
					<span id="et-info-phone"><?php echo et_core_esc_previously( et_sanitize_html_input_text( $et_phone_number ) ); ?></span>
				<?php endif; ?>

				<?php if ( '' !== ( $et_email = et_get_option( 'header_email' ) ) ) : ?>
					<a href="<?php echo esc_attr( 'mailto:' . $et_email ); ?>"><span id="et-info-email"><?php echo esc_html( $et_email ); ?></span></a>
				<?php endif; ?>
				</div> <!-- #et-info -->

			<?php endif; // true === $et_contact_info_defined ?>
			<?php if ( $et_contact_info_defined || true === $show_header_social_icons || false !== et_get_option( 'show_search_icon', true ) || class_exists( 'woocommerce' ) || is_customize_preview() ) { ?>
				<?php if ( 'fullscreen' === et_get_option( 'header_style', 'left' ) ) { ?>
					</div> <!-- .et_pb_top_menu_inner -->
				<?php } ?>

				</div> <!-- .et_slide_menu_top -->
			<?php } ?>

			<div class="et_pb_fullscreen_nav_container">
				<?php
					$slide_nav = '';
					$slide_menu_class = 'et_mobile_menu';

					$slide_nav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ) );
					$slide_nav .= wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ) );
				?>

				<ul id="mobile_menu_slide" class="<?php echo esc_attr( $slide_menu_class ); ?>">

				<?php
					if ( '' === $slide_nav ) :
				?>
						<?php if ( 'on' === et_get_option( 'divi_home_link' ) ) { ?>
							<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'Divi' ); ?></a></li>
						<?php }; ?>

						<?php show_page_menu( $slide_menu_class, false, false ); ?>
						<?php show_categories_menu( $slide_menu_class, false ); ?>
				<?php
					else :
						echo et_core_esc_wp( $slide_nav ) ;
					endif;
				?>

				</ul>
			</div>
		</div>
	<?php
		$slide_header = ob_get_clean();

		/**
		 * Filters the HTML output for the slide header.
		 *
		 * @since 3.10
		 *
		 * @param string $top_header
		 */
		echo et_core_intentionally_unescaped( apply_filters( 'et_html_slide_header', $slide_header ), 'html' );
	?>
	<?php endif; // true ==== $et_slide_header ?>

	<?php ob_start(); ?>




		<header id="main-header" data-height-onload="<?php echo esc_attr( et_get_option( 'menu_height', '66' ) ); ?>">
			<div class="container clearfix et_menu_container">
			<?php
				$logo = ( $user_logo = et_get_option( 'divi_logo' ) ) && ! empty( $user_logo )
					? $user_logo
					: $template_directory_uri . '/images/logo.png';

				ob_start();
			?>
				<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" data-height-percentage="<?php echo esc_attr( et_get_option( 'logo_height', '54' ) ); ?>" />
					</a>
				</div>
			<?php
				$logo_container = ob_get_clean();

				/**
				 * Filters the HTML output for the logo container.
				 *
				 * @since 3.10
				 *
				 * @param string $logo_container
				 */
				echo et_core_intentionally_unescaped( apply_filters( 'et_html_logo_container', $logo_container ), 'html' );
			?>
				<div id="et-top-navigation" data-height="<?php echo esc_attr( et_get_option( 'menu_height', '66' ) ); ?>" data-fixed-height="<?php echo esc_attr( et_get_option( 'minimized_menu_height', '40' ) ); ?>">
					<?php if ( ! $et_slide_header || is_customize_preview() ) : ?>
						<nav id="top-menu-nav">
						<?php
							$menuClass = 'nav';
							if ( 'on' === et_get_option( 'divi_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
							$primaryNav = '';

							$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => 'top-menu', 'echo' => false ) );
							if ( empty( $primaryNav ) ) :
						?>
							<ul id="top-menu" class="<?php echo esc_attr( $menuClass ); ?>">
								<?php if ( 'on' === et_get_option( 'divi_home_link' ) ) { ?>
									<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'Divi' ); ?></a></li>
								<?php }; ?>

								<?php show_page_menu( $menuClass, false, false ); ?>
								<?php show_categories_menu( $menuClass, false ); ?>
							</ul>
						<?php
							else :
								echo et_core_esc_wp( $primaryNav );
							endif;
						?>
						</nav>
					<?php endif; ?>

					<?php
					if ( ! $et_top_info_defined && ( ! $et_slide_header || is_customize_preview() ) ) {
						et_show_cart_total( array(
							'no_text' => true,
						) );
					}
					?>

					<?php if ( $et_slide_header || is_customize_preview() ) : ?>
						<span class="mobile_menu_bar et_pb_header_toggle et_toggle_<?php echo esc_attr( et_get_option( 'header_style', 'left' ) ); ?>_menu"></span>
					<?php endif; ?>

					<?php if ( ( false !== et_get_option( 'show_search_icon', true ) && ! $et_slide_header ) || is_customize_preview() ) : ?>
					<div id="et_top_search">
						<span id="et_search_icon"></span>
					</div>
					<?php endif; // true === et_get_option( 'show_search_icon', false ) ?>

					<?php

					/**
					 * Fires at the end of the 'et-top-navigation' element, just before its closing tag.
					 *
					 * @since 1.0
					 */
					do_action( 'et_header_top' );

					?>
				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
						printf( '<input type="search" class="et-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
							esc_attr__( 'Search &hellip;', 'Divi' ),
							get_search_query(),
							esc_attr__( 'Search for:', 'Divi' )
						);

						/**
						 * Fires inside the search form element, just before its closing tag.
						 *
						 * @since ??
						 */
						do_action( 'et_search_form_fields' );
					?>
					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->
	<?php
		$main_header = ob_get_clean();

		/**
		 * Filters the HTML output for the main header.
		 *
		 * @since 3.10
		 *
		 * @param string $main_header
		 */
		echo et_core_intentionally_unescaped( apply_filters( 'et_html_main_header', $main_header ), 'html' );
	?>







		<div id="et-main-area">
	<?php
		/**
		 * Fires after the header, before the main content is output.
		 *
		 * @since 3.10
		 */
		do_action( 'et_before_main_content' );
