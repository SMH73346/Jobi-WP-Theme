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
    <meta name="og:image" content="images/assets/ogg.png" />
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
      href="images/fav-icon/icon.png"
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
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="vendor/html5shiv.js"></script>
      <script src="vendor/respond.js"></script>
    <![endif]-->
	<?php wp_head() ?>
  </head>

  <body>
    <!-- ===================================================
    Loading Transition
==================================================== -->
    <div id="preloader">
      <div id="ctn-preloader" class="ctn-preloader">
        <div class="icon">
          <img
            src="images/loader.svg"
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

    <!-- 
		=============================================
				Theme Main Menu
		============================================== 
		-->
    <header class="theme-main-menu menu-overlay menu-style-one sticky-menu">
      <div class="inner-content position-relative">
        <div class="top-header">
          <div class="d-flex align-items-center">
            <div class="logo order-lg-0">
              <a href="index.html" class="d-flex align-items-center">
                <img src="images/logo/logo_01.png" alt="" />
              </a>
            </div>
            <!-- logo -->
            <div class="right-widget ms-auto order-lg-3">
              <ul class="d-flex align-items-center style-none">
                <li>
                  <a
                    href="/signup.html"
                    class="login-btn-one"
                    >Login</a
                  >
                </li>
                <li class="d-none d-md-block ms-4">
                  <a href="Find_A_Developer.html" class="btn-one"
                    >Hire Top Talents</a
                  >
                </li>
              </ul>
            </div>
            <!--/.right-widget-->
            <nav class="navbar navbar-expand-lg p0 ms-lg-5 ms-3 order-lg-2">
              <button
                class="navbar-toggler d-block d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center">
                  <li class="d-block d-lg-none">
                    <div class="logo">
                      <a href="index.html" class="d-block"
                        ><img src="images/logo/logo_01.png" alt="" width="100"
                      /></a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link"
                      href="/index.html"
                      role="button"
                    >
                      Home
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="/AboutUs.html"
                      role="button"
                      data-bs-toggle="dropdown"
                      data-bs-auto-close="outside"
                      aria-expanded="false"
                      >Resources
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="Hiring_And_Outsourceing_Guide.html"
                          class="dropdown-item"
                          ><span
                            >Guide to Hiring and Using Outsourced
                            Developers</span
                          ></a
                        >
                      </li>
                      <li>
                        <a
                          href="Job_Description_Templates.html"
                          class="dropdown-item"
                          ><span>Job Description Templates</span></a
                        >
                      </li>
                      <li>
                        <a href="Resource_Center.html" class="dropdown-item"
                          ><span>Resource Center</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="Frequently_Asked_Questions.html"
                          class="dropdown-item"
                          ><span>Frequently Asked Questions</span></a
                        >
                      </li>
                      <li>
                        <a href="AboutUs.html" class="dropdown-item"
                          ><span>About Jobi</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      data-bs-auto-close="outside"
                      aria-expanded="false"
                      >Apply for a Job
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="/Find_Jobs.html"
                          class="dropdown-item"
                          ><span>Jobi Jobs</span></a
                        >
                      </li>
                      <li>
                        <a href="Job_Benefits.html" class="dropdown-item"
                          ><span>Jobi Benefits</span></a
                        >
                      </li>
                      <li>
                        <a href="Hiring_Process.html" class="dropdown-item"
                          ><span>Jobi Hiring Process</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown mega-dropdown-sm">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      data-bs-auto-close="outside"
                      aria-expanded="false"
                    >
                      Find a Developer
                    </a>
                    <ul class="dropdown-menu">
                      <li class="row gx-1">
                        <div class="col-md-6 d-flex">
                          <div class="menu-column">
                            <h5 class="mega-menu-title">By Skill</h5>
                            <ul class="style-none mega-dropdown-list">
                              <li>
                                <a href="reactJs.html" class="dropdown-item"
                                  ><span>React.js</span></a
                                >
                              </li>
                              <li>
                                <a href="nodeJs.html" class="dropdown-item"
                                  ><span>Node.js</span></a
                                >
                              </li>
                              <li>
                                <a href="python.html" class="dropdown-item"
                                  ><span>Python</span></a
                                >
                              </li>
                              <li>
                                <a href="AWS.html" class="dropdown-item"
                                  ><span>AWS</span></a
                                >
                              </li>
                              <li>
                                <a href="Javascript.html" class="dropdown-item"
                                  ><span>Javascript</span></a
                                >
                              </li>
                              <li>
                                <a href="ReactNative.html" class="dropdown-item"
                                  ><span>React Native</span></a
                                >
                              </li>
                              <a href="Find_A_Developer.html">
                                See All Skills</a
                              >
                            </ul>
                          </div>
                          <!--/.menu-column -->
                        </div>
                        <div class="col-md-6">
                          <div class="menu-column">
                            <h5 class="mega-menu-title">By Role</h5>
                            <ul class="style-none mega-dropdown-list">
                              <!-- <div class="row row-cols-2">
                                <div class="col"> -->
                              <li>
                                <a href="Full-Stack.html" class="dropdown-item"
                                  ><span>Full-Stack Developer</span></a
                                >
                              </li>
                              <li>
                                <a href="Back-End.html" class="dropdown-item"
                                  ><span>Back-End Developer</span></a
                                >
                              </li>
                              <li>
                                <a href="Front-End.html" class="dropdown-item"
                                  ><span>Front-End Developer</span></a
                                >
                              </li>
                              <!-- </div>
                                <div class="col"> -->
                              <li>
                                <a href="Mobile.html" class="dropdown-item"
                                  ><span>Mobile Developer</span></a
                                >
                              </li>
                              <li>
                                <a href="App.html" class="dropdown-item"
                                  ><span>App Developer</span></a
                                >
                              </li>
                              <!-- </div>
                              </div> -->
                              <li><a href="ContactUs.html">See All Roles</a></li>
                            </ul>
                          </div>
                          <!--/.menu-column -->
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/ContactUs.html" role="button"
                      >Contact</a
                    >
                  </li>
                  <li class="d-md-none">
                    <a href="Find_A_Developer.html" class="btn-one w-100"
                      >Hire Top Talents</a
                    >
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <!--/.top-header-->
      </div>
      <!-- /.inner-content -->
    </header>
    <!-- /. End Theme-main-menu -->