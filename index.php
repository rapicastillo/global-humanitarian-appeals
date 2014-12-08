<!DOCTYPE html>
<html>
<head>
<title>Global Humanitarian Appeal 2015</title>
<meta property="og:title" content="Global Humanitarian Appeal 2015" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.unocha.org/2015appeal" />
<meta property="og:image" content="http://www.unocha.org/2015appeal/images/fb/fb-1.png" />
<meta property="og:image" content="http://www.unocha.org/2015appeal/images/fb/fb2.jpg" />
<meta property="og:image" content="http://www.unocha.org/2015appeal/images/fb/fb3.png" />

<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/colorbox.css">
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,800'/>

  <link rel="stylesheet" href="css/custom.css" />

  <!-- SLIDE 3 STYLE -->
  <style>

  .calluna { font-family: Calluna; }

    #s3-slide-show-stats .image-slideshow { position: relative; }
    #s3-slide-show-stats .image-slideshow .first-slide { z-index: 1000; }
    #s3-slide-show-stats .image-slideshow .second-slide { z-index: 900; }
    #s3-slide-show-stats .image-slideshow .third-slide { z-index: 800; }

    #s3-slide-show-stats .image-slideshow .first-slide,
    #s3-slide-show-stats .image-slideshow .second-slide,
    #s3-slide-show-stats .image-slideshow .third-slide
    {
      position: absolute;
      background-size: cover;
    }

    #s3-slide-show-stats .image-slideshow .first-slide { background-color: blue; }
    #s3-slide-show-stats .image-slideshow .second-slide { background-color: red; }
    #s3-slide-show-stats .image-slideshow .third-slide { background-color: yellow; }

    #s3-slide-show-stats .image-slideshow .fact-item {
      position: absolute;
      font-size: 48px;
      z-index: 2000;
      opacity: 0;
    }
  </style>
  <style>

    </style>
    <style>
     #transition-to-maps
   {
      background-color: #003855;
      background-image: url(images/map-00v1.png);
      background-size: 100% 100%;

      background-attachment: fixed;

      position: relative;
   }
   #transition-to-maps #transition-map-overlay
   {
      width: inherit;
      height: inherit;
      background-size: cover;
      background-image: url(images/transition/AbstractMaps.png);
      position: absolute;

      z-index: 1px;

      top: 0;
      left: 0;
    }

    #transition-to-maps #transition-to-maps-message {
      position: absolute;
      z-index: 100;
      width: inherit;
      /*background-image: url(images/transition/Middle-Shapes.png);*/


      background-repeat: no-repeat;
      background-size: 100% 100%;
      height: 245px;

      text-align: center;

      top: 50%;
      margin-top: -170px;

      z-index: 2100;
    }

    #transition-to-maps-message #transition-message > div { background-color: rgba(0, 56, 86, 0.7); }

    #transition-to-maps #transition-to-maps-message #transition-message {
        position:relative;
        height: inherit;
        width: inherit;
        text-align: center;
    }

    #transition-to-maps #transition-to-maps-message #transition-message div{
      width: inherit;
      position: absolute;
      bottom: 2%;
      text-align: center;

      color: white;
    }

    #transition-to-maps #transition-to-maps-message #transition-message h3 strong
    {
      color: #f47932;
    }

    #thanks-to-our-donors h1 {
      background-color: rgba(0, 56, 86, 0.7);
      color: white;
    }
  </style>

  <style>
  #map-area, #map-area-countries
  {
    position: relative;
    color: white;
  }

  </style>

 <style>
    .image-success-item { position: relative; }
    .image-success-item .first-slide { z-index: 2500; }
    .image-success-item .second-slide { z-index: 900; }
    .image-success-item .third-slide { z-index: 800; }

    .image-success-item .first-slide,
    .image-success-item .second-slide,
    .image-success-item .third-slide
    {
      position: absolute;
      background-size: cover;
      background-position: center center;

    }

    .image-success-item .fact-item
    {
      color: #f47932;
      background-color: rgba(0, 56, 86, 0.70);
      padding: 5px 20px;

      font-size: 16px;

      left: 0px;
    }

    .image-success-item .fact-item * {
      display: inline-block;
      vertical-align: middle;
    }

    .image-success-item .country-title-item
    {
      position: absolute;
      top: 0px;
      width: 0px;
      opacity: 0;

      z-index: 2000;

      color: white;

      background-color: rgba(155, 182, 44, 0.70);
      padding: 5px 20px;

      font-size: 16px;
    }

    .image-success-item .country-title-item h1 { margin: 0; white-space: nowrap; }

    .image-success-item .fact-item {
      position: absolute;
      font-size: 22px;
      z-index: 2000;
      opacity: 0;

      white-space: nowrap;
      overflow: hidden;
    }

    #slide-success-1-philippines .first-slide { background-image: url(images/success/philippines-fg.png); }
    #slide-success-1-philippines .second-slide { background-image: url(images/success/philippines-bg.jpg); }

    #slide-success-3-south-sudan .first-slide { background-image: url(images/success/southsudan-fg.png); }
    #slide-success-3-south-sudan .second-slide { background-image: url(images/success/southsudan-bg.png); }

    #slide-success-5-iraq .first-slide { background-image: url(images/success/iraq-fg.png); }
    #slide-success-5-iraq .second-slide { background-image: url(images/success/iraq-bg.png); }

    body > * { opacity: 0; }
  </style>

