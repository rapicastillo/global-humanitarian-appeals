<!DOCTYPE html>
<html>
<head>
<meta property="og:title" content="Global Humanitarian Appeal 2015" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.unocha.org/2015appeal" />
<meta property="og:image" content="http://www.unocha.org/2015appeal/images/opengraph1.jpg" />
<meta property="og:image" content="http://www.unocha.org/2015appeal/images/opengraph2.jpg" />
<meta property="og:image" content="http://www.unocha.org/2015appeal/images/opengraph3.jpg" />

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
  </style>

</head>
<body>


  <?php include("partials/title_page.php"); ?>

  <!-- SECOND SLIDE:: FLOATING IMAGES -->
  <div id="second-slide-problem-at-hand">
    <div id="burst-face-area">
      <div id="burst-face-main-message">
        <h3>
          Syria, <span style="display: inline-block">South Sudan</span>, Iraq, <span style="display: inline-block">Central African Republic...</span>
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
        >
        <img src='images/icons/green-affected.png' height="50px"/> <h1 class="number green">0</h1><h1 class="text">&nbsp;PEOPLE TO BE ASSISTED IN 2015</h1></div>
  <div id="map-area-countries" style="padding-top: 40%;"></div>
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
                                     data-150-center-top=""
                                     data-anchor-target="#thanks-to-our-donors"
                                     data-emit-events >

      <p>The relentless cycle of large-scale crises has stretched<br/>humanitarian organizations to their very limit.</p>

      <p>
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

<div id="final-slide">
  <div id="girls" style="z-index: 1000; opacity: 0" data-anchor-target="#call-to-action" data-target="#call-to-action"
      data-bottom-top="background-position: center 150px; background-size: 100%" data-bottom-bottom="background-position: center -200px; background-size: 100%;" data-100-bottom-top="..." data-emit-events></div>
  <div class="fluid-container" data-anchor-target="#final-slide">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center white calluna">
          Our actions depend on your contributions.
        </h2>
        <h1 class="text-center white">
          <span class="orange" style="font-weight: 800;">LET'S ACHIEVE MORE.</span> <span class="orange" style="font-weight: 800;">TOGETHER.</span>
        </h1>
      </div>
    </div>
  </div>
</div>

<div id="call-to-action">
  <div class="container">
    <div class="row"><div class="col-md-12">&nbsp;</div></div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
          <div class="row">
          <!-- WATCH -->
            <div class="col-md-6">

              <div class="cta-content">
                <a class="ss-youtube" href="http://player.vimeo.com/video/113755969?rel=0&amp;wmode=transparent&amp;autoplay=1">
                  <img src="images/final/video-icon.png" width="100%"/>
                </a>
              </div>


            </div>

            <!-- SHARE -->
            <div class="col-md-3">

              <div class="cta-content">
                <div class="fb-share-button" data-href="http://www.unocha.org/2015appeal" data-layout="box_count"></div>

                <p>
                  <a class="facebook-logo" id="facebook-link" target="_blank" href="javascript: void(0);"
                    <img src="images/final/facebook-icon.png" />
                  </a>
                  <a class="twitter-logo" href="javascript: void(0);">
                    <img src="images/final/twitter-icon.png" />
                  </a>
                </p>
              </div>


            </div>

            <!-- LEARN MORE -->
            <div class="col-md-3">

              <div class="cta-content">
                <a href="downloads/report.pdf" target="_blank">
                  <img src="images/final/download-report.png" style="width: 100%;"/>
                </a>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-6 text-center"><h4 class="text-center white">WATCH</h4></div>
            <div class="col-md-3 text-center"><h4 class="text-center white">SHARE</h4></div>
            <div class="col-md-3 text-center"><h4 class="text-center white">LEARN MORE</h4></div>
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

<script src="js/functions.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">

  $(function () {

    var comma_format = d3.format(",");
    $(".image-slideshow-item, .image-slideshow-item .first-slide, \
          .image-slideshow-item .second-slide, \
          .image-slideshow-item .third-slide")
        .width($(window).width())
        .height($(window).height());


    /* DATA EVENT LISTENERS */
    $(".image-slideshow-item").on("dataBottomCenter", function(e, direction) {

        // console.log( $(this).offset().top, $(window).scrollTop(), $(this).offset().top - $(window).scrollTop() );
        // console.log("THIS", $(this), e, direction);
        var played = $(this).attr("data-played-out") == "true";

        if (!played) {
          var $target = $(this);

          console.log($(this));
          play_animation ($target);

          $(this).attr("data-played-out", "true");
        }

    });

    function play_animation($target) {
        $target.find(".country-title-item");

        $target.find(".country-title-item").animate({opacity: 1, width: "100%"}, 2000);
        $target.find(".first-slide").delay(500).fadeOut(500, function() {



            $(this).closest(".image-slideshow-item")
              .find(".fact-number").each(function() {

              var $this = $(this);
              console.log($this);

              var ext = $this.attr("data-nth");

              $this.closest(".fact-item").delay(200).animate({opacity: 1, bottom: "+=20px" }, 3000, "swing");
              jQuery({ Counter: 0 }).animate({ Counter: parseInt($this.attr("data-count")) }, {
                duration: 2000,
                easing: 'swing',
                step: function () {
                  var amt = "";
                  if (ext == "K") {
                    amt = comma_format( Math.ceil(this.Counter));
                  } else {
                    amt = comma_format( Math.ceil(this.Counter * 10) / 10 );

                    if ( amt % 1 == 0 ) { amt = amt + ".0"; }
                  }

                  $this.text( amt + "" + ext);
                },

                complete: function() {
                    console.log("XXX");
                    $this.text($this.attr("data-final") + ext);

                  }
              });
            });

            $target.find(".second-slide").delay(800).fadeOut(500, function() {});

        });
    };


  });

  </script>
  <script>
    $(function() {
      $("#transition-to-maps").width($(window).width()).height($(window).height());
    });
  </script>


  <script type="text/javascript">

