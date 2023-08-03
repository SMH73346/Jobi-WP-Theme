<?php
//  Template Name: ContactUs Template
 get_header(); ?>

     <!-- =============================================
			Contact Us
		============================================== -->
        <section
      class="position-relative pt-180 xl-pt-150 lg-pt-80 pb-140 xl-pb-120 lg-pb-60"
    >
      <div class="container">
        <div class="row border-bottom display-flex pb-15 mb-15 mt-10">
          <h1 class="header">Contact Us</h1>
        </div>
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-10 text-md">
            <p>
              We are excited to hear from you and eager to help answer any
              questions you may have about our services.
            </p>
            <p>
              Our team of experts is dedicated to providing exceptional service
              and support to all of our clients. Whether you are interested in
              learning more about our product development services, want to
              discuss a potential project, or have questions about the company,
              we are here to help.
            </p>
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
    <!-- End Contact Us Section-->
    <!--  ============================================= -->

    <!-- =============================================
			Message Us
		============================================== -->
    <section
      class="border-bottom pt-130 xl-pt-130 lg-pt-80 pb-120 xl-pb-100 lg-pb-60"
      style="background-color: #000; color: #fff"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-20">
            <h2 class="header-1">Message Us!</h2>
            <p class="text-md">
              Please fill out the form with your name, email address, and a
              brief message outlining your question or concern. One of our team
              members will get back to you as soon as possible.
            </p>
            <div
              class="address border-bottom d-flex justify-content-lg-start align-items-center mt-15 pb-15"
            >
              <i
                class="fa-solid mr-10 fa-location-dot fa-xl"
                style="color: #fc8459"
              ></i>
              <span style="color: #fc8459">
                210 N 1200 E Ste 200 Lehi, UT 84043
              </span>
            </div>
            <div
              class="phone border-bottom d-flex justify-content-lg-start align-items-center mt-15 pb-15"
            >
              <i
                class="fa-sharp fa-solid mr-10 fa-xl fa-phone fa-rotate-270"
                style="color: #fc8459"
              ></i>
              <span style="color: #fc8459"> (801) 331-8770 </span>
            </div>
            <div
              class="email d-flex justify-content-lg-start align-items-center mt-15 pb-15"
            >
              <i
                class="fa-solid mr-10 fa-envelope fa-xl"
                style="color: #fc8459"
              ></i>
              <span style="color: #fc8459"> contact@codev.com </span>
            </div>
          </div>
          <div class="col-lg-6">
            <!--  ============================================= -->
            <!-- Start Form Section-->
            <!--  ============================================= -->
            <form id="myForm" class="needs-validation" novalidate>
              <div class="row mb-15">
                <div class="col">
                  <label for="firstName">First Name *</label>
                  <input type="text" class="form-control border-2" required />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please complete this required field.
                  </div>
                </div>
                <div class="col">
                  <label for="lastName">Last Name *</label>
                  <input type="text" class="form-control border-2" required />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please complete this required field.
                  </div>
                </div>
              </div>
              <div class="form-row mb-15">
                <label for="inputEmail4">Email *</label>
                <input
                  type="email"
                  class="form-control border-2"
                  id="inputEmail4"
                  required
                />
                <div class="invalid-feedback">
                  Email must be formatted correctly.
                </div>
              </div>
              <div class="row mb-15">
                <div class="col">
                  <label for="companyName">Company Name *</label>
                  <input
                    type="text"
                    class="form-control border-2"
                    id="companyName"
                    required
                  />
                  <div class="invalid-feedback">
                    Please complete this required field.
                  </div>
                </div>
                <div class="col">
                  <label for="phoneNumber">Phone Number *</label>
                  <input
                    type="tel"
                    class="form-control border-2"
                    id="phoneNumber"
                    required
                  />
                  <div class="invalid-feedback">
                    Must contain only numbers, +()-. and x.
                  </div>
                </div>
              </div>
              <div class="form-row mb-15">
                <label for="message">Message</label>
                <textarea
                  class="form-control border-2"
                  id="message"
                  rows="3"
                ></textarea>
              </div>

              <button type="submit" class="btn btn-four">Submit</button>
            </form>

            <!-- End Form Section-->
            <!--  ============================================= -->
          </div>
          <!-- tab-content -->
        </div>
        <!-- /form -->
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg"
        data-src="images/shape/shape_05.svg"
        alt=""
        class="lazy-img shapes shape_01"
      />
    </section>
    <!-- End Message Us Section-->
    <!--  ============================================= -->


<?php get_footer() ?>