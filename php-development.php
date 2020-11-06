<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>

		<?php include 'meta.php'; ?>
		<!--plugin-css-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/plugin.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
		<!-- template-style-->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/sideform.css" rel="stylesheet">
		<link href="css/breadcum-form.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164733026-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-164733026-1');
		</script>
	  <style>
		  @media (min-width: 320px) and (max-width: 765px){
   .hide {
         display:none;
	 }
			  
}
		  	  @media (min-width: 320px) and (max-width: 765px){
   .lm {
         margin-left: 0px;
	 }
			  
}
		  @media screen and (min-width: 1370px){
				.hero-card-web1 {
					position: relative;
					overflow: hidden;
					padding-top: 82px;
					padding-bottom: 72px;
					height: 65vh;
					align-items: center;
					display: flex;
					margin-left: -150px
				}
				.headerclient {
					padding-top: 14px;
					padding-bottom: 0px;
				}
				.computer{
					margin-left: -240px;
				}
			}
			@media screen and (max-width: 1370px){
				.image-sr-mm1{
					width: 100%;
					height: 130px;
					padding-top: 7px;
				}
				.pb1{
					padding-top: 7px;
				}
				.computer{
					margin-left: -120px;
				}
			}
	  </style>
  </head>
  <body>
<!--Start Header -->
		  <?php include 'header.php'; ?>
<!--End Header -->
  <!--Start Hero-->
<section class="hero-card-web hero-card-web1 hero-card-web2  bg-gradient12 shape-bg3">
<div class="hero-main-rp container-fluid">
<div class="row">
<div class="col-lg-4">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;margin-top:10%" >
<img src="images/image2/complete_branding.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
<div class="col-lg-4 col-12 " style="margin-top: 2%">
	<div class="service-sec-list " style="text-align:center">
		<img src="images/icons/tech.svg" alt="service" >
		<h5 class="mb10" style="color: white">WebInGo at It's Best</h5>
		<div class="row in-stats  about-statistics">
            <div class="col-lg-4 col-sm-4 counter1 " >
              <div class="">
                <div class="statnumb counter-number ">
                  <span class="counter counter-span2">4</span><span class="counter-span2">&nbsp;+</span><br>
                  <span class="counter-span1">Years Experience</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4 counter1" >
              <div class="">
                <div class="statnumb">
                  <span class="counter counter-span2">10</span><span class="counter-span2">&nbsp;+</span><br>
                  <span class="counter-span1">Org Recogination</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4 counter1">
              <div class="">
                <div class="statnumb counter-number" style="margin-left:13px;">
                  <span class="counter counter-span2">500</span><span class="counter-span2">&nbsp;+</span><br>
                  <span class="counter-span1">Happy Clients</span>
                </div>
              </div>
            </div>
          </div>
		<p style="color: white;text-align: justify">WEBINGO® is a renowned end-to-end IT solutions company in India that provides ultimate IT solutions and has provided consultancy to numerous start-ups across India.  </p>
 </div>   
</div>
<div class="col-lg-4" >
<div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">
<form method="post" style="margin-top: -23px;">
	<h5 class="mb10" style="text-align:center">Get Free Quotation</h5>
  <input 
    name="Your Name"
    placeholder="Name"
    required
  >
  <input 
    type="email"
    name="email" 
    placeholder="Email"
    required
  >
  <input
    type="mobile"
    name="mobile" 
    placeholder="Phone No"
  >
	<input
    type="text"
    name="city" 
    placeholder="Your City"
  >
 <select   name="interest" id="interest">
	<option value="" class="grey_color">Interested In*</option>
	<option value="Logo Design">Logo Design</option>
	<option value="Packaging Design">Packaging Design</option>
	<option value="Website Design">Website Design</option>
	<option value="Responsive / Bootstrap HTML">Responsive / Bootstrap HTML</option>
	<option value="Website Development">Website Development</option>
	<option value="Wordpress">Wordpress</option>
	<option value="Magento">Magento</option>
	<option value="SEO &amp; SMO">SEO &amp; SMO</option>
	<option value="Hosting">Hosting</option>
	<option value="ECommerce Website">ECommerce Website</option>
	<option value="Digital Marketing">Digital Marketing</option>
	<option value="Graphics Design">Graphics Design</option>
	<option value="Brochure, Business Card, Flyer Design">Brochure, Business Card, Flyer Design</option>
