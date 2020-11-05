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
			@media only screen and (max-width: 991px){
				.mobilelogo {width:56%;}
				.mobilehide{display: none;}
			}
		  
	  </style>
  </head>
  <body>
   <!--Start Header -->
		 <?php include 'header.php'; ?>
  <!--Start Hero-->
<section class="hero-card-web hero-card-web1 hero-card-web2  bg-gradient12 shape-bg3">
<div class="hero-main-rp container-fluid">
<div class="row">
<div class="col-lg-4">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;margin-top:10%">
<img src="images/image2/logo.png" alt="image" class="img-fluid no-shadow">
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
	   <section class="service pad-tb about-agency light-dark ">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center"><h2 class="mb20" style=""><div class="quotes">
    <blockquote>
      <p>Logo Ko Kehne Do… Logo ka kaam hain Kehna</p>
      <footer>
      </footer>
    </blockquote>
  </div></h2></div>
<div class="col-lg-7 mb20" style="margin-top: 2%">
<div class="text-l service-desc- pr25">
<span class="text-radius  text-animation bg-b">GROW TRAFFIC &amp; INCREASE REVENUE</span>
	<h2>Why it should be Unique?</h2>
	<br>
	<p style="text-align: justify">A logo also needs to be unique because same or common logos often bring trouble during trademark or registration as it is sometimes found that another company is not only already using the same or similar logo, but also has it trademark. This results in loss of time, money and efforts and other legal obligations. This is why we thrive to provide one and unique logo for your business. </p>
<a href="#" class="btn-main bg-btn2 lnk mt30">Request A Quote  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>
<div class="col-lg-5">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<img src="images/logomaking.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
	<div class="-cta-btn ">
		<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s" style="visibility: hidden; animation-delay: 1.8s; animation-name: none;">
			<p >Get our <span>Logo  </span> Packages</p>
			<a href="#" class="btn-main bg-btn2 lnk">Get package<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
		</div>
	</div>
</div>
</div>
</section>
 <section class="service pad-tb about-agency light-dark bg-gradient15">	
<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading ptag">
					<span class="text-radius text-light text-animation bg-b">We Deliver Our Best</span>
					<h2>Logo Design</h2>
					<p class="mb30">There are 6 different types of logos and WEBINGO provides unique designing in any logo type based on your requirements.</p>
				</div>
			</div>
		</div>
		<div class="stamp-sheet col-md-12">
		  <div class="col-md-3 stamp torn mobilelogo mobilehide hide ">
			<img scr="images/logo-portfolio/3.jpg">
		  </div>
		  <div class="col-md-3  stamp mobilelogo">
			<img src="images/logo-portfolio/3.jpg">
		  </div>
		  <div class="col-md-3  stamp mobilelogo">
			<img src="images/logo-portfolio/4.jpg">
		  </div>
		  <div class="col-md-3  stamp mobilelogo">
			<img src="images/logo-portfolio/5.jpg">
		  </div>
		  <div class="col-md-3  stamp mobilelogo">
			<img src="images/logo-portfolio/6.jpg">
		  </div>
		  <div class="col-md-3  stamp mobilelogo">
			<img src="images/logo-portfolio/7.jpeg">
		  </div>
		  <div class="col-md-3  stamp mobilelogo">
			<img src="images/logo-portfolio/8.jpeg">
		  </div>
		  <div class="col-md-3  stamp mobilelogo">
			<img src="images/logo-portfolio/9.jpeg">
		  </div>
		  <div class="col-md-3  stamp mobilelogo ">
			<img src="images/logo-portfolio/10.jpeg">
		  </div>
		</div>
	  </section>
	  <section class="why-choos-lg pad-tb deep-dark">
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading ptag">
					<span class="text-radius text-light text-animation bg-b">We Deliver Our Best</span>
					<h2>Type of Logos</h2>
					<p class="mb30">There are 6 different types of logos and WEBINGO provides unique designing in any logo type based on your requirements.</p>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-lg-6">
		<div class="common-heading text-l">

		<div class="itm-media-object mt40">
			<div class="media">
				<img src="images/icons/abstract.png" alt="icon">
				<div class="media-body">
					<h4>Abstract Mark</h4>
					<p style="text-align:justify;">An abstract mark is a specific type of pictorial logo. Instead of being a recognizable image—like an apple or a bird—it's an abstract geometric form that represents your business. A few famous examples include the BP starburst-y logo, the Pepsi divided circle and the strip-y Adidas flower.</p>
				</div>
			</div>
			<div class="media mt40">
				<img src="images/icons/reddit.png" alt="icon">
				<div class="media-body">
					<h4> Mascot Logo</h4>
					<p style="text-align:justify;">Mascots. Mascot logos are logos that involve an illustrated character. Often colorful, sometimes cartoonish, and most always fun, the mascot logo is a great way to create your very own brand spokesperson—er, spokes-character(?).</p>
				</div>
			</div>
			<div class="media mt40">
				<img src="images/icons/combination.png" alt="icon">
				<div class="media-body">
					<h4>Combination Mark</h4>
					<p style="text-align:justify;">A combination mark is a logo comprised of a combined wordmark or lettermark and a pictorial mark, abstract mark, or mascot. The picture and text can be laid out side-by-side, stacked on top of each other, or integrated together to create an image.</p>
				</div>
			</div>
			</div>
		</div>
