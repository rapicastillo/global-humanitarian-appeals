<!DOCTYPE html>
<html>
<head>
  <style>
    .image-slideshow-item { position: relative; }
    .image-slideshow-item .first-slide { z-index: 1000; }
    .image-slideshow-item .second-slide { z-index: 900; }
    .image-slideshow-item .third-slide { z-index: 800; }

    .image-slideshow-item .first-slide,
    .image-slideshow-item .second-slide,
    .image-slideshow-item .third-slide
    {
      position: absolute;
      background-size: cover;
      background-position: center center;

    }

    .image-slideshow-item .fact-item
    {
      color: #f47932;
      background-color: rgba(0, 56, 86, 0.70);
      padding: 5px 20px;

      font-size: 16px;

      right: 0px;
    }

    .image-slideshow-item .fact-item * {
      display: inline-block;
      vertical-align: middle;
    }

    .image-slideshow-item .country-title-item
    {
      position: absolute;
      bottom: 30px;
      opacity: 0;

      z-index: 2000;

      color: white;

      background-color: rgba(155, 182, 44, 0.70);
      padding: 5px 20px;

      font-size: 16px;
    }

    .image-slideshow-item .country-title-item h1 { margin: 0; font-size: 28px; }

    /*.image-slideshow .first-slide { background-image: url(http://ocha.smugmug.com/Countries/Philippines/Typhoon-Haiyan-Life-inside-and/i-GPfJ3z3/0/X3/December%2011%2C%202013%20A%20child%20affected%20by%20Typhoon%20Yolanda%20walk%20amid%20the%20debris%20around%20%20two%20ships%20that%20were%20carried%20inland%20by%20the%20storm%20surge.%20%20Source%20OCHA%20Gemma%20Cortes-X3.jpg) }
    .image-slideshow .second-slide { background-image: url(http://ocha.smugmug.com/Countries/Philippines/Typhoon-Haiyan-Life-inside-and/i-T4RszF2/0/X3/IMG_2351-X3.jpg); }
    .image-slideshow .third-slide { background-image: url(http://ocha.smugmug.com/Countries/Philippines/Typhoon-Haiyan-Life-inside-and/i-jPt5THK/1/X3/IMG_2408-X3.jpg); }*/

    .image-slideshow-item .fact-item {
      position: absolute;
      font-size: 22px;
      z-index: 2000;
      opacity: 0;
    }

    #slide-1-philippines .first-slide { background-image: url(images/l3/philippines/000.jpg); }
    #slide-1-philippines .second-slide { background-image: url(images/l3/philippines/001.jpg); }
    #slide-1-philippines .third-slide { background-image: url(images/l3/philippines/002.jpg); }

    #slide-2-syria .first-slide { background-image: url(images/l3/syria/000.jpg); }
    #slide-2-syria .second-slide { background-image: url(images/l3/syria/001.jpg); }
    #slide-2-syria .third-slide { background-image: url(images/l3/syria/002.jpg); }

    #slide-3-south-sudan .first-slide { background-image: url(images/l3/southsudan/000.jpg); }
    #slide-3-south-sudan .second-slide { background-image: url(images/l3/southsudan/001.jpg); }
    #slide-3-south-sudan .third-slide { background-image: url(images/l3/southsudan/002.jpg); }

    #slide-4-car .first-slide { background-image: url(images/l3/car/000.jpg); }
    #slide-4-car .second-slide { background-image: url(images/l3/car/001.jpg); }
    #slide-4-car .third-slide { background-image: url(images/l3/car/002.jpg); }

    #slide-5-iraq .first-slide { background-image: url(images/l3/iraq/000.jpg); }
    #slide-5-iraq .second-slide { background-image: url(images/l3/iraq/001.jpg); }
    #slide-5-iraq .third-slide { background-image: url(images/l3/iraq/002.jpg); }
  </style>
