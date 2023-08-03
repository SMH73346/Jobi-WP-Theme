<?php
//  Template Name: Find_Jobs Template
 get_header(); ?>


    <!-- 
		=============================================
			Header Section
		============================================== 
		-->
        <section class="border-bottom pt-50 pb-20">
      <div class="container pt-200 pb-100">
        <div class="row display-flex flex-column">
          <div class="col-12 display-flex flex-column">
            <h2 class="bold header mb-80" style="font-size: 135px !important; line-height: 150px;">
              <span class="heading-color">Careers</span> <span>not Gigs</span>
            </h2>
            <p class="text-lg mt-15">Be a professional with passion.</p>
          </div>
          <div class="col display-flex flex-column">
            <div class="row display-flex flex-column">
              <div class="col display-flex FAQ_S" >
                <a href="#" class="btn-three m-20">Python Dev</a>
                <a href="#" class="btn-three m-20">React Dev</a>
                <a href="#" class="btn-three m-20">JavaScript Dev</a>
                <a href="#" class="btn-three m-20">Wordpress Dev</a>
              </div>
              <div class="col display-flex FAQ_S" >
                <a href="#" class="btn-three m-20">UX Designer</a>
                <a href="#" class="btn-three m-20">PHP Dev</a>
                <a href="#" class="btn-three m-20">SQL Dev</a>
                <a href="#" class="btn-three m-20">QA Tester</a>
              </div>
              <div class="col display-flex">
                <a href="#" class="btn-four m-20">APPLY NOW</a>
                <a href="#" class="btn-link m-20"
                  >See available opportunities</a
                >
              </div>
            </div>
          </div>
        </div>

        <img
          src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg"
          data-src="images/shape/shape_02.svg"
          alt=""
          class="lazy-img shapes shape_01"
        />
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg"
          data-src="images/shape/shape_03.svg"
          alt=""
          class="lazy-img shapes shape_02"
        />
      </div>
    </section>

    <!-- =============================================
			Productivity Performance
		============================================== -->
    <section
      class="border-bottom pt-20 pb-20"
      style="background-color: black; color: white"
    >
      <div class="container">
        <div class="row row-cols-4 display-flex">
          <div class="col p-15 display-flex flex-column">
            <h3 class="header-3">People Productivity Performance</h3>
          </div>
          <div
            class="col p-15 display-flex flex-column"
            style="border-right: 2px solid white"
          >
            <h4>YEARS IN BUSINESS</h4>
            <h2>12</h2>
          </div>
          <div
            class="col p-15 display-flex flex-column"
            style="border-right: 2px solid white"
          >
            <h4>OFFICE LOCATIONS</h4>
            <h2>05</h2>
          </div>
          <div class="col p-15 display-flex flex-column">
            <h4>OPEN POSITIONS</h4>
            <h2>100</h2>
          </div>
        </div>
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg"
        data-src="images/shape/shape_05.svg"
        alt=""
        class="lazy-img shapes shape_01"
      />
    </section>
    <!-- End Productivity Performance Section-->
    <!--  ============================================= -->

    <!-- =============================================
    Get Hired in 3 Quick Easy Steps Section