<option value="Content Writing Services">Content Writing Services</option>
		      			</select>
 <br>
	<div class="col-md-12"> 				
		<input type="hidden" value="" name="secret"   id="secret"/>
		<input class="btn btn-primary bg-btn2" type="button" value="Submit" name="Submit"   id="Submit" onclick="contactquick();"/>
	</div> 
</form>
</div>
</div>
</div>
</div>
</section>
  <!--End Breadcrumb Area-->
  <!--End Breadcrumb-->  
	   <section class="service pad-tb about-agency light-dark">
<div class="container">
<div class="row">
	 <div class="col-lg-12 text-center"><h2 class="mb20" style=""><div class="quotes">
    <blockquote>
      <p>PHP is about as exciting as your toothbrush. You use it every day, it does the job, it is a simple tool, so what? Who would <br>want to read about toothbrushes?</p>
      <footer>
      </footer>
    </blockquote>
  </div></h2></div>
<div class="col-lg-7" style="margin-top:4%">
<div class="text-l service-desc- pr25">
	
	<h2 style="font-size:35px;">Insight about PHP Development.</h2>
	<br>
<p style="text-align: justify">The World’s most famous websites are built using PHP. We believe that your website should be built with the same technology. PHP is a universally compatible framework. We build websites for you with high functioning back-end and user interactive frontend.<br>
	We use the power of PHP to develop stunning web portals and Web Applications. Whether it is an enterprise website that can collect dynamic user input or an eCommerce store that has thousands of underlying product pages — we can ideate, create and launch any kind of website of your choice.</p>
	<p style="text-align: justify">We have worked with all sizes and types of businesses.</p>
<p style="text-align: justify">If you have an idea, we can make deliver you an affordable and timeproof solution.</p>
<a href="#" class="btn-main bg-btn2 lnk mt30">Request A Quote  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>
<div class="col-lg-5">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<img src="images/demo1.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
</div>
</div>
</section>
<section class="service pad-tb  bg-gradient15 light-dark">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<img src="images/demo1.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
<div class="col-lg-7">
<div class="text-l service-desc- pr25">
  <h3 class="mb20" style="color:#000">Benefits of PHP Development .</h3>  
		<ul class="key-points mt20">
		<li>Thousands of open source libraries.</li>
		<li>Perfect for E-Commerce Development as they contain numerous pages which require fast loading and response time.</li>
		<li>PHP has a built-In HTTP Server which makes it easy to develop and test applications locally which eliminates the need to configure other servers.</li>
		<li>Compatible with all hosting environment.</li>
		<li>Requires no indirect integration to HTML and CSS.</li> 
		<li>Requires no addition plug-ins to create webpages on WordPress, Drupal and so on.</li>
		<li>One of best for creating responsive web pages.</li>
		</ul>
</div>
</div>

