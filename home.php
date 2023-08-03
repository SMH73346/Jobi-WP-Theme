<?php
//  Template Name: Home Template
get_header(); ?>


<!-- 
		=============================================
			Hero Banner
		============================================== 
		-->
<section>
	<?php
	$subheader = get_field('subheader');
	$title = get_field('title');
	$description = get_field('description');
	$image = get_field('image');
	$shape_1 = get_field('shape_1');
	$shape_2 = get_field('shape_2');
	?>


	<div class="hero-banner-one position-relative">
		<div class="container-fluid pb-250 pt-200">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-8">
						<p class="text-md mt-25 mb-20" style="color: white">
							<?php echo $subheader; ?>
						</p>
						<h1 class="header">
							<?php echo $title; ?>
						</h1>
					</div>
				</div>

				<div class="row display-flex float-end">
					<div class="col-xl-3 order-xl-first order-last">
							<?php 
							$link = get_field('link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="btn-four mt-25" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
								<i class="fa-solid fa-arrow-right"></i>
							    </a>
						<?php endif; ?>
					</div>
					<div class="col-xl-7 order-xl-last order-first">
						<p class="text-lg mt-25" style="color: white">
							<?php echo $description; ?>
						</p>
					</div>
				</div>
			</div>

			<div class="img-box">
				<img src="<?php echo $image['url']; ?>" alt="" class="lazy-img w-100" />
			</div>
			<!-- /.img-box -->
		</div>
		<img src="<?php // echo $shape_1['url']; ?>" alt="" class="lazy-img shapes shape_01" />
		<img src="<?php // echo $shape_2['url']; ?>" alt="" class="lazy-img shapes shape_02" />
	</div>
</section>

<!-- =============================================
			Developer Support
		============================================== -->
<section>
	<div class="container border-bottom-2 pt-100 pb-100">
		<div class="row display-flex">
			<?php
			$post_id = 155;
			$queried_post = get_post($post_id);
			$feature_image = wp_get_attachment_url(get_post_thumbnail_id($queried_post->ID));
			?>
			<div class="col-xl-7 col-lg-7 col-md-11 mt-10 mb-10 order-last">
				<h2 class="h2">
					<?php echo $queried_post->post_title; ?>
				</h2>
				<div>
					<?php echo $queried_post->post_content; ?>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-11 mt-10 mb-10 order-first">
				<img src="<?php echo $feature_image; ?>" alt="Video Call" />
			</div>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg" data-src="images/shape/shape_05.svg" alt=""
		class="lazy-img shapes shape_01" />
</section>
<!-- End Developer Support Section-->
<!--  ============================================= -->


<!-- =============================================
	Partner Logos Slider
==============================================  -->
<section>
	<div class="container border-bottom-2">
		<div class="partner-logos pb-15 mt-20">
			<div class="partner-slider">
				<div class="item">
					<div class="logo d-flex align-items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo/media_03.png" alt="" />
					</div>
				</div>
				<div class="item">
					<div class="logo d-flex align-items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo/media_01.png" alt="" />
					</div>
				</div>
				<div class="item">
					<div class="logo d-flex align-items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo/media_05.png" alt="" />
					</div>
				</div>
				<div class="item">
					<div class="logo d-flex align-items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo/media_06.png" alt="" />
					</div>
				</div>
				<div class="item">
					<div class="logo d-flex align-items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo/media_07.png" alt="" />
					</div>
				</div>
				<div class="item">
					<div class="logo d-flex align-items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo/media_08.png" alt="" />
					</div>
				</div>
				<div class="item">
					<div class="logo d-flex align-items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo/media_05.png" alt="" />
					</div>
				</div>
			</div>
		</div>
		<!-- /.partner-logos -->
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg" data-src="images/shape/shape_05.svg" alt=""
		class="lazy-img shapes shape_01" />
</section>

<!-- =============================================
	About Developer Section
==============================================  -->
<section>
	<div class="container border-bottom-2 pt-100 pb-100">
		<div class="row display-flex">
			<?php
			$post_id = 163;
			$queried_post = get_post($post_id);
			$feature_image = wp_get_attachment_url(get_post_thumbnail_id($queried_post->ID));
			?>
			<div class="col-xl-7 col-lg-7 col-md-11 mt-10 mb-10 order-last">
				<h2 class="h2">
					<?php echo $queried_post->post_title; ?>
				</h2>
				<div>
					<?php echo $queried_post->post_content; ?>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-11 mt-10 mb-10 order-first">
				<img src="<?php echo $feature_image; ?>" alt="Video Call" />
			</div>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/lazy.svg" data-src="images/shape/shape_05.svg" alt=""
		class="lazy-img shapes shape_01" />
</section>

<!-- =============================================
   About Administration
==============================================  -->
<section class=" xl-pt-120 lg-pt-80  xl-pb-120 lg-pb-60">
	<div class="container border-bottom-2 pt-100 pb-140">
		<div class="row display-flex">
			<?php
			$post_id = 161;
			$queried_post = get_post($post_id);
			$feature_image = wp_get_attachment_url(get_post_thumbnail_id($queried_post->ID));
			?>
			<div class="col-xl-4 col-lg-4 col-md-11 mt-10 mb-10 order-first">
				<img src="<?php echo $feature_image; ?>" alt="Video Call" />
			</div>
			<div class="col-xl-7 col-lg-7 col-md-11 mt-10 mb-10 order-last">
				<h2 class="h2">
					<?php echo $queried_post->post_title; ?>
				</h2>
				<div>
					<?php echo $queried_post->post_content; ?>
				</div>
			</div>

		</div>
	</div>
	<img src="images/lazy.svg" data-src="images/shape/shape_05.svg" alt="" class="lazy-img shapes shape_01" />
</section>

<!-- =============================================
   Guaranteed.
==============================================  -->
<section>
	<div class="container border-bottom-2 pt-100 pb-100">
		<div class="row display-flex">
			<?php
			$post_id = 159;
			$queried_post = get_post($post_id);
			$feature_image = wp_get_attachment_url(get_post_thumbnail_id($queried_post->ID));
			?>
			<div class="col-xl-4 col-lg-4 col-md-11 mt-10 mb-10 order-first">
				<img src="<?php echo $feature_image; ?>" alt="Video Call" />
			</div>
			<div class="col-xl-7 col-lg-7 col-md-11 mt-10 mb-10 order-last">
				<h2 class="h2">
					<?php echo $queried_post->post_title; ?>
				</h2>
				<div>
					<?php echo $queried_post->post_content; ?>
				</div>
			</div>
		</div>
	</div>
	<img src="images/lazy.svg" data-src="images/shape/shape_05.svg" alt="" class="lazy-img shapes shape_01" />
</section>

<!-- ===========================
Candidates Section Ends Here
============================-->
<section>
	<div class="container border-bottom-2 pt-100 pb-100">
		<div class="row">
			<h2>What our Customers Say</h2>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="card-body">
					<blockquote class="blockquote blockquote-custom pt-4">
						<div class="blockquote-custom-icon shadow-1-strong mb-20">
							<i class="fa fa-quote-left text-info"></i>
						</div>
						<h4 style="color: #1c232f">M3Tech</h4>
						<p class="mb-0 mt-2 font-italic">
							“The developers who joined our team from CoDev are
							hardworking, professional, reliable, and have a great team
							spirit.”
						</p>
					</blockquote>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="card-body">
					<blockquote class="blockquote blockquote-custom px-3 pt-4">
						<div class="blockquote-custom-icon shadow-1-strong mb-20">
							<i class="fa fa-quote-left text-info"></i>
						</div>
						<h4 style="color: #1c232f">AB Martin</h4>
						<p class="mb-0 mt-2 font-italic">
							"They have consistently hit our expectations and all
							timelines…"
						</p>
					</blockquote>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="card-body">
					<blockquote class="blockquote blockquote-custom px-3 pt-4">
						<div class="blockquote-custom-icon shadow-1-strong mb-20">
							<i class="fa fa-quote-left text-info"></i>
						</div>
						<h4 style="color: #1c232f">Assure Software</h4>
						<p class="mb-0 mt-2 font-italic">
							"...consistently been responsive to our needs and have
							provided us with quality candidates to help support our
							business."
						</p>
					</blockquote>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="card-body">
					<blockquote class="blockquote blockquote-custom px-3 pt-4">
						<div class="blockquote-custom-icon shadow-1-strong mb-20">
							<i class="fa fa-quote-left text-info"></i>
						</div>
						<h4 style="color: #1c232f">M3Tech</h4>
						<p class="mb-0 mt-2 font-italic">
							“The developers who joined our team from CoDev are
							hardworking, professional, reliable, and have a great team
							spirit.”
						</p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
	<img src="images/lazy.svg" data-src="images/shape/shape_05.svg" alt="" class="lazy-img shapes shape_01" />
</section>

<!--=====================================================
			  Find your next talent
=====================================================-->
<section class="" style="color: #fff; background-color: #1c232f;">
	<div class="container border-bottom-2 pt-100 pb-100">
		<div class="row">
			<div class="container pt-15 pb-10 py-lg-12">
				<!-- First Section -->
				<div class="container pt-7 pb-9 py-lg-12 border-bottom-2">
					<h2 class="mt-20 h2">Find your next talent</h2>
					<p class="mt-20">
						We cover all the headaches so you can focus on what counts. You
						don’t have to worry about sourcing, screening, recruiting, wage
						negotiations, or anything like that. Simply tell us what you’re
						looking for and get ready to interview exactly that.
					</p>
				</div>

				<!-- Second Section -->

				<div class="container pt-7 pb-9 py-lg-12 border-bottom-2">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-8">
							<h2 class="mt-20 h2">Find candidates by job title</h2>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<ul class="style-none mt-30 mb-30">
								<li class="mb-10">
									<a href="developer-skill/front-end-developers/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Front-end Developer</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="developer-skill/back-end-developers/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Back-end Developer</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="developer-skill/full-stack-developer/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Full-Stack Developer</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="developer-skill/mobile-developer/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Mobile Developer</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<ul class="style-none mt-30 mb-30">
								<li class="mb-10">
									<a href="developer-skill/app-developer/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">App Developer</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/web-designer/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Web Designer</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/qa-engineer/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">QA Engineer</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/devops-engineer/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">DevOps Engineer</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Third Section -->

				<div class="container pt-7 pb-9 py-lg-12">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-8">
							<h2 class="mt-20 h2">Find candidates by skill</h2>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<ul class="style-none mt-30 mb-30">
								<li class="mb-10">
									<a href="developer-skill/javascript-developers/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Javascript</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/vue-js-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Vue.js</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/angular-js-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Angular.js</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/typescript-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Typscript (Javascript - Microsoft)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/wordpress-developers-front-end/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">WordPress (frontend)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/wordpress-developers-back-end/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">WordPress (backend)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/drupal-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Drupal</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/duda-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Duda</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="developer-skill/python-developers/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Python</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/django-python-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Django (Python)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/flask-python-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Flask (Python)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/php-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">PHP</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/codeigniterphp-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">CodeIgniter (PHP)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="#">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Cake (PHP)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/laravel-php-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Laravel (PHP)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/yii-php-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Yii (PHP)</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<ul class="style-none mt-30 mb-30">
								<li class="mb-10">
									<a href="developer-skill/java-developers/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Java</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/springboot-java-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">SpringBoot (Java)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/grails-java-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Grails (Java)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/struts-java-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Struts (Java)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="developer-skill/ruby-ruby-on-rails-developers/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Ruby / Ruby on Rails</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/net-c-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">.Net (C#)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/asp-net-c-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">ASP.NET (C#)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/netcore-c-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">.NETCore (C#)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/vb-net-c-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">VB.NET (C#)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/unity-c-developers/">
										<span class="border-bottom-2 text-md">
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Unity (C#)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/xamarin-c-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Xamarin (C#)</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/c-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">C++</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/coldfusion-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-md">Coldfusion</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/golang-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-l">Golang</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="https://codev.com/developer-skill/perl-developers/">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-l">Perl</span>
									</a>
								</li>
								<li class="mb-10">
									<a href="hire-a-developer/index.html">
										<span>
											<i aria-hidden="true" class="fas fa-minus"></i>
										</span>
										<span class="border-bottom-2 text-l">Other</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img src="images/lazy.svg" data-src="images/shape/shape_05.svg" alt="" class="lazy-img shapes shape_01" />
</section>

<!-- =============================================
	What’s Next? Section
==============================================  -->
<section class="category-section-one position-relative pt-180 xl-pt-150 lg-pt-80 pb-140 xl-pb-120 lg-pb-60">
	<div class="container">
		<div class="row display-flex">
			<?php
			$post_id = 157;
			$queried_post = get_post($post_id);
			$feature_image = wp_get_attachment_url(get_post_thumbnail_id($queried_post->ID));
			?>
			<div class="col-xl-7 col-lg-7 col-md-11 mt-10 mb-10 order-last">
				<h2 class="h2">
					<?php echo $queried_post->post_title; ?>
				</h2>
				<div>
					<?php echo $queried_post->post_content; ?>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-11 mt-10 mb-10 order-first">
				<img src="<?php echo $feature_image; ?>" alt="Video Call" />
			</div>
		</div>
	</div>
	<img src="images/lazy.svg" data-src="images/shape/shape_05.svg" alt="" class="lazy-img shapes shape_01" />
</section>


<?php get_footer(); ?>