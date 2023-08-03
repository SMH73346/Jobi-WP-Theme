<?php
//  Template Name: Hiring_Process Template
 get_header(); ?>


    <!-- =============================================
			Header Section
		============================================== -->
        <section
      class="position-relative pt-180 xl-pt-150 lg-pt-80 pb-140 xl-pb-120 lg-pb-60"
    >
      <div class="container">
        <div class="row border-bottom display-flex pb-15 mb-15 mt-10">
          <h1 class="header">Hiring Process</h1>
        </div>
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-10">
            <p class="text-md">
              Our hiring process is designed to be easy and straightforward,
              allowing you to land your dream job in just three steps.
            </p>
            <a href="#" type="button" class="btn-four mt-25 mb-10">
              View Job Openings
              <i class="fa-solid fa-arrow-right"></i>
            </a>
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
    <!-- End Header Section-->
    <!--  ============================================= -->

    <!-- =============================================
			Joining Steps Section
		============================================== -->
    <section
      class="category-section-one display-flex border-bottom mt-80 pb-70 border-bottom"
    >
      <div class="container">
        <h3 class="header-1">Join Jobi in 3 Simple Steps</h3>
        <div class="row row-cols-3 d-flex">
          <div class="col-lg-4 col-xl-4 col-md-4 m-3 border border-dark col-12">
            <div class="d-flex flex-column p-15 align-items-start mb-10">
              <div class="mt-10 mb-10">
                <h2>1</h2>
                <h4 class="h4 mb-0" style="margin: 0">Screening</h4>
              </div>
              <div>
                <p class="mb-10">
                  Submit your CV or resume, and our talent acquisition team will
                  review your qualifications. You’ll then have an initial
                  interview where you can share more about your technical
                  experience. We’ll also ask you to take a few basic assessment
                  tests, including language and coding tests, if applicable.
                  Finally, we’ll request a short video interview from you via a
                  link we provide. This initial screening is aimed to ensure
                  you’re a good fit for the position, and to help our clients
                  get to know you better.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4 col-md-4 m-3 border border-dark col-12">
            <div class="d-flex flex-column p-15 align-items-start mb-10">
              <div class="mt-10 mb-10">
                <h2>2</h2>
                <h4 class="h4 mb-0" style="margin: 0">Client Review</h4>
              </div>
              <div>
                <p class="mb-10">
                  Once you’ve passed the initial screening, we’ll schedule a
                  virtual client interview. Relax, be yourself, and show off
                  your technical skills and knowledge. The client interview is
                  an opportunity for the client to learn more about you and your
                  experience.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4 col-md-4 m-3 border border-dark col-12">
            <div class="d-flex flex-column p-15 align-items-start mb-10">
              <div class="mt-10 mb-10">
                <h2>3</h2>
                <h4 class="h4 mb-0" style="margin: 0">Job Offer</h4>
              </div>
              <div>
                <p class="mb-10">
                  After the client’s approval, you’re in! We’ll provide you with
                  all the details you need to start your new job, negotiate and
                  finalize your job offer, and get you excited for your first
                  day. We’re excited to have you join our team at CoDev!
                </p>
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
    <!-- End Joining Steps Section-->
    <!--  ============================================= -->


<?php get_footer() ?>