</div>
</div>
</section>	  
<section class="service-block bg-lights  pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="common-heading">
           
            <h2 class="mb10">What we offer with PHP development?</h2>
			  <p>We provide innovative web application development services with PHP development environment through an array of services.</p>
          </div>
        </div>
      </div>
      <div class="row upset link-hover">
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/coding.png" alt="service" class="img-fluid"></div>
            <h4>Custom PHP Apps</h4>
			  <p style="text-align:justify;">
				Using our comprehensive skills of OOP, MVC, and core PHP, we build and deliver static, dynamic, and integrated PHP web apps. Our PHP development company works with the most suitable PHP frameworks like CodeIgniter, CakePHP, Laravel, Zend, Yii, Symfony, etc to develop the enterprise apps.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/ecommerce-1.png" alt="service" class="img-fluid"></div>
            <h4>E-Commerce </h4>
			  <p style="text-align:justify;">
				We are apt in using the right combination of technologies to build world-class eCommerce PHP websites that bear modern features and functionalities. Our PHP development company has the calibre to create highly customized eCommerce portals that fit your requirements.</p>
          </div>
        </div>
		<div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/cms-1.png" alt="service" class="img-fluid"></div>
            <h4>CMS Development</h4>
			  <p style="text-align:justify;">
				With our full-scale expertise in open-source CMS like WordPress, Drupal, Joomla, Magento, etc, our php web development company adept at creating highly customized websites using these CMSs. Our PHP developers harness the full potential of CMSs to build custom websites.</p>
          </div>
        </div>
		  <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/entertainment.png" alt="service" class="img-fluid"></div>
            <h4>Social Networking Solutions</h4>
			  <p style="text-align:justify;">
				Our php website development company utilizes the latest features of the PHP language effectively to develop highly engaging, attractive, and collaborative social networking websites. Our developers also integrate topmost features into the websites.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/api-1.png" alt="service" class="img-fluid"></div>
            <h4>API Integration</h4>
              <p style="text-align:justify;">
				We can integrate your public, private, or internal APIs into your PHP system and CMS. We also integrate third-party APIs into your PHP websites as per your needs and requirements using various interfaces provided by the APIs for better transactions.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/website.png" alt="service" class="img-fluid"></div>
            <h4>Custom Web Portals</h4>
			  <p style="text-align:justify;">
				Our developers have a good experience and expertise in creating business-specific web portals using PHP like B2C portals, B2B portals, enterprise and corporate portals. We are the most reliable php website development company that caters to our clients.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="why-choos-lg pad-tb about-agency  bg-gradient15 deep-dark">
<div class="container">
	<div class="row justify-content-center">
	<div class="col-lg-8">
		<div class="common-heading ptag">
			
			<h2 >Our Process</h2>
			<p>We follow an extremely detailed process to serve you with your needs and deliver the best.</p>
		</div>
	</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="common-heading text-l">

<div class="itm-media-object mt40">
	<div class="media">
		<img src="images/icons/one.png" alt="icon">
		<div class="media-body">
			<h4>Requirement Gathering</h4>
			<p style="text-align:justify;"><strong>STATEMENT OF WORK</strong> - Brainstorming sessions and meetings to make sure that both the parties are on the same page.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/two.png" alt="icon">
		<div class="media-body">
			<h4>UX/ UI </h4>
			<p style="text-align:justify;"><strong>PROTOTYPE</strong> - Fully functional clickable prototype by using various wireframes and mock-ups for client approval.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/three.png" alt="icon">
		<div class="media-body">
			<h4>Development </h4>
			<p style="text-align:justify;"><strong>WORKING APPLICATION </strong>- System architecture, database planning, infrastructure setup and code development.</p>
		</div>
	</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="itm-media-object mt40">
	<div class="media">
		<img src="images/icons/four.png" alt="icon">
		<div class="media-body">
		<h4>Deployment</h4>
			<p style="text-align:justify;">
 <strong>FINAL PRODUCT</strong> - Client server setup, transferring and deployment of the PHP application project in live environment.</p>
		
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/five.png" alt="icon">
		<div class="media-body">
			<h4>Testing</h4>
			<p style="text-align:justify;">
<strong>QUALITY ASSURANCE </strong>- Manual and system testing, client feedback on regular basis as a part of agile methodology.</p>
		
		</div>
	</div>
	
</div>

</div>
</div>
</div>
</section>
 
<section class="service-section pad-tb">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="common-heading">