</head>
<body>
  <!-- <div id="initial-cover" style="width: 100%; height: 100%;"></div> -->

  <?php include("partials/title_page.php"); ?>

  <!-- SECOND SLIDE:: FLOATING IMAGES -->
  <div id="second-slide-problem-at-hand">
    <div id="burst-face-area">
      <div id="burst-face-main-message">
        <h3>
          Syria, <span style="display: inline-block">South Sudan</span>, Iraq, <span style="display: inline-block">Central African Republic.</span>
        </h3>
        <h4>The humanitarian outlook is cause for serious concern in 2015.</h4>
      </div>
      <div id="burst-face-second-message" class="calluna">
        <h4>
           The year will open with <span class="orange">tens  of millions</span> suffering the consequences of these emergencies.

          <p>These four crises alone account for over <span class="orange">70 per cent</span>  of overall funding requirements<br/>for the global appeal. </p>

        </h4>
      </div>
    </div>
  </div>

<!-- START OF: L3 SLIDES -->
 <?php include("partials/_l3_slides.php"); ?>
<!-- END OF: L3 SLIDES -->

<!-- START OF: TRANSITION FROM L3 to MAPS -->
<div id="transition-to-maps">
    <div id="transition-to-maps-message">
      <div id="transition-message">
        <div>
          <h3 class="calluna">
            Donors and humanitarian partners must come together<br/>to meet the needs of <strong class="orange highlighted">millions of people</strong> affected by each and every emergency.


          </h3>

          <h2 class="orange">
            <strong>No country should be left to fend for itself.</strong>
          </h2>
        </div>
      </div>
    </div>

  </div>
<!-- END OF: TRANSITION FROM L3 to MAPS -->

<!-- START OF: MAP AREA -->
<div id="map-area">
  <div id="map-data-flash-item"></div>
  <div id="map-data-score" data-anchor-target="#map-area" data-target="#map-area"
        data-100-center-top="opacity: 0" data-bottom-top="opacity: 0" data-center-top="opacity: 1"
        data-bottom-bottom="opacity: 1; font-size: 2em;" data-top-bottom="font-size: 3.7em"
        style="opacity: 0;"
        >
        <img src='images/icons/green-affected.png' height="50px"/> <h1 class="number green">0</h1><h1 class="text">&nbsp;PEOPLE TO BE ASSISTED IN 2015</h1></div>
  <div id="map-area-countries" style="padding-top: 30%;"></div>
  <div id="to-be-done-countries">
    <div class="fluid-container">
      <div class="row">
        <div class="col-md-12 text-center">

          <h4 class="calluna">...and Burkina Faso, Cameroon, Chad, Djibouti, Gambia, Mali, Mauritania, Niger, Nigeria and Senegal. </h4>

        </div>
      </div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
    </div>
  </div>
  <div style="clear:both"></div>
</div>
<!-- END OF: MAP AREA -->