==============================================  -->
    <section class="border-bottom pt-100 pb-100">
      <div>
        <div class="row row-cols-1 m-30">
          <div class="col mb-30">
            <div class="display-flex flex-column container">
              <h3>Get Hired in 3 Quick Easy Steps</h3>
              <p class="p-0">
                If you’re ready to join our team of amazing developers, apply
                now!
              </p>
              <p class="p-0">
                Don’t miss this opportunity to work with CoDev. Apply today and
                start your remote career with us!!
              </p>
              <a href="#" class="btn-four">
                Watch Video
                <i class="fa-solid fa-play"></i>
              </a>
            </div>
          </div>
          <div class="col container-fluid">
            <div class="row d-flex justify-content-evenly">
              <div class="col-4 border-radius-5 shadow p-15">
                <div class="d-flex align-items-center mb-10">
                  <span
                    style="width: 60px; height: 60px"
                    class="bg-color border-radius-50 p-25 mr-5 display-flex"
                    ><i
                      class="fa-solid fa-address-card fa-2xl"
                      style="color: #ffffff"
                    ></i
                  ></span>
                  <h3 class="ml-5 bold">Initial Screening</h3>
                </div>
                <div>
                  <p class="p-0">
                    Our talent acquisition specialists will first take a look at
                    your qualifications, and then get in touch with you for an
                    initial interview and other necessary assessments.
                  </p>
                </div>
              </div>
              <div
                class="col-4 border-radius-5 shadow position-relative top-60 p-15"
              >
                <div class="d-flex align-items-center mb-10">
                  <span
                    style="width: 60px; height: 60px"
                    class="bg-color border-radius-50 p-25 mr-5 display-flex"
                    ><i
                      class="fa-solid fa-user fa-2xl"
                      style="color: #ffffff"
                    ></i>
                  </span>
                  <h3 class="ml-5">Client Interview</h3>
                </div>
                <div>
                  <p class="p-0">
                    Once you’ve passed the initial screening, you’ll then have a
                    client interview where you will talk directly with the
                    client and answer any questions they may have related to the
                    position you’re applying for.
                  </p>
                </div>
              </div>
              <div class="col-4 border-radius-5 shadow p-15">
                <div class="d-flex align-items-center mb-10">
                  <span
                    style="width: 60px; height: 60px"
                    class="bg-color border-radius-50 p-25 mr-5 display-flex"
                    ><i
                      class="fa-solid fa-handshake fa-2xl"
                      style="color: #ffffff"
                    ></i
                  ></span>
                  <h3 class="ml-5">Job Offer</h3>
                </div>
                <div>
                  <p class="p-0">
                    After a thorough evaluation and a go signal from the client,
                    you’re in! Welcome to CoDev! Our sourcing team will fill you
                    in on all the details you need for your first day on the
                    job.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg"
        data-src="images/shape/shape_05.svg"
        alt=""
        class="lazy-img shapes shape_01"
      />
    </section>
    <!-- End Get Hired in 3 Quick Easy Steps Section-->
    <!--  ============================================= -->

    <!-- =============================================
   Why Join CoDev
==============================================  -->
    <section
      class="border-bottom bg-color position-relative pt-100 xl-pt-120 lg-pt-80 pb-140 xl-pb-120 lg-pb-60"
    >
      <div class="container">
        <div class="row">
          <div
            class="col-xl-6 col-lg-6 col-md-11 mt-10 mb-10 order-lg-first order-last"
          >
            <h3 class="mt-20 mb-20">Why Join CoDev</h3>
            <div class="row row-cols-1">
              <div class="col mt-10 mb-10">
                <h4>
                  <span class="border-radius-50 p-10 bg-color mr-5">1</span
                  >Competitive Salary & Benefits
                </h4>
                <p>
                  We value our people, we make sure that they are well taken
                  care of and of course, well compensated. We offer very
                  competitive salary packages along with a slew of benefits,
                  including:
                </p>
                <div>
                  <a href="#" class="btn-eight m-1">HMO</a>
                  <a href="#" class="btn-eight m-1">Annual Increases</a>
                  <a href="#" class="btn-eight m-1">Bonuses</a>
                  <a href="#" class="btn-eight m-1">Hybrid Work Setup</a>
                  <a href="#" class="btn-eight m-1"
                    >Company Travel Allowances</a
                  >
                </div>
              </div>
              <div class="col mt-10 mb-10">
                <h4>
                  <span class="border-radius-50 p-10 bg-color mr-5">2</span>Fun
                  Culture & Working Environment
                </h4>
                <p>
                  There’s no need to be uptight, not with our variety of
                  sponsored company activities! We’ve got fun games, contests,
                  parties, and more, plus a relaxed working environment– no
                  formal office attire necessary.
                </p>
              </div>
              <div class="col mt-10 mb-10">
                <h4>
                  <span class="border-radius-50 p-10 bg-color mr-5">3</span
                  >Upskilling and Personal Growth
                </h4>
                <p>
                  We want our people to be the best that they can be. That’s why
                  we offer plenty of:
                </p>
                <div>
                  <a href="#" class="btn-eight m-1"
                    >Free Online Training and Seminars</a
                  >
                  <a href="#" class="btn-eight m-1">Developer Meetups</a>
                  <a href="#" class="btn-eight m-1">Bonuses</a>
                  <a href="#" class="btn-eight m-1"
                    >Opportunities for promotions</a
                  >
                  <a href="#" class="btn-eight m-1"
                    >Recognitions for Outstanding Employees</a
                  >
                </div>
              </div>
              <div class="col mt-10 mb-10">
                <h4>
                  <span class="border-radius-50 p-10 bg-color mr-5">4</span>Work
                  with U.S. Counterparts
                </h4>
                <p>
                  With CoDev you get to work with like-minded professionals from
                  the U.S., learn from them, and potentially access technologies
                  and resources currently being used by U.S.-based dev teams.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-6 col-lg-6 col-md-11 mt-10 mb-10 order-lg-last order-first"
          >
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/assets/banner_img_01.jpg"
                    class="d-block w-100"
                    alt="image"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/assets/banner_img_02.jpg"
                    class="d-block w-100"
                    alt="image"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/assets/banner_img_01.jpg"
                    class="d-block w-100"
                    alt="image"
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg"
        data-src="images/shape/shape_05.svg"
        alt=""
        class="lazy-img shapes shape_01"
      />
    </section>

    <!-- =============================================
   Milestones.