<h2 class="mb20">PHP Framework Based Development</h2>
<p>We provide Development in the PHP Frameworks as well.</p>
</div>
</div>
</div>
<div class="row upset link-hover shape-num justify-content-center">
<div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/development.png" alt="service" class="img-fluid"></div>
<h4>Laravel</h4>
<p style="text-align:center;">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony. </p>
</div>
</div>
<div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/process.png" alt="service" class="img-fluid"></div>
<h4>CodeIgniter </h4>
<p style="text-align:center;">CodeIgniter is an open-source software rapid development web framework, for use in building dynamic web sites . It is loosely based on the popular model–view–controller (MVC) development pattern.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/api-1.png" alt="service" class="img-fluid"></div>
<h4>CakePHP</h4>
<p style="text-align:center;">CakePHP is an open-source web framework. CakePHP follows the model–view–controller (MVC) approach and is written in PHP, modelled after the concepts of Ruby on Rails, and distributed under the MIT License.</p>
</div>
</div> 
<div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/consulting.png" alt="service" class="img-fluid"></div>
<h4>Drupal</h4>
<p style="text-align:center;">
Drupal is a free and open-source web content management framework written in PHP and distributed under the GNU General Public License. Drupal provides a back-end framework for at least 2.3% of all websites worldwide.</p>
</div>
</div> 

</div>
<!--<div class="-cta-btn mt70">
<div class="free-cta-title v-center wow zoomInDown" data-wow-delay=".9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
<p>Hire a <span>Dedicated Developer</span></p>
<a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>-->
</div>
</section>
	  <section class="service pad-tb  bg-gradient15 light-dark">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="text-l service-desc- pr25">
  <h3 class="mb20" style="color:#000">Benefits of PHP Framework Based Development</h3>  
		<ul class="key-points mt20">
		<li>Speed up custom web application development.</li>
		<li>Simplify web application maintenance.</li>
		<li>No need to write additional code.</li>
		<li>Work with databases more efficiently.</li>
		<li>Automate common web development tasks.</li>
		<li>Protect websites from targeted security attacks.</li>
		<li>Perform unit testing efficiently.</li>
		<li>No need to increase web development cost.</li>
		</ul>