$(function() {
});

</script>
<script type="text/javascript">

$(function() {
  /* Styling */

  $("#thanks-to-our-donors").width($(window).width()).height($(window).height());

  $("#thanks-to-our-donors").on("dataTopBottom", function(e, direction) {
    console.log("Thanks to our donors", e, direction);
    if (direction == "down")
    {
      $("#mosaic-area-container, #map-data-score").fadeOut("fast");
    }
    else // direction == "down"
    {
      $("#mosaic-area-container, #map-data-score").fadeIn("fast");
    }
  })

  // $(".mosaic-main-message").each(function() {
  //     $(this).css({
  //         "marginTop" : "-" + $(this).height() /2 + "px",
  //         "marginLeft" : "-" + $(this).width()/2 + "px",
  //         "left" : $(window).width()/2 + "px",
  //         "top" : $(window).height()/2 + "px",
  //     });
  //   });

  function fader(item)
  {
    var timeout_delay = (Math.random() * 5000) + 1000;
    setTimeout(function() {
      var delay1 = (Math.random() * 5000) + 3000;
      var delay2 = (Math.random() * 5000) + 3000;

      item.delay(delay1).fadeOut("slow").delay(delay2).fadeIn("slow", function () { fader(item); });
    }, timeout_delay);
  }
  $.get("d/image_list.json", function (data) {

      //cols
      var square_size =  $(window).height()/5; //( $(window).width() / $(window).height() ) * 64;

      var square_count_rows = Math.ceil($(window).height() / square_size);
      var square_count_cols = Math.ceil($(window).width() / square_size );

      var square_height = $(window).height() / (square_count_rows - 1);
      var square_width = $(window).width() / (square_count_cols - 1);

      // console.log(square_count_cols, square_count_rows);
      for ( var y = 0; y < square_count_rows - 1; y ++) {

        var row = $("<div />").addClass("mosaic-row");

        for ( var x = 0; x < square_count_cols - 1; x ++ ) {



          var img_data_1 = data.image_list[ (y * square_count_rows + x) % data.image_list.length ];
          var img_data_2 = data.image_list[ Math.floor( Math.random() * data.image_list.length ) ];

          var item_1 = $("<div />").addClass("mosaic-image mosaic-initial-image")
                      .css({ "background-image":  "url(" + img_data_1 + ")", width : square_width + "px", height : square_height + "px" });
          var item_2 = $("<div />").addClass("mosaic-image mosaic-over-image")
                      .css({ "background-image": "url(" + img_data_2 + ")", width : square_width + "px", height : square_height + "px" });

          // console.log(img_data_1, img_data_2);


          var item = $("<div />").addClass("mosaic-item").width(square_width).height(square_height);
              item.append(item_1);
              item.append(item_2);

          fader(item_1);
          row.append(item);

        }
        row.height(square_height);

        $("#mosaic-area-container").append(row);

      }

      $("#mosaic-area").width($(window).width()).height($(window).height());


      var s = skrollr.init({
      keyframe: function(element,name, direction) {
          console.log(element, name, direction);
          $(element).trigger(name, direction);
      }
      ,
      edgeStrategy: 'set',
        easing: {
          WTF: Math.random
        }
      });
  });
});


</script>

<script type="text/javascript">

  $(function () {

    var comma_format = d3.format(",");
    $(".image-success-item, .image-success-item .first-slide, \
          .image-success-item .second-slide, \
          .image-success-item .third-slide")
        .width($(window).width())
        .height($(window).height());


    /* DATA EVENT LISTENERS */
    $(".image-success-item").on("dataCenterTop", function(e, direction) {

      if (direction == "down")
      {
        var window_w = $(window).width();
        $(this).find(".country-title-item").stop(true, true).animate({ width : window_w + "px", opacity: "1"}, 2000);
      }
      else //down
      {
        console.log("UP", $(this).find(".country-title-item") );
        $(this).find(".country-title-item").stop(true, true).animate({ width : "0", opacity: "0"}, 2000);
      }

    });

    $(".image-success-item").on("data100TopTop", function(e, direction) {

        if (direction == "down")
        {

          $(this).find(".fact-item").each(function (i, item) {
            var change_json = JSON.parse( $(this).attr("data-change-to") );
            $(this).stop(true, true).delay(i * 500).animate(change_json, 2000);
          });

        }
        else //down
        {
          $(this).stop(true, true).find(".fact-item").animate({ width : "30px", opacity: "0"}, 2000);
        }

    });

    $(".image-success-item").on("dataBottomCenter", function(e, direction) {

        // console.log( $(this).offset().top, $(window).scrollTop(), $(this).offset().top - $(window).scrollTop() );
        // console.log("THIS", $(this), e, direction);
        var played = $(this).attr("data-played-out") == "true";

        if (!played) {
          var $target = $(this);

          console.log($(this));
          play_animation ($target);

          $(this).attr("data-played-out", "true");
        }

    });

  });
  </script>

</body>
</html>
