<?php
   include 'config/constants.php';
?>

<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="application-name" content="official">
        <meta name="apple-mobile-web-app-title" content="<?= $data->appCode;?> - <?= $data->companyName;?>">
        <meta name="msapplication-starturl" content="<?= BASE;?>">
        <title><?= $data->appCode;?> - <?= $data->companyName;?></title>
        <meta name="site-url" content="<?= BASE;?>">
        <meta name="description" content="PT. Jamkrida Banten adalah Perusahaan Penjamin Kredit Daerah Banten yang merupakan Badan Usaha Milik Daerah (BUMD) Provinsi Banten dan ditetapkan melalui Peraturan Daerah No.9 Tahun 2011 serta telah mendapatkan Ijin Usaha Pejaminan dari Otoritas Jasa Keuangan dengan Nomor: Kep.05/D.05/2013, yang bergerak di bidang keuangan dengan kegiatan usaha pokoknya melakukan penjaminan kredit.">
        <meta name="keywords" content="app, web, jb, jamkrida, banten, jamkrida banten, e-callendar">
        <meta name="author" content="Uben Wisnu">
        <meta property="og:locale" content="id_ID" />
        <meta property="og:url" content="<?= BASE;?>"/>
        <meta property="og:media" content="<?= BASE;?>media/"/>
        <meta property="og:type" content="PT"/>
        <meta property="og:site_name" content="<?= $data->appCode;?> - <?= $data->companyName;?>">
        <meta property="og:title" content="<?= $data->appCode;?> - <?= $data->companyName;?>"/>
        <meta property="og:description" content="<?= $data->companyDescription;?>"/>
        <meta property="og:image" content="<?= BASE;?>favicon.ico"/>
        <meta property="og:image:width" content="800" />
        <meta property="og:image:height" content="800" />

        <!-- Library Css-->
        <link href="<?= BASE;?>assets/libs/animate/animate.compat.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE;?>assets/libs/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE;?>assets/libs/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />

        <!-- Web Fonts  -->
      	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

        <!-- App Css-->
        <link id="bootstrap-style" href="<?= BASE;?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE;?>assets/css/theme/theme.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE;?>assets/css/theme/theme-elements.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE;?>assets/css/theme/theme-blog.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE;?>assets/css/theme/theme-shop.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE;?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE;?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?= BASE;?>assets/css/custom.css" rel="stylesheet" type="text/css" />

        <!-- App favicon -->
        <link href="<?= BASE;?>favicon.ico" rel="shortcut icon" type="image/ico" />

        <!-- Started Js -->
        <script src="<?= BASE;?>assets/libs/modernizr/modernizr.min.js" type="text/javascript"></script>

        <style media="screen">
            .custom-header-bar:before {
                content: '';
                position: absolute;
                top: 0;
                bottom: 0;
                right: 10px;
                width: 45vw;
                background-image: linear-gradient(150deg, #0088cc 0%, #0088cc 30%, #0169fe 70%, #0169fe 100%);
                border-radius: 4px;
                box-shadow: 0 0 60px rgba(0, 0, 0, 0.06);
            }

            @media (max-width: 1200px) {
                .custom-header-bar:before {
                    width: 110vw;
                }
            }

            .highlighted-word.highlighted-word-animation-1:after {
                background: url(<?= BASE.'media/image/shape/pencil-orange-line.png';?>)!important;
                background-repeat: no-repeat!important;
            }
        </style>

    </head>
    <body data-plugin-page-transition>

        <div class="body">
        		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
          			<div class="header-body border-top-0">
            				<div class="header-container container">
              					<div class="header-row">
                						<div class="header-column justify-content-start d-lg-none">
                  							<div class="header-row mt-2">
                    								<div class="header-logo">
                      									<a href="<?= BASE;?>">
                        										<img width="150" data-sticky-width="100" data-sticky-top="0" src="<?= BASE;?>media/image/logo/landscape-dark.png" alt="">
                      									</a>
                    								</div>
                  							</div>
                						</div>

                						<div class="header-column justify-content-center align-items-end">
                  							<div class="header-nav justify-content-lg-center p-0">
                    								<div class="header-nav header-nav-links">
                      									<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-dropdown-center header-nav-main-dropdown-center-bottom header-nav-main-effect-3 header-nav-main-sub-effect-1">
                        										<nav class="collapse">
                          											<ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
                                                    <li class="order-1"><a href="https://jamkridabanten.co.id/">Website</a></li>

                            												<li class="dropdown order-6">
                              													<a class="dropdown-item dropdown-toggle" href="javascript:void(0);">Kalender</a>
                              													<ul class="dropdown-menu">
                                														<li><a class="dropdown-item" href="<?= BASE;?>">2022</a></li>
                              													</ul>
                            												</li>

                            												<li class="align-items-center d-none d-lg-flex order-5 px-5 mx-2">
                              													<span class="header-logo">
                                														<a href="<?= BASE;?>" class="w-100 text-center">
                                  															<img width="150" data-sticky-width="100" data-sticky-top="72" src="<?= BASE;?>media/image/logo/landscape-dark.png" alt="">
                                														</a>
                              													</span>
                            												</li>
                          											</ul>
                        										</nav>
                      									</div>
                      									<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                        										<i class="fas fa-bars"></i>
                      									</button>
                    								</div>
                  							</div>
                						</div>

                						<div class="header-column justify-content-end d-none d-lg-flex"></div>
              					</div>
            				</div>
          			</div>
        		</header>

        		<div role="main" class="main">
                <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(<?= BASE;?>media/image/background/hero.png); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
                    <div class="section-angled-layer-bottom" style="padding: 8rem 0;background-color: #24252A!important"></div>
                    <div class="container ">
                        <div class="row align-items-center pt-3">
                            <div class="col-lg-4">
                                <h5 class="text-primary font-weight-bold mb-1"><?= $data->appCode;?></h5>
                                <h1 class="font-weight-bold text-12 line-height-2 mb-3">Kalender <span><span class="d-inline-block text-primary highlighted-word highlighted-word-rotate highlighted-word-animation-1 highlighted-word-animation-1-no-animate alternative-font-3 font-weight-bold text-1 ms-2"><?= isset($_GET['year']) ? $_GET['year'] : date('Y');?></span></span></h1>
                                <p class="custom-font-size-1 text-justify mb-5">
                                    Sebagai informasi publik, berikut ini adalah <strong>Kalender</strong> pada tahun <strong><?= isset($_GET['year']) ? $_GET['year'] : date('Y');?></strong> yang sudah ditetapkan.
                                </p>
                            </div>

                            <div class="col-lg-8">
                                <div class="position-relative border-width-5 border-color-light border border-radius" data-remove-min-height style="min-height: 446px;">
                                    <div class="owl-carousel nav-inside show-nav-hover dots-inside mb-0" data-plugin-options="{'items': 1, 'loop': true, 'autoplay': false, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'nav': true, 'dots': true, 'animateIn': 'flipInX', 'animateOut': 'slideOutDown'}">
                                        <?php
                                          $request = (object) [
                                              'year'  => isset($_GET['year']) ? $_GET['year'] : date('Y'),
                                          ];

                                          for ($i = 1; $i <= 12; $i++) {
                                            echo '<div>
                                                      <img src="'.BASE.'media/image/calendar/'.$request->year.'/'.$i.'.jpg" data-thumb="'.BASE.'media/image/calendar/'.$request->year.'/'.$i.'.jpg" alt="">
                                                  </div>';
                                          }
                                        ?>
                        						</div>
                                </div>
                                <div id="home-intro" class="home-intro home-intro-compact bg-primary border-radius-0 mt-0" style="padding: 10px!important">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="text-center"><span class="text-white">Geser untuk melihat bulan berikutnya</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-6 col-xl-5 custom-header-bar position-relative py-4 pe-5 z-index-2">
                              <div>
                                <div class="star-rating-wrap d-flex align-items-center justify-content-center position-relative text-dark text-5 py-2 mb-2" style="color: #f5de11!important">
                                    <i class="fas fa-star"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i>
                                </div>

                                <h4 class="position-relative text-center font-weight-bold text-7 line-height-2">Butuh Penjaminan?</h4>

                                <p class="position-relative text-center font-weight-normal mb-1">Hanya di <?= $data->companyName;?>, bukan yang lain!</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </section>
        		</div>
            <!-- end main -->

            <footer id="footer" class="bg-color-dark-scale-2 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
          			<div class="container text-center my-3 py-5">
          				<a href="<?= BASE;?>">
          					<img src="<?= BASE;?>media/image/logo/landscape-light.png" data-src="<?= BASE;?>media/image/logo/landscape-light.png" width="150" class="appear-animation lazyload mb-4" alt="" data-appear-animation="fadeIn" data-appear-animation-delay="300">
          				</a>
          				<p class="text-4 mb-4"><?= $data->companyAddress;?></p>

                  <ul class="social-icons social-icons-big social-icons-dark-2">
                      <li class="social-icons-facebook">
        									<a href="https://www.facebook.com/jamkridabanten" target="_blank" title="facebook"><i class="mdi mdi-facebook"></i></a>
      								</li>
                      <li class="social-icons-instagram">
        									<a href="https://www.instagram.com/jamkrida_banten" target="_blank" title="instagram"><i class="mdi mdi-instagram"></i></a>
      								</li>
                      <li class="social-icons-twitter">
        									<a href="https://www.twitter.com/jamkridabanten" target="_blank" title="twitter"><i class="mdi mdi-twitter"></i></a>
      								</li>
                      <li class="social-icons-youtube">
        									<a href="https://www.youtube.com/jamkridabanten" target="_blank" title="youtube"><i class="mdi mdi-youtube"></i></a>
      								</li>
    							</ul>
          			</div>
          			<div class="copyright bg-dark py-4">
          				<div class="container text-center py-2">
          					<p class="mb-0 text-2"><?= $data->appCopyright;?></p>
          				</div>
          			</div>
        		</footer>
      	</div>
        <!-- end-body -->

        <!-- Plugin js-->
        <script src="<?= BASE;?>assets/libs/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/libs/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Library js-->
        <script src="<?= BASE;?>assets/libs/jquery.appear/jquery.appear.min.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/libs/jquery.easing/jquery.easing.min.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/libs/jquery.cookie/jquery.cookie.min.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/libs/lazysizes/lazysizes.min.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/libs/isotope/jquery.isotope.min.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/libs/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/libs/vide/jquery.vide.min.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/libs/vivus/vivus.min.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="<?= BASE;?>assets/js/theme.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/js/theme.init.js" type="text/javascript"></script>
        <script src="<?= BASE;?>assets/js/app.js" type="text/javascript"></script>

    </body>
</html>
