<!DOCTYPE html>
<html>
<head>
  <style>
    .slide-element { position: relative; }
    .image_container { position: absolute; }
    .window-size { overflow-y: hidden; }

    .image-big { z-index: 1000; }
    .image-medium { z-index: 300; opacity: 0.8;}
    .image-small { z-index: 50; opacity: 0.5;}
    .burst-message { z-index: 500; height: 200px; position: absolute;}

  </style>
</head>
<body>
  <div id="pre"></div>
  <div id="slide-1-faced-with-unprecendented-severity" class="window-size slide-element" style="text-align: center">
    <h1 class="burst-message">In 2014, we have faced emergencies with unprecendented severity.</h1>
  </div>
  <div id="post"></div>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/skrollr.min.js"></script>
  <script type="text/javascript">

    $(function() {
      var burstMessage = $(".burst-message");
      burstMessage.css({
        top: "50%", left: "50%"
        , marginTop:  (burstMessage.height()/2 * -1) + "px"
        , marginLeft: (burstMessage.width()/2 * -1)  + "px"
      });
      $("#pre, #post, .window-size").width($(window).width()).height($(window).height());
      function faces_get_images(d) {
        return "<img src='" + d.src + "'/>";
      }

      function slideExplodeItem( targetItem, forwardSpeed, backwardSpeed)
      {
        var midPoint = $(window).height() / 2;
        targetItem.animate(
                            { marginTop: targetItem.position().top > midPoint
                                  ? (midPoint - targetItem.position().top)-midPoint-targetItem.height()-10 + "px"
                                  : targetItem.position().top +  ((midPoint + targetItem.height() - targetItem.position().top ) + midPoint) + "px"}
                                , forwardSpeed,

                                function() { targetItem.animate({marginTop: "0px"}, backwardSpeed, function (){ slideExplodeItem(targetItem, forwardSpeed, backwardSpeed); }) } );
      }
        d3.json("d/faces.json",
          function(error, json) {
            console.log(json);
            var d = d3.select("body #slide-1-faced-with-unprecendented-severity");
            var dm =  d.selectAll("div.image_container")
                .data(json.faces).enter().append("div")
                .html(faces_get_images).classed("image_container", true);


//.style("top", $(window).height() * Math.random() + "px")
//.style("left", $(window).width() * Math.random() + "px")

            dm.each(function(c) {
              $(this).addClass("image-" + c.type);


              $(this).css({ "top" :  $(window).height() * Math.random() + "px", "left": ($(window).width() - $(this).width()) * Math.random() + "px"});

              var midPoint = $(window).height() / 2;
              // console.log($(this).position().top, midPoint, ($(this).position().top - midPoint) - ($(this).position().top - midPoint) - $(this).height());
              // if ($(this).position().top > midPoint) {
              var goForward = 0;
              var goBack = 0;

              switch (c.type) {
                case "big" :
                  goForward = 3000 + (Math.random() * 10000);
                  goBack = 3000 + (Math.random() * 10000);
                  break;
                case "medium" :
                  goForward = 6000 + (Math.random() * 20000);
                  goBack = 6000 + (Math.random() * 20000);
                  break;
                case "small" :
                  goForward = 12000 + (Math.random() * 30000);
                  goBack = 12000 + (Math.random() * 30000);
                  break;
              }
              var targetItem= $(this);
              // setInterval( function() {
                slideExplodeItem(targetItem, goForward, goBack);

              // }, 3000);
            // }
            });


          }
        );
    });
    var s = skrollr.init({
        edgeStrategy: 'set',
          easing: {
            WTF: Math.random
          }
        });
  </script>
</body>
</html>