==============================================  -->
    <section class="border-bottom pt-100 pb-100">
      <div class="container">
        <div class="row mt-20 mb-20">
          <div class="col-md-4">
            <h3><span>Jobi</span> Milestones</h3>
          </div>
          <div class="col-md-8">
            <p>
              From fun-filled celebrations and meaningful recognitions, here are
              some highlights that define our success.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-12">
            <img
              class="border-radius-20 mt-15 mb-15"
              src="<?php echo get_template_directory_uri(); ?>/images/milestones/codev-13.jpg"
              alt=""
            />
            <h4 class="mt-15 mb-15">CoDev <span>Turns 13!</span></h4>
            <p class="mt-15 mb-15">
              It was an incredible day filled with fun, great food, and
              unforgettable memories. We’re so proud of everything we’ve
              accomplished over the past 13 years and couldn’t have done it
              without our incredible team and clients.
            </p>
            <button class="btn-eight">LEARN MORE</button>
          </div>
          <div class="col-md-4 col-12">
            <img
              class="border-radius-20 mt-15 mb-15"
              src="<?php echo get_template_directory_uri(); ?>/images/milestones/india-1536x1025.jpg"
              alt=""
            />
            <h4 class="mt-15 mb-15">Namaste <span>India!</span></h4>
            <p class="mt-15 mb-15">
              We’re expanding our team to India! Learn more about our India
              expansion and opportunities here.
            </p>
            <button class="btn-eight">LEARN MORE</button>
          </div>
          <div class="col-md-4 col-12">
            <img
              class="border-radius-20 mt-15 mb-15"
              src="<?php echo get_template_directory_uri(); ?>/images/milestones/gptw-cover.jpg"
              alt=""
            />
            <h4 class="mt-15 mb-15">
              CoDev is a Great Place To Work® Certified!
            </h4>
            <p class="mt-15 mb-15">
              Great Place to Work® is the global authority on workplace culture,
              trusted by thousands of companies worldwide in gauging company
              culture, employee experience, and perception.
            </p>
            <button class="btn-eight">LEARN MORE</button>
          </div>
        </div>
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg"
        data-src="images/shape/shape_05.svg"
        alt=""
        class="lazy-img shapes shape_01"
      />
    </section>

    <!-- ===========================
 love working Section
============================-->
    <section class="position-relative pt-80">
      <div class="container">
        <div class="row display-flex">
          <div class="col-xl-6 col-lg-6 col-md-11 mt-10 mb-10">
            <div class="lightbox">
              <div class="row">
                <div class="col-sm-6 mt-10 mb-10">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/gallery/codev-photo-2.jpg"
                    data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
                    alt="Table Full of Spices"
                    class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                  />
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/gallery/IMG_1592-2.jpg"
                    data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Square/1.webp"
                    alt="Coconut with Strawberries"
                    class="w-100 shadow-1-strong rounded"
                  />
                </div>
                <div class="col-sm-6 mt-10 mb-10">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/gallery/codev-photo.jpg"
                    data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Vertical/1.webp"
                    alt="Dark Roast Iced Coffee"
                    class="w-100 shadow-1-strong rounded"
                    style="height: 50vh"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-11 mt-10 mb-10">
            <h3><span>You’ll love</span> working here!</h3>
            <p>
              At CoDev, we value diversity, inclusion, and innovation. We
              believe that everyone deserves a chance to showcase their talents
              and contribute to meaningful projects. We also believe that work
              should be fun and rewarding, not stressful and boring. That’s why
              we foster a culture of trust, feedback, and recognition. We
              celebrate our achievements, learn from our failures, and support
              each other along the way.
            </p>
            <a href="#" class="btn-four m-20">APPLY NOW</a>
            <a href="#" class="btn-link m-20">See available opportunities</a>
          </div>
        </div>
      </div>
      <img
        src="images/lazy.svg"
        data-src="images/shape/shape_05.svg"
        alt=""
        class="lazy-img shapes shape_01"
      />
    </section>

    <!--=====================================================
              We’re looking for Slider