</div>
<div class="col-lg-6">
<div class="itm-media-object mt40">
	<div class="media">
		<img src="images/icons/transcript.png" alt="icon">
		<div class="media-body">
			<h4>Letter Mark</h4>
			<p style="text-align:justify;">A lettermark is a typography-based logo that's comprised of a few letters, usually a company's initials. It uses text to create a unique typographic mark. Similar to a lettermark, a wordmark logo is a font-based logo that focuses on a business` name alone. Google's logo is a great example of this.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/pictorial.png" alt="icon">
		<div class="media-body">
			<h4>Pictorial Mark</h4>
			<p style="text-align:justify;">Pictorial marks (or logo symbols) A pictorial mark (sometimes called brand mark or logo symbol) is an icon—or graphic-based logo. It's probably the image that comes to mind when you think “logo”: the iconic Apple logo, the Twitter bird, the Target bullseye.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/word.png" alt="icon">
		<div class="media-body">
			<h4>Word Mark</h4>
			<p style="text-align:justify;">Wordmark (word mark) or logotype are those logos that are made utilizing the alphabetical letters of the business name, product or services. It is the unique text-only typographic treatment of the business name to make it identifiable as the brand identity or logo.</p>
		</div>
	</div>
</div>
</div>
</div>
</div>
</section>
<section class="service-block pad-tb bg-gradient8 ">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="common-heading ptag">
									<span class="text-radius  text-light text-animation bg-b">We Deliver Our Best</span>
									<h2>Why is it Required?</h2>
									<p class="mb30" style="color: #fff">A logo is required to define you. A logo speaks for you an creates a brand for you.</p>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"></div>
									<div class="s-block-content" style="margin-bottom:8px">
										<h4><img src="images/icons/profit.png" alt="service" class="img-fluid" style="max-width:32px;"> &nbsp; Increase sales and profits</h4>
										<p>
											A logo that is recognised and trusted will bring in more sales and profits because people will trust your brand.<br></p>
										<br>
										
										
									</div>
								</div>
							</div>
						<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"></div>
									<div class="s-block-content">
										<h4><img src="images/icons/gain.png" alt="service" class="img-fluid" style="max-width:32px;"> &nbsp; Gain market share</h4>
										<p style="text-align:justify">
											The brand image that a company achieves is a powerful tool for gaining market leverage; with a positive brand image, it can influence its target audience's buying habits.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/stock-market.png" alt="service" class="img-fluid" style="max-width:32px;"> &nbsp;</div>
									<div class="s-block-content">
										<h4>Increase stock price</h4>
										<p>A logo helps increase your market value which is directly proportional to the stock prices.</p>
										<br>
										<br>
										<br>
										<br>
										<br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"></div>
									<div class="s-block-content">
										<h4><img src="images/icons/best.png" alt="service" class="img-fluid" style="max-width:32px;"> &nbsp; Improve perceived Quality and Credibility</h4>
										<p>The more highly customers think of your product or service, the more they are willing to pay for it and even to buy from you. Maintaining your perceived quality status also can prevent customers from trying a competitor’s offering.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.7s" style="visibility: visible; animation-delay: 1.7s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"></div>
									<div class="s-block-content">
										<h4 style="font-size: 17px"><img src="images/icons/gain-stra.png" alt="service" class="img-fluid" style="max-width:32px;"> &nbsp;Gain Strategic Advantage over Competition</h4>
										<p style="margin-bottom:55px">
											by offering consumers greater value, either by means of lower prices or by providing greater benefits and service that justifies higher prices.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"></div>
									<div class="s-block-content">
										<h4 ><img src="images/icons/remember.png" alt="service" class="img-fluid" style="max-width:32px;"> &nbsp;Be remembered</h4>
										<p style="margin-bottom:115px">
											If a person remembers about your logo, they automatically trust you are more likely to involve with your product/services.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="-cta-btn mt70">
							<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s" style="visibility: hidden; animation-delay: 1.8s; animation-name: none;">
								<p style="color: #fff">Let's Create a <span>New logo</span> Together</p>
								<a href="#" class="btn-main bg-btn2 lnk" data-toggle="modal" data-target="#myModal">Enquiry Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
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
             	Can I get a customised logo design service?
                </button>
              </div>
              <div id="collapse-a" class="card-body collapse " aria-labelledby="faq1" data-parent="#accordion">
                <p>
					Yes, definitely. WEBINGO offers a wide range of options in it’s wide range of Logo Designing Services. Describe them your requirement and they will provide you with the best possible solution.</p>
              </div>
            </div>
           <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-d" aria-expanded="true" aria-controls="collapse-d" style="color: #fff;">
              Is Demo available for any designing Services?
                </button>
              </div>
              <div id="collapse-d" class="card-body collapse " aria-labelledby="faq4" data-parent="#accordion2">
                <p>
					WEBINGO will provide you with their existing designs/portfolio to have a confidence in their designs. However, if you need a demo design for your requirement, you will have to pay for the same.</p>
              </div>
            </div>
          <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-d" style="color: #fff;">
               Is there a need to go with customize option for my <br>Business?
                </button>
              </div>
              <div id="collapse-2" class="card-body collapse " aria-labelledby="faq4" data-parent="#accordion2">
                <p>
					Custom is always preferred to avoid competition for the same design. Not getting Customised design might create copyright issues and other issues while business Incorporation and registration. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt60">
          <div id="accordion2" class="accordion">
            <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-4" aria-expanded="true" aria-controls="collapse-d" style="color: #fff;">
              Are Logos beneficial?
                </button>
              </div>
              <div id="collapse-4" class="card-body collapse " aria-labelledby="faq4" data-parent="#accordion2">
                <p>
					Logos create you a recognition. They are definitely beneficial because a person is more likely to buy or purchase your product or service if they trust your brand.</p>
              </div>
            </div>
			 
			  <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="true" aria-controls="collapse-d" style="color: #fff;">
               Is there any package?
                </button>
              </div>
              <div id="collapse-3" class="card-body collapse " aria-labelledby="faq4" data-parent="#accordion2">
                <p>
					Yes, there package systems for the kind of services you want.</p>
              </div>
            </div>
			   <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-d" style="color: #fff;">
              Can we get logo designing service with other designing services?
                </button>
              </div>
              <div id="collapse-1" class="card-body collapse " aria-labelledby="faq4" data-parent="#accordion2">
                <p>
					Yes, WEBINGO is an End-to-End IT Solutions company. It provides complete services.</p>
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
    function isScrolledIntoView(elem)
    {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        // console.log((elemBottom <= docViewBottom));
        // console.log((elemTop >= docViewTop));

        return ((elemTop <= docViewBottom));
    }
    $(document).ready(function () {
      var elem=$('img.spinnnerImg');
      $(window).scroll(function(){
        $.each(elem,function(index,item){
          var check = isScrolledIntoView(item);
          if(check && $(item).attr('src') == 'images/spinner.gif'){
            setTimeout(function(){
              $(item).attr('src',$(item).data('src'));  
            },500);
          }
        })
        
      })
    })
  </script>
	  <script>
	  
    var offset = $('.form_box').offset(),

      setps = $('.steps'),

      new_steps = $('.new_steps'),

      form_wrapper = $('.form_wrapper'),

      form_box_width = $('.form_box').width(),

      // container width

      container = $('.form_wrapper').width(),

      // slide parent

      slideWrapper = $('.sliders'),

      // slides

      slide = $('.slide'),

      //thumbnail lists

      thumbnailList = $('.thumbnail'),

      count = 0;

    //end of variables    

    slideWrapper.width(container * slide.length);

    slide.width(container);

    setoffset = () => {
      
      $('.steps, .new_steps').width(slide.height());

      $('.steps').offset({ left: (offset.left + form_box_width), top: offset.top });

      $('.new_steps').offset({ left: offset.left - (thumbnailList.outerHeight() * $('.new_steps li').length), top: offset.top });

    };

    setoffset();

    // thumbnailList click

    thumbnailList.click(function (e) {

      count++;

      currentTarget = $(e.target);

      currentIndex = currentTarget.attr('data-index');

      currentTarget.toggleClass('move');

      if (currentTarget.hasClass('move')) {

        if (count != slide.length + 1)

          currentTarget.animate({ top: - form_wrapper.width() - currentTarget.outerHeight() * count }, 1000).addClass('disabled');

        slideWrapper.animate({ left: '-=' + container + 'px' }, 1000).find('.slide.active').removeClass('active').next().addClass('active');

        setTimeout(() => {

          currentTarget.animate({ top: 0 }, 0).prependTo('.get_thumbnail .new_steps');

          currentTarget.next().removeClass('disabled');

          setoffset();

        }, 1000);

      } else {

        // console.log(currentIndex * container);

        slideWrapper.animate({ left: - currentIndex * container }, 1000);

        $('.steps').stop().css('margin-left', '0');

        // currentTarget.animate({ top: form_wrapper.width() + (currentTarget.outerHeight() * count) }, 1000);

        currentTarget.prevAll().animate({ top: form_wrapper.width() + (currentTarget.outerHeight() * count) }, 1000);

        setTimeout(() => {

          currentTarget.prevAll().not('personalInfo').animate({ top: 0 }, 0).prependTo('.steps').removeClass('disabled move');

          // currentTarget.animate({ top: 0 }, 0).prependTo('.steps').removeClass('disabled move');

          currentTarget.addClass('disabled move');

          setoffset();

          count = currentIndex;

        }, 1000);

      }

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