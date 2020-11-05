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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lf4wNEZAAAAACeNgAtPhbDG2MuNRHf5HYwGBOcF"></script>
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
<img src="images/image2/react_bred.png" alt="image" class="img-fluid no-shadow">
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
      <p>Branding makes you who you are</p>
      <footer>
      </footer>
    </blockquote>
  </div></h2></div>
<div class="col-lg-7" style="margin-top:4%">
<div class="text-l service-desc- pr25">
	<span  class="text-radius text-light text-animation bg-b">GROW TRAFFIC &amp; INCREASE REVENUE</span>
	<h2> About native App Development</h2>
	<br>
<p style="text-align: justify">REACT NATIVE PROVIDES SUPERIOR PERFORMANCE SAME LIKE NATIVE APPS
INVENTED BY FACEBOOK &amp; INSTAGRAM, REACT NATIVE IS THE FIRST HYBRID
APP TECHNOLOGY THAT PERFORMS EXACTLY LIKE A NATIVE DOES. REACT
NATIVE COPES UP WITH 2 MAJOR ECOSYSTEMS – ANDROID APPS &amp; IOS APPS
WITH SAME UI FEATURES AND PERFORMANCE BUT AT THE HALF COST AND IN
THE LESS TIME. THE TECH GIANTS LIKE FACEBOOK, AIRBNB, GITHUB, PIXAR,
MICROSOFT, PINTEREST ETC. HAVE ALREADY PRIORITIZED REACT NATIVE
HIGHER IN THEIR MOBILE APP PROJECTS.</p>
<a href="#" class="btn-main bg-btn2 lnk mt30">Request A Quote  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>
<div class="col-lg-5" style="margin-top:4%">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<img src="images/image2/native.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
</div>
</div>
</section>

<section class="service pad-tb bg-gradient15 light-dark">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="text-l service-desc- pr25">
  <h3 class="mb20" style="color:#000">Benefits of Native App </h3>  
  <p>For many years, advertisers and digital marketers had misconceptions about lead
generation. They had no clear idea on how to deal with online visitors, where to take
them, and how to treat them. </p>
  <ul class="service-point-2 mt20" style="    display: grid;">
    <li># Meaningful designs. </li>
    <li># Customized Designs.</li>
    <li># Purpose fulfilling Designs.</li>
    <li># Design Complimenting Business.</li>
  </ul>
  <a href="#" class="btn-main bg-btn2 lnk mt30">Get a package  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>
<div class="col-lg-5">
<div class="servie-key-points">
  <h4>Advantages of Landing Pages </h4>
  <ul class="key-points mt20">
      <li>Huge cost saver because it’s open source and eliminates the need of 2 separate
native developments</li>
      <li>React Native empowers to write native code. Plus, Partial Native app + partial
