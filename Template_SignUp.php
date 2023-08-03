<?php
//  Template Name: SignUp Template
//get_header();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="keywords"
      content="Digital marketing agency, Digital marketing company, Digital marketing services"
    />
    <meta
      name="description"
      content="Jobi is a beautiful website template designed for job board websites."
    />
    <meta property="og:site_name" content="Jobi" />
    <meta property="og:url" content="https://creativegigstf.com/" />
    <meta property="og:type" content="website" />
    <meta
      property="og:title"
      content="Jobi - Responsive Job Board HTML Template"
    />
    <meta name="og:image" content="<?php echo get_template_directory_uri(); ?>/images/assets/ogg.png" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#244034" />
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#244034" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#244034" />
    <title>Jobi - Responsive Job Board HTML Template</title>

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/png"
      sizes="56x56"
      href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/icon.png"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"
      media="all"
    />
    <!-- Main style sheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/css/style.min.css"
      media="all"
    />
    <!-- responsive style sheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo get_template_directory_uri(); ?>/css/responsive.css"
      media="all"
    />

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
      <script src="/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="/vendor/html5shiv.js"></script>
      <script src="/vendor/respond.js"></script>
    <![endif]-->
	<?php wp_head() ?>

    <style>
      /* @media(max-width: 767px) {
        #FAQs {
        display: none;
      }
      }
      @media (min-width: 767px) {
        #FAQ_S {
        display: none;
      }
      } */

    </style>
  </head>

  <body>
    <!-- ===================================================
    Loading Transition
==================================================== -->
    <div id="preloader">
      <div id="ctn-preloader" class="ctn-preloader">
        <div class="icon">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/loader.svg"
            alt=""
            class="m-auto d-block"
            width="60"
          />
        </div>
        <div class="txt-loading">
          <span data-text-preloader="j" class="letters-loading"> j </span>
          <span data-text-preloader="o" class="letters-loading"> o </span>
          <span data-text-preloader="b" class="letters-loading"> b </span>
          <span data-text-preloader="i" class="letters-loading"> i </span>
        </div>
      </div>
    </div>




         <!-- =============================================
		 Start Sign In Section
		============================================== -->
        <div class="container-fluid" style="height: 600px; width: 100vw;">
      <div class="container">
        <div class="row">
          <div class="col-6 FAQs">
            <img src="<?php echo get_template_directory_uri(); ?>/images/signin-background.png" alt="" />
          </div>
          <div class="col-12 col-md-6 mt-100 d-flex flex-column FAQ_S">
            <div class="d-flex">
              <h5 class="m-2"><a href="home"> <i class="fa-solid fa-arrow-left m-2"></i>Back to Home</a></h5>
            </div>
            <div class="display-flex flex-column">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_03.png" alt="Jobi logo" />
              <h2>SIGN-IN</h2>
            </div>
            <form>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email</label>
                <input type="email" id="form2Example1" class="form-control" />
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="form2Example2" class="form-control" />
              </div>
  
              <!-- Submit button -->
              <div class="display-flex mt-10 mb-10">
                <button type="button" class="btn btn-three mb-4">Sign in</button>
              </div>
              <!-- Simple link -->
              <div class="display-flex mt-10 mb-10">
                <a href="#!">Forgot password?</a>
              </div>
              <div class="row display-flex mt-10 mb-10">
                <div class="col-5 border-bottom"></div>
                <div class="col-2 display-flex">OR</div>
                <div class="col-5 border-bottom"></div>
              </div>
  
              <!-- Register buttons -->
              <div class="display-flex flex-column mt-20 mb-10">
                <p>or sign up with:</p>
                <button type="button" class="display-flex btn btn-four mx-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/icon/google.png" alt="" class="mr-5" />
                  Sign in with Google
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row text-md" style="background-color: #fc8459; color: #fff;">
        <footer class="display-flex p-25">
          © 2023 Jobi. All rights reserved.
        </footer>
      </div>
    </div>

        <!-- =============================================
			End Sign In Section
		============================================== -->


    <!-- =====================================================
     Start of Tawk.to Script
=====================================================-->
<script type="text/javascript">
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function () {
        var s1 = document.createElement("script"),
          s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = "https://embed.tawk.to/648152eecc26a871b021491b/1h2cio0i1";
        s1.charset = "UTF-8";
        s1.setAttribute("crossorigin", "*");
        s0.parentNode.insertBefore(s1, s0);
      })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- WOW js -->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/wow/wow.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/slick/slick.min.js"></script>
    <!-- Fancybox --> 
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
    <!-- Lazy -->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.lazy.min.js"></script>
    <!-- js Counter -->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.counterup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.waypoints.min.js"></script>
    <!-- Nice Select -->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/nice-select/jquery.nice-select.min.js"></script>
    <!-- validator js -->
    <script src="<?php echo get_template_directory_uri(); ?>/vendor/validator.js"></script>

    <!-- Fontawesome -->
    <script
      src="https://kit.fontawesome.com/4365bb836b.js"
      crossorigin="anonymous"
    ></script>

    <!-- Theme js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>
	<?php wp_footer() ?>
  </body>
</html>