<!-- START OF: MOSAIC MESSAGE AREA -->
<div id="mosaic-area">
  <div id="mosaic-area-container"

      data-bottom-top="position: relative"
      data-top-top="position: fixed; z-index: 1900; top: 0; left: 0; ">

    <div class="mosaic-main-message calluna" id="mosaic-main-message"
                                    style="opacity: 0;"
                                     data-200-center-top="..."
                                     data-anchor-target="#thanks-to-our-donors"
                                     data-emit-events >

      <p id="first-slide-item-text">The relentless cycle of large-scale crises has stretched<br/>humanitarian organizations to their very limit.</p>

      <p id="second-slide-item-text" >
      In 2014, despite a <strong class="orange">48 per cent shortfall in funding</strong> we managed to scale up <strong class="orange">life-saving operations</strong> in some of the most devastating crises.</p>

    </div>

    <!-- <div class="mosaic-main-message" data--200-center-top="opacity: 1" data--100-center-top="opacity: 0" data-anchor-target="#thanks-to-our-donors">
      Saving lives is priceless: Humanitarian assistance is critical and saving lives imperative.
      We are often asked to do more with less.
       We have rethought the way we work.
      We are getting better at planning our response and maximizing our resources.
      Yet, inadequate funding means less food, less shelter, less clean water, less life-saving support to the millions caught up in crises across the globe.
    </div> -->
  </div>
</div>
<div id="thanks-to-our-donors" data-top-bottom="..." data-emit-events>

</div>
<!-- END OF: MOSAIC MESSAGE AREA -->


<!-- START OF :: SUCCESS STORIES -->
<div style="position: relative" id ="success-stories-area">
    <div id="slide-success-1-philippines" class="image-success-item" data-played-out="false"
        data-center-top="..."  data-100-top-top="..." data-emit-events>

      <div class="first-slide"></div>
      <div class="second-slide" data-anchor-target="#slide-success-1-philippines"
        data-bottom-top="background-size: 150%; background-position-x: -150px"
        data-top-bottom="background-size: 100%; background-position-x: 0px;"></div>

      <!-- Facts -->
      <div class="country-title-item"><h1>PHILIPPINES</h1></div>

      <div class="fact-item" style="top: 40%;" data-change-to='{"width" : "50%", "opacity" : 1}' >
        <span class="fact-number" data-count="123400">570K</span>
        <span class="data-icon"><img src="images/icons/white-housing.png" height="50px" /></span>
        <span>HOUSEHOLD REACHED WITH<br/>EMERGENCY SHELTER</span>
      </div>
      <div class="fact-item" style="top: 55%;" data-change-to='{"width" : "50%", "opacity" : 1}'>
        <span class="fact-number" data-count="1553400">158K</span>
        <span class="data-icon"><img src="images/icons/white-roofing.png" height="50px" /></span>
        <span>HOUSEHOLDS GIVEN DURABLE<br/>ROOFING SOLUTIONS</span>
      </div>

    </div>

    <div id="slide-success-3-south-sudan" class="image-success-item" data-played-out="false"
       data-center-top="..."  data-100-top-top="..." data-emit-events>

      <div class="first-slide"></div>
      <div class="second-slide" data-anchor-target="#slide-success-3-south-sudan"
        data-bottom-top="background-size: 150%; background-position-x: 0px"
        data-top-bottom="background-size: 100%; background-position-x: -150px;"></div>

      <!-- Facts -->
      <div class="country-title-item"><h1>SOUTH SUDAN</h1></div>

        <div class="fact-item" style="top: 40%;" data-change-to='{"width" : "50%", "opacity" : 1}' >
          <span class="fact-number" data-count="123400">200K</span>
          <span class="data-icon"><img src="images/icons/white-vaccine.png" height="50px" /></span>
          <span>CHILDREN VACCINATED AGAINST MEASLES<br/>AND POLIO IN CONFLICT AREAS</span>
        </div>
        <div class="fact-item" style="top: 55%;" data-change-to='{"width" : "50%", "opacity" : 1}'>
          <span class="fact-number" data-count="1553400">3.5M</span>
          <span class="data-icon"><img src="images/icons/white-water.png" height="50px"/></span>
          <span>PEOPLE PROVIDED WITH CLEAN WATER<br/>AND HEALTH SERVICES</span>
        </div>

    </div>

      <!--IRAQ -->
      <div id="slide-success-5-iraq" class="image-success-item" data-played-out="false"
       data-center-top="..."  data-100-top-top="..." data-emit-events>

      <div class="first-slide"></div>
      <div class="second-slide" data-anchor-target="#slide-success-5-iraq"
        data-bottom-top="background-size: 150%; background-position-x: -150px"
        data-top-bottom="background-size: 100%; background-position-x: 0px;"></div>

      <!-- Facts -->
      <div class="country-title-item"><h1>IRAQ</h1></div>

      <div class="fact-item" style="top: 40%;" data-change-to='{"width" : "50%", "opacity" : 1}' >
        <span class="fact-number" data-count="123400">1M</span>
        <span class="data-icon"><img src="images/icons/white-health.png" height="50px"/></span>
        <span>PROVIDED WITH MEDICINES <br />AND MEDICAL SUPPLIES</span>
      </div>
      <div class="fact-item" style="top: 55%;" data-change-to='{"width" : "50%", "opacity" : 1}'>
        <span class="fact-number" data-count="1553400">500K</span>
        <span class="data-icon"><img src="images/icons/white-water.png" height="50px"/></span>
        <span>RECEIVED CLEAN WATER<br/>AND SANITATION SERVICES</span>
      </div>

      </div>
    </div>
    <!-- END OF SUCCESS STORIES -->