react native is possible, No overhauling is required.</li>
      <li>Delivers the High Performance because of feature-rich library components</li>
      <li>Rich Ecosystem that seamlessly integrates with all APIs and Plugin</li>
  </ul>
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
									<span class="text-radius text-light text-animation bg-b">We Deliver Our Best</span>
									<h2>Why Choose WEBINGO?</h2>
									<p class="mb30" style="color: #fff">We are the best at what we do.</p>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-6 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/trustworthy.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>User-Centric Apps</h4>
										
										<p style="text-align:justify;">Each app is unique and so are the user interfaces we create. Our cross platform apps are known to drive user experience to the highest levels.eds. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/deliver-1.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Quick Delivery</h4>
										<p style="text-align:justify;">Speed to market is not a concern when you work with us. Our team of agile developers are trained in delivering ready to roll quality apps in no time.	</p>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/quality-1.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Quality Driven Apps</h4>
										<p style="text-align:justify;">No more compromises on app quality. We use the latest technologies to deliver state-of-the-art multi platform apps that speak for themselves.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/web-design-1.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>We Have Knowledge of Latest Frameworks</h4>
										<p style="text-align:justify;">
											Our expertise on the latest cross-platform frameworks and technologies enable us to remain competitive in the ever-growing technology world.
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/technical.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Flexible Engagement Models</h4>
										<p style="text-align:justify;">We offer best possible engagement models specifically designed to fit your long &amp; short term needs both.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/customer-service.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Support &amp; Maintenance</h4>
										<p style="text-align:justify;">Your ongoing needs to enhance, upgrade or fix bugs in your existing software are covered with us.
										</p>
									</div>
								</div>
							</div>
						
						
						</div>
						<div class="-cta-btn mt70">
							<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s" style="visibility: visible; animation-delay: 1.8s; animation-name: zoomInDown;">
								<p style="color: #fff">Let us <span>Serve you
									</span> </p>
								<a href="#" class="btn-main bg-btn2 lnk" data-toggle="modal" data-target="#myModal">Enquiry Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
							</div>
						</div>
					</div>
				</section>
				<!--<section class="why-choos-lg pad-tb about-agency light-dark">
				<div class="container">
					<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading ptag">
							<span class="text-radius text-light text-animation bg-b">We Deliver Our Best</span>
							<h2>Our Assurance</h2>
							<p class="mb30">Graphics Designs are a way of having your customers and potential customers interact with your services and products without any confrontation</p>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-lg-6">
				<div class="common-heading text-l">

				<div class="itm-media-object mt40">
					<div class="media">
						<img src="images/icons/money.png" alt="icon">
						<div class="media-body">
							<h4>Relevant Content</h4>
							<p style="text-align:justify;">
							Design and content in context to the corresponding ad links and campaigns.</p>
						</div>
					</div>
					<div class="media mt40">
						<img src="images/icons/statistics.png" alt="icon">
						<div class="media-body">
							<h4> Impactful Call To Action</h4>
							<p style="text-align:justify;">
							Getting response and feedback from the users through proper calls to action</p>
						</div>
					</div>
					<div class="media mt40">
						<img src="images/icons/stock-2.png" alt="icon">
						<div class="media-body">
							<h4>Multimedia Integration</h4>
							<p style="text-align:justify;">
							Videos, HD pictures and audio to appeal to the users in an interactive way</p>
						</div>
					</div>
				</div>
				</div>
				</div>
				<div class="col-lg-6">
				<div class="itm-media-object mt40">
					<div class="media">
						<img src="images/icons/quality-2.png" alt="icon">
						<div class="media-body">
							<h4> User Friendly Layout</h4>
							<p style="text-align:justify;">
							Letting the users navigate easily to get the information they are after</p>
						</div>
					</div>
					<div class="media mt40">
						<img src="images/icons/gain-2.png" alt="icon">
						<div class="media-body">
							<h4>Planned Architecture</h4>
							<p style="text-align:justify;">
							Webpage layout based on comprehensive marketing and user data</p>
						</div>
					</div>
					<div class="media mt40">
						<img src="images/icons/remember-1.png" alt="icon">
						<div class="media-body">
							<h4>Flexible Designs</h4>
							<p style="text-align:justify;">
							Webpages that are easy to upgrade or modify for different strategies</p>
						</div>
					</div>
				</div>
				</div>
				</div>
				</div>
				</section>-->
		

<section class="pad-tb bg-gradient15">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading">
	<span class="text-radius text-light text-animation bg-b">FAQS</span>
            <h2 class="mb0">Frequently Asked Questions</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mt60">
          <div id="accordion" class="accordion">
            <div class="card-1">
              <div class="card-header" id="faq1" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-a" aria-expanded="true" aria-controls="collapse-a" style="color: #fff;">
				Are your web applications responsive?
                </button>
              </div>
              <div id="collapse-a" class="card-body collapse " aria-labelledby="faq1" data-parent="#accordion">
                <p>
				
					Yes. Every web apps we have built since our inception has been mobile-friendly. With responsive design methods, we ensure that the web apps work well on a wide variety of screen sizes, from tablets and smartphones to small &amp; large desktop monitors.</p>
              </div>
            </div>
           <div class="card-1 ">
              <div class="card-header" id="faq5" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-e" aria-expanded="true" aria-controls="collapse-e" style="color: #fff;">
              Can we schedule a call to discuss my idea?
                </button>
              </div>
              <div id="collapse-e" class="card-body collapse" aria-labelledby="faq5" data-parent="#accordion2">
                <p>
					
					Yes, we are available for a call or email to discuss your app idea, whatever seems convenient to you.</p>
              </div>
            </div>
          
          </div>
        </div>
        <div class="col-md-6 mt60">
          <div id="accordion2" class="accordion">
			  
			  <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-b" aria-expanded="true" aria-controls="collapse-b" style="color: #fff;">
               I have a website; can you build an app for the same?
                </button>
              </div>
              <div id="collapse-b" class="card-body collapse" aria-labelledby="faq4" data-parent="#accordion2">
                <p>
					
					Yes, we can easily develop an app for your website. We use cloud databases so the data will be synchronized across your website and mobile app as well.</p>
              </div>
            </div>
            <div class="card-1 ">
              <div class="card-header" id="faq2" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-f" aria-expanded="true" aria-controls="collapse-f" style="color: #fff;">
                What is the average duration of the process? 
                </button>
              </div>
              <div id="collapse-f" class="card-body collapse" aria-labelledby="faq2" data-parent="#accordion2">
                <p>
					
					On an average, it takes at least three weeks to create an enterprise-level app. Generally, the duration of the process depends on the complexity of the app and the features that you want in the app.</p>
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