=====================================================-->
    <section>
      <div class="container">
        <h3 class="mt-15 display-flex mt-35 mb-35">
          <span>What we’re</span> looking for
        </h3>
        <div class="pb-15 mt-20">
          <div class="partner-slider">
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/android.jpg" alt="android" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/angular.jpg" alt="angular" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/html.jpg" alt="html" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/java.jpg" alt="java" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/js.jpg" alt="javascript" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/node.jpg" alt="node" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/php.jpg" alt="php" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/postgresql.jpg" alt="postgresql" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/python.jpg" alt="python" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/react.jpg" alt="react" />
              </div>
            </div>
            <div class="item">
              <div class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/languages/vue.jpg" alt="vue" />
              </div>
            </div>
          </div>
        </div>
        <h4 class="mt-15 mb-35 display-flex">and more</h4>
        <!-- /.partner-logos -->
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg"
        data-src="images/shape/shape_05.svg"
        alt=""
        class="lazy-img shapes shape_01"
      />
    </section>

    <!--=====================================================
             Start Get The Latest Jobs
=====================================================-->
    <section
      class="category-section-one bg-image pt-350 pb-350 position-relative xl-pt-300 lg-pt-300 xl-pb-300 lg-pb-300"
    >
      <div class="container position-absolute top-p-70 left-p-10">
        <div class="row bg-color p-40">
          <div class="col-md-4">
            <h3 style="color: #ffffff; font-size: 48px; font-weight: 700">
              Get The Latest Jobs
            </h3>
          </div>
          <div class="col-md-8">
            <form id="myForm" class="needs-validation color-white" novalidate>
              <div class="row mb-15">
                <div class="col">
                  <label for="firstName">First Name *</label>
                  <input
                    type="text"
                    class="form-control border-bottom bg-none box-shadow-none"
                    required
                  />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please complete this required field.
                  </div>
                </div>
                <div class="col">
                  <label for="lastName">Last Name *</label>
                  <input
                    type="text"
                    class="form-control border-bottom bg-none box-shadow-none"
                    required
                  />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please complete this required field.
                  </div>
                </div>
              </div>
              <div class="row mb-15">
                <div class="col">
                  <label for="inputEmail4">Email *</label>
                  <input
                    type="email"
                    class="form-control border-bottom bg-none box-shadow-none"
                    id="inputEmail4"
                    required
                  />
                  <div class="invalid-feedback">
                    Email must be formatted correctly.
                  </div>
                </div>
                <div class="col">
                  <label for="phoneNumber">Phone Number *</label>
                  <input
                    type="tel"
                    class="form-control border-bottom bg-none box-shadow-none"
                    id="phoneNumber"
                    required
                  />
                  <div class="invalid-feedback">
                    Must contain only numbers, +()-. and x.
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-four">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg"
        data-src="images/shape/shape_05.svg"
        alt=""
        class="lazy-img shapes shape_01"
      />
    </section>
    <div
      class="container-fluid d-flex justify-content-center"
      style="background-color: black; color: white; width: 100%; height: 200px"
    >
      <div class="row d-flex align-items-end">
        <div class="col display-flex p-25">
          <h4 class="m-2 fw-800" style="font-size: 1.5rem !important">
            Connect with Us:
          </h4>
          <i class="fa-brands fa-facebook m-2 fa-2xl"></i>
          <i class="fa-brands fa-linkedin m-2 fa-2xl"></i>
          <i class="fa-brands fa-youtube m-2 fa-2xl"></i>
        </div>
      </div>
    </div>
    <!-- End Get The Latest Jobs Section
    ===================================================== -->


<?php get_footer() ?>