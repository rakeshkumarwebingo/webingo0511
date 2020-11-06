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
			.box:hover{
				box-shadow: 10px 10px 10px  #595959;
			}
		  @media only screen and (max-width: 800px) {
  #no-table table, #no-table thead, #no-table tbody, #no-table th, #no-table td, #no-table tr {
    display: block;
  }

  #no-table thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }

  #no-table tr {
    border: 0px solid #ccc;
  }

  #no-table td {
    border: none;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 50%;
    white-space: normal;
    text-align: left;
  }

  #no-table td:before {
    position: absolute;
    top: 6px;
    left: 6px;
    width: 50%;
    padding-right: 10px;
    white-space: nowrap;
    text-align: left;
    font-weight: bold;
  }

  #no-table td:before {
    content: attr(data-title);
  }
}
.table-bordered td, .table-bordered th {
    border: 0px solid #dee2e6;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 0px;
	width: 2px;
}
.table-bordered {
    border: 0px solid #dee2e6;
}
		  .thsize{
			  font-weight: 100;
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
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;margin-top:10%" >
<img src="images/image2/hybrid_bred.png" alt="image" class="img-fluid no-shadow">
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
 
	<section class="service-block bg-gradient15 about-agency pad-tb">
<div class="container">
	
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="common-heading ptag">
<span class="text-radius  text-animation bg-b">OUR WORK</span>
<h2>SEO Portfolio</h2>
<p class="mb30">There are multiple packaging designing for products depending on the type of product. We provide designs for all of them</p>
</div>
</div>
</div>
<div class="row upset link-hover">



	<div class="col-lg-12 col-md-12 mt30 wow fadeInUp " data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block wide-sblock box">
	 <div class="col-lg-3 colo-12" >
<div class="">
	 <div id="no-table">
      <table class="col-sm-12 table-bordered table-striped table-condensed cf">
        <thead class="cf">
          <tr>
            <th>Project :</th>
            <th class="thsize">Anand Flour Mill</th>
          </tr>
		  <tr>
            <th>Keywords :</th>
            <th class="thsize">Mill</th>
          </tr>
			<tr>
            <th>Rank :</th>
            <th class="thsize">1st</th>
          </tr>
		  <tr>
            <th>Duration :</th>
            <th class="thsize">1 month</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
		 </div></div>
	 <div class="col-lg-9 col-12" >
		<div class="s-block-content-large">
		  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
		</div>
	</div>
	</div>
</div>
	<div class="col-lg-12 col-md-12 mt30 wow fadeInUp " data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block wide-sblock box">
	 <div class="col-lg-3" >
<div class="">
	 <div id="no-table">
      <table class="col-sm-12 table-bordered table-striped table-condensed cf">
        <thead class="cf">
          <tr>
            <th>Project :</th>
            <th class="thsize">Anand Flour Mill</th>
          </tr>
		  <tr>
            <th>Keywords :</th>
            <th class="thsize">Mill</th>
          </tr>
			<tr>
            <th>Rank :</th>
            <th class="thsize">1st</th>
          </tr>
		  <tr>
            <th>Duration :</th>
            <th class="thsize">1 month</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
		 </div></div>
	 <div class="col-lg-9" >
		<div class="s-block-content-large">
		  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
		</div>
	</div>
	</div>
</div>
	<div class="col-lg-12 col-md-12 mt30 wow fadeInUp " data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block wide-sblock box">
	 <div class="col-lg-3" >
<div class="">
	 <div id="no-table">
      <table class="col-sm-12 table-bordered table-striped table-condensed cf">
        <thead class="cf">
          <tr>
            <th>Project :</th>
            <th class="thsize">Anand Flour Mill</th>
          </tr>
		  <tr>
            <th>Keywords :</th>
            <th class="thsize">Mill</th>
          </tr>
			<tr>
            <th>Rank :</th>
            <th class="thsize">1st</th>
          </tr>
		  <tr>
            <th>Duration :</th>
            <th class="thsize">1 month</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
		 </div></div>
	 <div class="col-lg-9" >
		<div class="s-block-content-large">
		  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
		</div>
	</div>
	</div>
</div>
	<div class="col-lg-12 col-md-12 mt30 wow fadeInUp " data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block wide-sblock box">
	 <div class="col-lg-3" >
<div class="">
	 <div id="no-table">
      <table class="col-sm-12 table-bordered table-striped table-condensed cf">
        <thead class="cf">
          <tr>
            <th>Project :</th>
            <th class="thsize">Anand Flour Mill</th>
          </tr>
		  <tr>
            <th>Keywords :</th>
            <th class="thsize">Mill</th>
          </tr>
			<tr>
            <th>Rank :</th>
            <th class="thsize">1st</th>
          </tr>
		  <tr>
            <th>Duration :</th>
            <th class="thsize">1 month</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
		 </div></div>
	 <div class="col-lg-9" >
		<div class="s-block-content-large">
		  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
		</div>
	</div>
	</div>
</div>
	<div class="col-lg-12 col-md-12 mt30 wow fadeInUp " data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block wide-sblock box">
	 <div class="col-lg-3" >
<div class="">
	 <div id="no-table">
      <table class="col-sm-12 table-bordered table-striped table-condensed cf">
        <thead class="cf">
          <tr>
            <th>Project :</th>
            <th class="thsize">Anand Flour Mill</th>
          </tr>
		  <tr>
            <th>Keywords :</th>
            <th class="thsize">Mill</th>
          </tr>
			<tr>
            <th>Rank :</th>
            <th class="thsize">1st</th>
          </tr>
		  <tr>
            <th>Duration :</th>
            <th class="thsize">1 month</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
		 </div></div>
	 <div class="col-lg-9" >
		<div class="s-block-content-large">
		  <img src="images/seo/seo-mill.jpeg" alt="service" class="img-fluid">
		</div>
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