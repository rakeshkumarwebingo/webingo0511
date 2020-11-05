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
.s-card-icon-large {
    width: 250px;
}
th {
    text-align: inherit;
    padding-bottom: 35px;
}
td{
  padding-left: 3px;
}
tbody{
  font-family: sans-serif;
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
  <!--Breadcrumb Area-->
  <!--Start Hero-->
<section class="hero-card-web hero-card-web1 hero-card-web2  bg-gradient12 shape-bg3">
<div class="hero-main-rp container-fluid">
<div class="row">
<div class="col-lg-4">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;margin-top:10%">
<img src="images/demo1.png" alt="image" class="img-fluid no-shadow">
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
	<div class="col-lg-12 text-center"><h2 class="mb20" style=""></h2></div>
<div class="col-lg-7 mb20" style="margin-top: 2%">
<div class="text-l service-desc- pr25">
<span class="text-radius  text-light text-animation bg-b">SEO</span>
	<h2>Search Engine Optimization</h2>
	
<p style="text-align: justify">We offer Search Engine Optimization (SEO) services with experience of a lot of years
in executing successful SEO campaigns within the challenging competitive sectors of
the industry.
Every single business strives to be seen on the top of every single major search
engines, but only few knows the trick to be there. It is all about the SEO marketing of
your website that goes within this and it also clears the path for you to reach your
targeted customers easily. </p>
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

	  
<section class="service pad-tb bg-gradient15 light-dark">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="text-l service-desc- pr25">
  <h3 class="mb20" style="color:#000">SEO Includes </h3>  
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  <ul class="service-point-2 mt20">
    <li># 800+ Mobile Delivered</li>
    <li># 200+ Team Strength</li>
    <li># User-Friendly Interface</li>
    <li># 400 Happy Clients</li>
    <li># 95% Repeat business</li>
    <li># Quality Service UX</li>
  </ul>
  <a href="#" class="btn-main bg-btn2 lnk mt30">Request A Quote  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>
<div class="col-lg-5">
<div class="servie-key-points">
  <h4>Advantages of SEO</h4>
  <ul class="key-points mt20">
      <li>Link Building and content optimization</li>
      <li>Site maps and submitting URLs</li>
      <li>Keywords research</li>
      <li>Increase in traffic</li>
      <li>Crawling and Robots</li>
  </ul>
</div>
</div>
</div>
</div>
</section>
	  
	 <section class="about-agency pad-tb block-1">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-6">
          <div class="common-heading text-l ">
            <span class="text-radius  text-light text-animation bg-b">WEBINGO</span>
            <h2>OUR GOAL</h2>
            <p>
			WEBINGO is focused on organic keyword rankings on large search engines. Imagine
			owning a business in Kolkata, India and you want to gain more customers for your
			business, we will help for that. We will find out relevant and mostly searched
			keywords to promote your business to make your website visible online and get
			organic hit by potential customers. We have harnessed well experienced SEO experts
			who are able to help you by implementing all the latest strategies to generate you
			more profit.</p>
          </div>
        </div>
		   <div class="col-lg-6 v-center">
          <div class="about-image">
            <img src="images/demo1.png" alt="about us" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
	  
<section class="why-choos-lg pad-tb about-agency bg-gradient15 deep-dark">
<div class="container">
	<div class="row justify-content-center">
	<div class="col-lg-8">
		<div class="common-heading ptag">
			<span class="text-radius text-light text-animation bg-b">We Deliver Our Best</span>
			<h2>Dedicated SEO Services For Your
				Organization</h2>
			<p class="mb30">At Arobit, our diverse team will help you with all-inclusive and other dynamic SEO
			campaigns. We have specialists to work on every single sectors of digital marketing
			while building a fine tuning your websites’ online presence.</p>
		</div>
	</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="common-heading text-l">
<div class="itm-media-object mt40">
	<div class="media">
		<img src="images/icons/sketch.png" alt="icon">
		<div class="media-body">
			<h4>IMPLEMENTATION</h4>
			<p>WEBINGO has the goal to offer and provide an improvement on our customers’
				online presence while establishing a brand awareness.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/solution.png" alt="icon">
		<div class="media-body">
			<h4>Strategy</h4>
			<p>
				SEO is all about gaining more customers for your websites and this requires a proven
				strategy to follow.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/workshop.png" alt="icon">
		<div class="media-body">
			<h4>Research</h4>
			<p>
				It is always not important to re-originate the entire process or follow something
				extremely different to acquire exceptional outcomes.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/mobile-app-1.png" alt="icon">
		<div class="media-body">
			<h4>Functional Specification</h4>
			<p>

				Like a Bill of Materials that lists down all materials required for manufacturing, a
				functional specification sheet is a document</p>
		</div>
	</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="itm-media-object mt40">
	<div class="media">
		<img src="images/icons/pictorial.png" alt="icon">
		<div class="media-body">
			<h4>Content Management</h4>
			<p>
			We offer creative content solutions for our clients to engage the visitors while driving
			large amount of traffic from search engines.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/diagram.png" alt="icon">
		<div class="media-body">
			<h4>On Going Roles</h4>
			<p>
			When the users are trying to find out some specific query over Google, we make the
			website become searchable</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/complete.png" alt="icon">
		<div class="media-body">
			<h4>Testing as per milestones</h4>
			<p>
			An MVP is built in stages. At every stage it has to be tested for finding bugs and
			inconsistencies that should be weeded out.</p>
		</div>
	</div>
</div>
</div>
</div>
</div>
</section>

<section class="service-block bg-lights  pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading">
            <span class="text-radius  text-light text-animation bg-b">Our SERVICES</span>
            <h2 class="mb30">The Complete flow of work we follow</h2>
          </div>
        </div>
      </div>
      <div class="row upset link-hover">
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/ecommerce-1.png" alt="service" class="img-fluid"></div>
            <h4>E-Commerce SEO</h4>
            <p> 
			Webingo works with businesses that sell their products online and these are all about
			the e-commerce SEO services. </p>
            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/seo-2.png" alt="service" class="img-fluid"></div>
            <h4>Local SEO</h4>
            <p>

			There are some businesses that have physical locations to increase visibility within
			their local community.</p>
            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/international-seo.png" alt="service" class="img-fluid"></div>
            <h4>International SEO</h4>
            <p>
				If you are serving international clients or trying to expand your business on the
				international markets,</p>
            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/smartphone.png" alt="service" class="img-fluid"></div>
            <h4>Mobile SEO</h4>
            <p>
			In this digital age, mobile friendly businesses have become a necessity. And when you
			try to target customers on the go, </p>
            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/seo-audit.png" alt="service" class="img-fluid"></div>
            <h4>SEO Audit</h4>
            <p>
This is a crucial step to understand the strengths and weaknesses your website has. It
helps you know about the exact issues of the website</p>
            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
          <div class="s-block">
            <div class="s-card-icon"><img src="images/icons/app-1.png" alt="service" class="img-fluid"></div>
            <h4>Testing</h4>
            <p>We test the Website for any bugs or errors and fix them for a hassle-free
experience.them for a hassle-free
experience.</p>
            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
          </div>
        </div> 
      </div>
    </div>
  </section>  
	<section class="service-block bg-gradient15 about-agency pad-tb">
<div class="container">
	
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="common-heading ptag">
<span class="text-radius  text-light text-animation bg-b">Portfolio</span>
<h2>Our Portfolio</h2>
<p class="mb30">There are multiple packaging designing for products depending on the type of product. We provide designs for all of them</p>
</div>
</div>
</div>
<div class="row upset link-hover">
<div class="col-lg-12 col-md-12 mt30 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<div class="s-block wide-sblock">
<div class="s-card-icon-large">
	<table class="my_table">
		  <tr>
			<th>Project :</th>
			 <td>Anand Flour Mill</td>
		  </tr>
		  <tr>
		   <th>Keywords :</th>
			<td>Mill</td>
		  </tr>
			 <tr>
		   <th>Rank :</th>
			<td>1st</td>
		  </tr>
			 <tr>
		   <th>Duration :</th>
			<td>1 month</td>
		  </tr>
	</table>
  </div>
<div class="s-block-content-large">
  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
</div>
	</div>
</div>
<div class="col-lg-12 col-md-12 mt30 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block wide-sblock">
<div class="s-card-icon-large">
	<table class="my_table">
		  <tr>
			<th>Project :</th>
			 <td>Anand Flour Mill</td>
		  </tr>
		  <tr>
		   <th>Keywords :</th>
			<td>Mill</td>
		  </tr>
			 <tr>
		   <th>Rank :</th>
			<td>1st</td>
		  </tr>
			 <tr>
		   <th>Duration :</th>
			<td>1 month</td>
		  </tr>
	</table>
  </div>
<div class="s-block-content-large">
  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
</div>
	</div>
</div>
<div class="col-lg-12 col-md-12 mt30 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
 <div class="s-block wide-sblock">
<div class="s-card-icon-large">
	<table class="my_table">
		  <tr>
			<th>Project :</th>
			 <td>Anand Flour Mill</td>
		  </tr>
		  <tr>
		   <th>Keywords :</th>
			<td>Mill</td>
		  </tr>
			 <tr>
		   <th>Rank :</th>
			<td>1st</td>
		  </tr>
			 <tr>
		   <th>Duration :</th>
			<td>1 month</td>
		  </tr>
	</table>
  </div>
<div class="s-block-content-large">
  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
</div>
	</div>
  </div>
 
  <div class="col-lg-12 col-md-12 mt30 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
  <div class="s-block wide-sblock">
<div class="s-card-icon-large">
	<table class="my_table">
		  <tr>
			<th>Project :</th>
			 <td>Anand Flour Mill</td>
		  </tr>
		  <tr>
		   <th>Keywords :</th>
			<td>Mill</td>
		  </tr>
			 <tr>
		   <th>Rank :</th>
			<td>1st</td>
		  </tr>
			 <tr>
		   <th>Duration :</th>
			<td>1 month</td>
		  </tr>
	</table>
  </div>
<div class="s-block-content-large">
  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
</div>
	</div>
    </div>
    <div class="col-lg-12 col-md-12 mt30 wow fadeInUp" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;">
      <div class="s-block wide-sblock">
<div class="s-card-icon-large">
	<table class="my_table">
		  <tr>
			<th>Project :</th>
			 <td>Anand Flour Mill</td>
		  </tr>
		  <tr>
		   <th>Keywords :</th>
			<td>Mill</td>
		  </tr>
			 <tr>
		   <th>Rank :</th>
			<td>1st</td>
		  </tr>
			 <tr>
		   <th>Duration :</th>
			<td>1 month</td>
		  </tr>
	</table>
  </div>
<div class="s-block-content-large">
  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
</div>
	</div>
      </div>
      <div class="col-lg-12 col-md-12 mt30 wow fadeInUp" data-wow-delay="1.2s" style="visibility: hidden; animation-delay: 1.2s; animation-name: none;">
        <div class="s-block wide-sblock">
<div class="s-card-icon-large">
	<table class="my_table">
		  <tr>
			<th>Project :</th>
			 <td>Anand Flour Mill</td>
		  </tr>
		  <tr>
		   <th>Keywords :</th>
			<td>Mill</td>
		  </tr>
			 <tr>
		   <th>Rank :</th>
			<td>1st</td>
		  </tr>
			 <tr>
		   <th>Duration :</th>
			<td>1 month</td>
		  </tr>
	</table>
  </div>
<div class="s-block-content-large">
  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
</div>
	</div>
        </div>
      </div>
      <div class="-cta-btn mt70">
        <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.4s" style="visibility: hidden; animation-delay: 1.4s; animation-name: none;">
          
          <a href="#" class="btn-main bg-btn2 lnk">Get a quote<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
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
									<h2>WHY WEBINGO FOR YOUR SEO?</h2>
									<p class="mb30" style="color: #fff">Money motivates neither the best people nor the best in people.
										Purpose does.</p>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/quality-1.png" alt="service" class="img-fluid"></div>
									<div class="s-block-content">
										<h4 style="font-size: 15px">Our Working Experience</h4>
										<p>
											We are working with SEO since 2009.</p>
									</div>
								</div>
							</div>
						<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/seo-audit.png" alt="service" class="img-fluid"></div>
									<div class="s-block-content">
										<h4>Visitor</h4>
										<p>
											We offer organic visitor to your website.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/seo-2.png" alt="service" class="img-fluid"></div>
									<div class="s-block-content">
										<h4 >Best SEO Service</h4>
										<p>
											Our services practice the best SEO for an improved service.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/expert.png" alt="service" class="img-fluid"></div>
									<div class="s-block-content">
										<h4>Ability</h4>
										<p>
											We are able to provide you with the contrary engineering .</p>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.7s" style="visibility: visible; animation-delay: 1.7s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/remember.png" alt="service" class="img-fluid"></div>
									<div class="s-block-content">
										<h4>Projects</h4>
										<p>
											Provided service more than 500+ companies successfully.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/support-1.png" alt="service" class="img-fluid"></div>
									<div class="s-block-content">
										<h4 >Best Consultancy </h4>
										<p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="-cta-btn mt70">
							<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s" style="visibility: hidden; animation-delay: 1.8s; animation-name: none;">
								<p style="color: #fff">Let's Start a <span>New Project</span> Together</p>
								<a href="#" class="btn-main bg-btn2 lnk">Inquire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
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
</body>
</html>