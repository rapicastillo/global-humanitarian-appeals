<!DOCTYPE html>
<html>
<head>
  <style>
    .image-slideshow { position: relative; }
    .image-slideshow .first-slide { z-index: 1000; }
    .image-slideshow .second-slide { z-index: 900; }
    .image-slideshow .third-slide { z-index: 800; }

    .image-slideshow .first-slide,
    .image-slideshow .second-slide,
    .image-slideshow .third-slide
    {
      position: absolute;
      background-size: cover;
    }

    .image-slideshow .first-slide { background-image: url(http://ocha.smugmug.com/Countries/Philippines/Typhoon-Haiyan-Life-inside-and/i-GPfJ3z3/0/X3/December%2011%2C%202013%20A%20child%20affected%20by%20Typhoon%20Yolanda%20walk%20amid%20the%20debris%20around%20%20two%20ships%20that%20were%20carried%20inland%20by%20the%20storm%20surge.%20%20Source%20OCHA%20Gemma%20Cortes-X3.jpg) }
    .image-slideshow .second-slide { background-image: url(http://ocha.smugmug.com/Countries/Philippines/Typhoon-Haiyan-Life-inside-and/i-T4RszF2/0/X3/IMG_2351-X3.jpg); }
    .image-slideshow .third-slide { background-image: url(http://ocha.smugmug.com/Countries/Philippines/Typhoon-Haiyan-Life-inside-and/i-jPt5THK/1/X3/IMG_2408-X3.jpg); }

    .image-slideshow .fact-item {
      position: absolute;
      font-size: 48px;
      z-index: 2000;
      opacity: 0;
    }
  </style>
</head>
<body>
  <div style="height: 1400px; width: 100%"></div>
  <div style="position: relative">
    <div id="slide-1-image-item" class="image-slideshow" data-played-out="false"
        data-bottom-center="opacity: 1"  data-top-bottom="opacity: 0" data-emit-events>

      <div class="first-slide"></div>
      <div class="second-slide"></div>
      <div class="third-slide"></div>

      <!-- Facts -->
      <div class="fact-item" style="bottom: 200px; right: 200px;">
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span class="fact-number" data-count="123400">0</span><span>People in need</span>
      </div>
      <div class="fact-item" style="bottom: 100px; right: 150px;">
        <span class="data-icon">
          <img src="http://placehold.it/50x50" />
        </span>
        <span class="fact-number" data-count="1553400">0</span>
        <span>Stat Number</span>
      </div>
    </div>

    <div id="slide-2-image-item" class="image-slideshow" data-played-out="false"
        data-bottom-center="opacity: 1" data-top-bottom="opacity: 0" data-emit-events
    >
      <div class="first-slide"></div>
      <div class="second-slide"></div>
      <div class="third-slide"></div>

      <!-- Facts -->
      <div class="fact-item" style="bottom: 200px; right: 200px;">
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span class="fact-number" data-count="123400">0</span><span>People in need</span>
      </div>
      <div class="fact-item" style="bottom: 100px; right: 150px;">
        <span class="data-icon">
          <img src="http://placehold.it/50x50" />
        </span>
        <span class="fact-number" data-count="1553400">0</span>
        <span>Stat Number</span>
      </div>
    </div>

    <div id="slide-3-image-item" class="image-slideshow" data-played-out="false"
      data-bottom-center="opacity: 1" data-top-bottom="opacity: 0" data-emit-events
    >
      <div class="first-slide"></div>
      <div class="second-slide"></div>
      <div class="third-slide"></div>

      <!-- Facts -->
      <div class="fact-item" style="bottom: 200px; right: 200px;">
        <span class="data-icon"><img src="http://placehold.it/50x50" /></span>
        <span class="fact-number" data-count="123400">0</span><span>People in need</span>
      </div>
      <div class="fact-item" style="bottom: 100px; right: 150px;">
        <span class="data-icon">
          <img src="http://placehold.it/50x50" />
        </span>
        <span class="fact-number" data-count="1553400">0</span>
        <span>Stat Number</span>
      </div>
    </div>
  </div>
  <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script type="text/javascript">

  $(function () {

    var comma_format = d3.format(",");
    $(".image-slideshow, .image-slideshow .first-slide, \
          .image-slideshow .second-slide, \
          .image-slideshow .third-slide")
        .width($(window).width())
        .height($(window).height());


    /* DATA EVENT LISTENERS */
    $("#slide-1-image-item, #slide-2-image-item, #slide-3-image-item").on("dataBottomCenter", function(e, direction) {

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
      setTimeout( function() {

          console.log("First timeout");

          $target.find(".first-slide").fadeOut(500, function() {
              console.log("Second timeout");

              $(this).closest(".image-slideshow")
                .find(".fact-number").each(function() {

                var $this = $(this);
                console.log($this);

                $this.closest(".fact-item").animate({opacity: 1,right: "+=" + ((Math.random() * 100) + 50) }, 3000, "swing");
                jQuery({ Counter: 0 }).animate({ Counter: parseInt($this.attr("data-count")) }, {
                  duration: 2000,
                  easing: 'swing',
                  step: function () {
                    $this.text(comma_format( Math.ceil(this.Counter) ));
                  }
                });
              });

              setTimeout(function () {
                $target.find(".second-slide").fadeOut(500, function() {});
              }, 800);

          });
        }, 500);
    };



    var s = skrollr.init({
    keyframe: function(element,name, direction) {
        console.log("XXXXX" , name, direction);
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
