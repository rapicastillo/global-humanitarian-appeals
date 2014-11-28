<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <style>
    body { background-color: black; }
    #title-slides-area { position: relative; background-color: whitesmoke;}
    #title-slides-area > .row { position: absolute; bottom: 0; }
    #title-slides-area > .row > div { height: 100%; position: relative; }
    #title-slides-area #stats-area { opacity: 0; }
    .people-fade { background-color: gray; position: absolute; bottom: 0; width: 100%;}

  </style>
</head>
<body>
  <div id="pre"></div>
  <div id="title-slides-area" class="fluid-container">
    <div class="row" style=" width: 100% ">
      <div class="col-md-7" id="first-with-people-fades">
        <div class="row">
          <div class="col-md-12 text-right">
            <h1>Staggering</h1>
            <h1>Demands</h1>
            <h3>Humanitarian Global Appeals lorem ipsum dolor sikmet</h3>
          </div>
        </div>
      </div>
      <div class="col-md-1" >
        <div id="first-needs-graph" style="height: 0%; background-color: brown; position: absolute; bottom: 0; width: 80%;">
          <h4>$<span  data-final-count="7.1" data-type="float">7.1</span>B</h4>
          <h5>required</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div id="stats-area" style="position: absolute; bottom: 0;">
          <h2><img src="http://placehold.it/60x60" /><span data-final-count="2.4" data-type="float" >0</span><span>M People in need</span></h2>

          <h2><img src="http://placehold.it/60x60" /><span data-final-count="1.2" data-type="float">0</span><span>M People to receive aid</span></h2>
          <h2><img src="http://placehold.it/60x60" /><span data-final-count="77" data-type="int">0</span><span>aid organizations appealing this year</span></h2>
        </div>
      </div>
    </div>
  </div>
  <div id="post"></div>
<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>

<script src="js/skrollr.min.js"></script>
  <script type="text/javascript">

    $(function() {
      /* Styling ..*/
      $("#title-slides-area, #title-slides-area > .row").height($(window).height() * .95);

      /* Animation ..  */
      setTimeout ( function () {

        var parent = $("#first-with-people-fades");
        var bar_graph = $("#first-needs-graph");
        var people_layers = 9;
        for (var i = 0; i < people_layers; i ++) {

          var new_div = $("<div />").height(parent.height() * 0.07).addClass("people-fade").css({bottom: (parent.height() * 0.07 * i) + "px" });
          var opacity_new = ((people_layers - i) * (100/people_layers) / 100);
          parent.append( new_div );

          new_div.css("opacity", 0);
          new_div.delay((i+1) * 150).animate({ opacity: opacity_new }, 800);

        }

        bar_graph.css("height", "0%");
        bar_graph.animate({ height: "98%" }, 2000);

        $("#title-slides-area").find("[data-final-count]").each(function () {
            var $this = $(this);
            console.log($this);
            jQuery({ Counter: 0 }).animate({
                      Counter: parseFloat($this.attr("data-final-count")) }, {
                      duration: 2000,
                      easing: 'swing',
                      step: function () {
                        console.log(this.Counter);
                        if ($this.attr("data-type") == "int")
                        { $this.text( Math.ceil(this.Counter) ); }
                        else if ($this.attr("data-type") == "float")
                        { $this.text( Math.ceil(this.Counter * 10) / 10 ); }
                      }
              });

          });

        $("#title-slides-area #stats-area").css("opacity", 0).animate({ "opacity" : 1, bottom : "+=30px" }, 2000);

      },
      500);
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