<div id="ending-message-area"
    data-bottom-top="background-size: 150%; background-position-x: 0px"
    data-top-bottom="background-size: 100%; background-position-x: -150px;"
>

  <div class="fluid-container first-slide">
    <div class="row"><div class="col-md-12">&nbsp;</div></div>
    <div class="row"><div class="col-md-12" style="padding-left: 50px;"><h1 class="orange"><strong>EVERY LIFE IS PRICELESS.</strong></h1> </div></div>
    <div class="row">
      <div class="col-md-7" style="padding-left: 50px;">
        <h3 class="white calluna">
          Aid organizations are re-grouping around better plans, more innovative approaches and more efficient action to make the most of the resources at hand.
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7" style="padding-left: 50px;">
        <h3 class="white calluna">
          <strong class="orange">But inadequate funding inevitably translates into less</strong> food, less shelter, less clean water and less care for the millions caught up in crises around the globe.
        </h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-7" style="padding-left: 50px;">
        <h3 class="white calluna">
          <strong class="orange">We need these appeals to be fully funded.</strong> We need more Member States and a more diverse group of donors to support our efforts.
        </h3>
      </div>
    </div>

  </div>
</div>

<div id="final-slide"  data-100-top-top="..." data-emit-events>
  <!-- <div id="girls" style="z-index: 1000; opacity: 0" data-anchor-target="#call-to-action" data-target="#call-to-action"
      data-bottom-top="background-position: center 150px; background-size: 100%" data-bottom-bottom="background-position: center -200px; background-size: 100%;" data-100-bottom-top="..." data-emit-events></div> -->
  <div class="fluid-container" data-anchor-target="#final-slide">
    <div class="row">
      <div class="col-md-12" id="final-message">
        <h2 class="text-center white calluna">
          Our actions depend on your contributions.
        </h2>
        <h1 class="text-center white">
          <span class="orange" style="font-weight: 800;">LET'S ACHIEVE MORE.</span> <span class="orange" style="font-weight: 800;">TOGETHER.</span>
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12" id="girls-background">
      </div>
    </div>


    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10" id="final-cta">
          <div class="row">
            <div class="col-md-6">
              <div id="video-content" >
              <h4 class="text-center white " style="font-weight: 800">WATCH</h4>
              <div class="cta-content text-center">
                <a class="ss-youtube" href="http://player.vimeo.com/video/113755969?rel=0&amp;wmode=transparent&amp;autoplay=1">
                  <img src="images/final/video-icon.png" height="150px"/>
                </a>
              </div>
            </div>
            </div>
            <!-- SHARE -->
            <div class="col-md-3">
              <h4 class="text-center white" style="font-weight: 800">SHARE</h4>
              <div class="cta-content cta-square">

                <p class="text-center">
                  <a class="facebook-logo" id="facebook-link" target="_blank" href="javascript: void(0);">
                    <img src="images/final/facebookicon.png" height="75px"/>
                  </a>
                  <a class="twitter-logo" href="javascript: void(0);">
                    <img src="images/final/twittericon.png" height="75px" />
                  </a>
                </p>
              </div>


            </div>

            <!-- LEARN MORE -->
            <div class="col-md-3">
              <h4 class="text-center white" style="font-weight: 800">LEARN MORE</h4>
              <div class="cta-content cta-square text-center">
                <a href="downloads/report.pdf" target="_blank">
                  <img src="images/final/download-report.png" style="height: 150px;"/>
                </a>
              </div>

            </div>
          </div>

      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>

<script src="js/skrollr.min.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/skrollr-ie.min.js"></script>
<![endif]-->

<script src="js/functions.js"></script>
<script src="js/custom.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1433955-15', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
$(function() {
  $("body > *").css("opacity", 1);
});
</script>
</body>
</html>