</head>
<body>
  <div style="height: 1400px; width: 100%"></div>
  <div style="position: relative">
    <div id="slide-1-philippines" class="image-slideshow-item" data-played-out="false"
        data-bottom-center="..."  data-top-bottom="..." data-emit-events>

      <div class="first-slide"></div>
      <div class="second-slide"></div>
      <div class="third-slide"></div>

      <!-- Facts -->
      <div class="fact-item" style="bottom: 200px;">
        <span class="fact-number" data-count="123400">0</span>
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span>People in need</span>
      </div>
      <div class="fact-item" style="bottom: 100px;">
        <span class="fact-number" data-count="1553400">0</span>
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span>Stat Number</span>
      </div>

      <div class="country-title-item"><h1>PHILIPPINES</h1></div>
    </div>

    <div id="slide-2-syria" class="image-slideshow-item" data-played-out="false"
        data-bottom-center="..." data-top-bottom="..." data-emit-events
    >
      <div class="first-slide"></div>
      <div class="second-slide"></div>
      <div class="third-slide"></div>

      <!-- Facts -->
      <div class="fact-item" style="bottom: 200px;">
        <span class="fact-number" data-count="123400">0</span>
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span>People in need</span>
      </div>
      <div class="fact-item" style="bottom: 100px;">
        <span class="fact-number" data-count="1553400">0</span>
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span>Stat Number</span>
      </div>

      <div class="country-title-item"><h1>SYRIA</h1></div>
    </div>

    <div id="slide-3-south-sudan" class="image-slideshow-item" data-played-out="false"
      data-bottom-center="..." data-top-bottom="..." data-emit-events
    >
      <div class="first-slide"></div>
      <div class="second-slide"></div>
      <div class="third-slide"></div>

      <!-- Facts -->
      <div class="fact-item" style="bottom: 200px;">
        <span class="fact-number" data-count="123400">0</span>
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span>People in need</span>
      </div>
      <div class="fact-item" style="bottom: 100px;">
        <span class="fact-number" data-count="1553400">0</span>
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span>Stat Number</span>
      </div>

      <div class="country-title-item"><h1>SOUTH SUDAN</h1></div>
    </div>

    <!-- CAR -->
    <div id="slide-4-car" class="image-slideshow-item" data-played-out="false"
      data-bottom-center="..." data-top-bottom="..." data-emit-events
    >
      <div class="first-slide"></div>
      <div class="second-slide"></div>
      <div class="third-slide"></div>

      <!-- Facts -->
      <div class="fact-item" style="bottom: 200px;">
        <span class="fact-number" data-count="123400">0</span>
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span>People in need</span>
      </div>
      <div class="fact-item" style="bottom: 100px;">
        <span class="fact-number" data-count="1553400">0</span>
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span>Stat Number</span>
      </div>

      <div class="country-title-item"><h1>CENTRAL AFRICAN REPUBLIC</h1></div>
    </div>
      <!--IRAQ -->
      <div id="slide-5-iraq" class="image-slideshow-item" data-played-out="false"
      data-bottom-center="..." data-top-bottom="..." data-emit-events
    >
        <div class="first-slide"></div>
        <div class="second-slide"></div>
        <div class="third-slide"></div>

        <!-- Facts -->
        <div class="fact-item" style="bottom: 200px;">
          <span class="fact-number" data-count="123400">0</span>
          <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
          <span>People in need</span>
        </div>
        <div class="fact-item" style="bottom: 100px;">
          <span class="fact-number" data-count="1553400">0</span>
          <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
          <span>Stat Number</span>
        </div>


        <div class="country-title-item"><h1>IRAQ</h1></div>
      </div>
    </div>

  <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/skrollr.min.js"></script>
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
        $target.find(".first-slide").delay(500).fadeOut(500, function() {

            $(this).closest(".image-slideshow-item").find(".country-title-item").animate({opacity: 1, marginBottom: "+=10px"}, 2000);

            $(this).closest(".image-slideshow-item")
              .find(".fact-number").each(function() {

              var $this = $(this);
              console.log($this);

              $this.closest(".fact-item").delay(200).animate({opacity: 1, bottom: "+=20px" }, 3000, "swing");
              jQuery({ Counter: 0 }).animate({ Counter: parseInt($this.attr("data-count")) }, {
                duration: 2000,
                easing: 'swing',
                step: function () {
                  $this.text(comma_format( Math.ceil(this.Counter) ));
                }
              });
            });

            $target.find(".second-slide").delay(800).fadeOut(500, function() {});

        });
    };



    var s = skrollr.init({
    keyframe: function(element,name, direction) {
        $(element).trigger(name, direction);
    }
    ,
    edgeStrategy: 'set',
      easing: {
        WTF: Math.random
      }
    });
  });


  </script>
</body>
</html>