</div>
</div>
<div class="col-lg-5">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<img src="images/demo1.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
</div>
</div>
</section>
	 
	  <section class="service-block pad-tb bg-gradient8">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="common-heading ptag">
									
									<h2>Why Choose WEBINGO?</h2>
									<p class="mb30" style="color: #fff">We are the best at what we do.</p>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/trustworthy.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Expertise </h4>
										
										<p>We expertise in the PHP Development.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/hacker.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Secure </h4>
										<p>Your data and security is our focus.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/expert.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Expert Teams</h4>
										<p >We house a team of Expert Developers.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/customer-service.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Customer Satisfaction</h4>
										<p>Our prime focus is your satisfaction with our services.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/timely.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Punctuality</h4>
										<p style="font-size:15px">We know the importance of time in a business.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="-cta-btn mt70">
							<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s" style="visibility: visible; animation-delay: 1.8s; animation-name: zoomInDown;">
								<p style="color: #fff">Let us <span>Serve you
									</span> </p>
								<!--<a href="#" class="btn-main bg-btn2 lnk" data-toggle="modal" data-target="#myModal">Enquiry Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>-->
							</div>
						</div>
					</div>
				</section>
	  
	  <section class="pad-tb bg-gradient15" >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading">
	<span  class="text-radius text-light text-animation bg-b">FAQS</span>
            <h2 class="mb0">Frequently Asked Questions</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mt60">
          <div id="accordion" class="accordion">
            <div class="card-1">
              <div class="card-header" id="faq1" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-a" aria-expanded="true" aria-controls="collapse-a"style="color: #fff;" >
				How much time do you require to complete a PHP web application?
                </button>
              </div>
              <div id="collapse-a" class="card-body collapse " aria-labelledby="faq1" data-parent="#accordion">
                <p>
					We always try to remain fair and transparent in our dealings. So, we never practice fake commitments with clients. In order to know the exact time required for your project, we always advise you to discuss the full details and requirements of it with us. Then only our experts will share the time estimation.</p>
              </div>
            </div>
           <div class="card-1 ">
              <div class="card-header" id="faq5" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-e" aria-expanded="true" aria-controls="collapse-e"style="color: #fff;" >
              What is the average cost of PHP web design and development?
                </button>
              </div>
              <div id="collapse-e" class="card-body collapse" aria-labelledby="faq5" data-parent="#accordion2">
                <p>
					
					We strictly adhere to a professional and transparent approach while giving you quotes on time and cost. First, we collect every single requirement of your project and calculate a fair time estimate to achieve that goal while breaking it down in smaller milestones. Then only we present you a proposal that contains time and cost for every milestone. So, it would be really appreciated if you book a free consultation with our experts and do let us know your project requirements to know the quotes.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt60">
          <div id="accordion2" class="accordion">
			  <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-b" aria-expanded="true" aria-controls="collapse-b"style="color: #fff;" >
                Will you modify my website design in the <br>future?
                </button>
              </div>
              <div id="collapse-b" class="card-body collapse" aria-labelledby="faq4" data-parent="#accordion2">
                <p>
					Yes, we will help you modify your website design in the future. Our developers can make the required changes in the site content, layout, and appearance based on your needs. We recommend discussing and defining all the project's important elements and its scope before getting started. We create tailored web solutions as per the needs and requirements of our clients.</p>
              </div>
            </div>
            <div class="card-1 ">
              <div class="card-header" id="faq2" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-f" aria-expanded="true" aria-controls="collapse-f"style="color: #fff;" >
                Can you help to redesign my website to the latest PHP version?
                </button>
              </div>
              <div id="collapse-f" class="card-body collapse" aria-labelledby="faq2" data-parent="#accordion2">
                <p>
					Yes, you can take our php development services to redesign your existing website to the latest PHP version. You have to give all the necessary details. Simply approach us via onsite chat system, phone, email or filling contact us form to provide your precise requirements of the project. After a thorough analysis, we ll define objectives and upgrade your site accordingly.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--Start Footer-->
 <?php include 'footer.php'; ?>
<!--End Footer-->
<!--scroll to top-->
<a id="scrollUp" href="#top"></a>
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/plugin.min.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
		  <script>
		  $('.bxslider').bxSlider({
  autoHover: true,
  auto: true,
  slideWidth: 250,
  minSlides: 2,
  maxSlides: 6,
  controls: true,
  pager: true,
  speed: 500,
  captions: true,
  slideMargin: 5,
});
		  </script>	  
<script>
$(document).foundation();

// declare variables.
var $top_bar = $('.top-bar'),
    $menu_btn = $('#responsive-menu-btn');

// top bar sticky shrink class toggle.
$top_bar.on('sticky.zf.stuckto:top', function() {
  var $this = $(this);
  
  $this.addClass('shrink');
}).on('sticky.zf.unstuckfrom:top', function() {
  var $this = $(this);
  
  $this.removeClass('shrink');
})

// top bar responsive menu button context toggle.
$menu_btn.on('click', function(){
  $this = $(this);
  
  $this.toggleClass('alert').promise().done(function()
  {
    if ($this.hasClass('alert')) {
      $this.html('<i class="fa fa-md fa-times"></i> Close');
    } else {
      $this.html('<i class="fa fa-md fa-bars"></i> Menu');
    }
  });
});		  
</script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Lf4wNEZAAAAACeNgAtPhbDG2MuNRHf5HYwGBOcF', {action: 'submit'}).then(function(token) {
    console.log(token);
       document.getElementById("g-token").value = token;
    });
});
</script>
</body>
</html>