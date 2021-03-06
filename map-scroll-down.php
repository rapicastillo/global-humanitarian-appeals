
<!DOCTYPE html>
<html>
<head>
  <style>
  body { font-family: Arial; }
  #map-area, #map-area-countries
  {
    position: relative;
    color: white;
  }
    .map-country-item
    {

      padding: 5px 20px 20px;
      /*border: 1px solid #333333;*/
      float: left;
      /*width: 300px;*/
    }
    .map-country-item h3 { font-size: 24px; }
    .map-country-item::after { clear: both; }

    .country-item-info  { background-repeat: no-repeat; }
    .other-fact-item { margin-bottom: 2px; }
    .other-fact-item span, .other-fact-item img { display: inline-block; vertical-align: middle;  margin-right: 4px; }

    .map-count { color: #9ab62b; font-size: 38px;}
    #map-area { background-color: #003855; }
    #map-area #map-data-score {position: fixed; top: 10px; left: 0; width: 100%; text-align: center; color: #9ab62b;}
    #map-area #map-data-score h1 { display: inline; font-size: inherit;}
    #map-area #map-data-score * { font-size: 20px; vertical-align: middle; display: inline-block; }
  </style>
</head>
<body>

<!-- div style="width: 100%; height: 1000%; display: inline-block; position: absolute; top: 0; left: 0;">
  <svg width="100%" height="100%" style="position: fixed; top: 0; left: 0;">
    <text id="map-countdown-item" x="0" y="24" style="font-family: arial; font-size: 28px" >1,500,200</text>
    <circle cx="20" cy="20" r="10" fill="blue" />
    <circle cx="100" cy="100" r="15" fill="green" />

    <path d=" M 10 25
              S -10  55 50 95
            "

            stroke="red" stroke-width="2" fill="none" />
  </svg>
</div -->
<div style="height: 900px; display: inline-block;">&nbsp;</div>
<div id="map-area">
  <div id="map-data-score" data-anchor-target="#map-area" data-target="#map-area"
        data-bottom-top="opacity: 0" data-center-top="opacity: 1"
        data-bottom-bottom="opacity: 1; font-size: 32px;" data-top-bottom="font-size: 50px"
        ><img src='http://placehold.it/40x40' /> <h1>0</h1> People in need</div>
  <div id="map-area-countries"></div>
  <div style="clear:both"></div>
</div>
<div style="height: 1000px"></div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="js/skrollr.min.js"></script>
<script type="text/javascript">

$(function() {
  var comma_format = d3.format(",");
  var data;
  d3.json("d/map.json", function(error, json)
    {
      console.log(json);
      data = json;

      countries = d3
          .select("body #map-area #map-area-countries")
          .selectAll("div.map-country-item")
          .data(data.countries)
          .enter().append("div")
          .html(function(d) {



            var html = "";
            html += "<div class='country-item-info map-"+  d.type +"' style='background-image: url(" + d.map +")'>";
            if (d.type == "L3")
            {
              html += "<img src='http://placehold.it/30x30' />";
            }

            if (d.image != "")
            {
              html += "<img src='" + d.image + "' class='map-country-img' />";
            }

            html += "<h1 class='map-count' count-value='" + d.in_need + "'>0</h1>";
            html += "<h3>" + d.name + "</h3>";
            html += "<div class='other-facts'>";
            for (i in d.other_fig)
            {
              html +=   "<div class='other-fact-item'><img src='" + d.other_fig[i].image + "' /><span class='of-number' count-value='" + d.other_fig[i].count + "'>0</span><span class='of-label'> " + d.other_fig[i].label + "</span></div>";
            }
            html += "</div>";
            html += "</div>";

            return html;
          })
          .classed("map-country-item", true)
          .each(function(d) {
            if (d.style)
            {
              console.log(d.style);
              $(this).find(".country-item-info").css(d.style);
            }
          });




        //Set posision
        $("#map-area .map-country-item").each(function(i, item) {
          var marginTop = Math.random() * $(this).height()/4 * ( Math.random() < 0.5 ? -1 : 1 );
          //var marginTop = Math.random() * $(this).height();
           if (marginTop > 0) {
             marginTop += Math.random() * $(this).height();
           }
          var marginLeft = Math.random() * $(this).width()/3;

          $(this).css("marginTop", marginTop + "px");
          $(this).css("marginLeft", marginLeft + "px");


          // if ($(this).offset().left < $(this).width()) { console.log("YES"); $(this).css("marginLeft", 0); }

          console.log($(this).position(), $(this).offset());

          $(this).css({ top: $(this).position().top, left: $(this).position().left });
        });

        var mapAreaHeight = $("#map-area").height();
        $("#map-area").css("height", $("#map-area").height());

        $("#map-area .map-country-item").each(function(i, item) {
          $(this).css({position: "absolute", marginTop: "0", marginLeft: "0" });

          var marginTopFirstRandom = Math.floor(Math.random() * 100 );
          var marginTopLastRandom = Math.floor(Math.random() * - 100 );
          $(this).attr("data-bottom", "margin-top: " + marginTopFirstRandom + "px");
          $(this).attr("data-top", "margin-top: "+ marginTopLastRandom + "px");

        });

        // var mapIncrement = () / (mapAreaHeight - $(window).height());
        $(window).bind("scroll", function () {

          //For map-area scroll area -- upper left area
          var mapAreaOffset = $("#map-area-countries").offset().top - $(window).height() - $(window).scrollTop();

          //For individual item..
          var w_height = $(window).height();

          var current_overall_total = 0;
          $(".map-country-item").each(function(i, item) {
            var _countryItem = $(this);
            var _localCounter = $(this).find('.map-count');

            var countryOffset = _countryItem.offset().top;

            if( i >= 0 ) {

              var perc_half = ((_countryItem.offset().top - $(window).height() - $(window).scrollTop()) * -1 / $(window).height()) / 3 * 4 ;


              var for_value = parseInt( _localCounter.attr("count-value") );

              var curr_local_value = 0;
              if ( perc_half > 0 && perc_half <=  1)
              {
                curr_local_value = Math.floor(perc_half * for_value);

              }
              else if (perc_half < 0) {  curr_local_value = 0; }
              else if (perc_half > 1) { curr_local_value = for_value; }

              _localCounter.text(  comma_format ( curr_local_value ) );

              current_overall_total += curr_local_value;

              _countryItem.find(".other-facts").attr("perc_half", perc_half);
              _countryItem.find(".other-facts")
                .find(".other-fact-item")
                .each(

                function(j, item_j) {
                var _otherFact = $(this);
                var perc_half = parseFloat(_otherFact.parent().attr("perc_half"));
                var otherCount = parseInt(_otherFact.find(".of-number").attr("count-value"));

                // console.log(perc_half, comma_format(Math.floor(otherCount * perc_half)));

                if (perc_half > 0 && perc_half <= 1)
                {
                  _otherFact.find(".of-number").text(comma_format(Math.floor(otherCount * perc_half)));
                } else if (perc_half <= 0)
                {
                  _otherFact.find(".of-number").text(0);
                } else if (perc_half > 1)
                {
                  _otherFact.find(".of-number").text(comma_format(otherCount));
                }
              });
              //$(window).height()
              // console.log(_countryItem.find("h3").text(), countryOffset,  $(window).scrollTop(), (countryOffset - $(window).scrollTop()),
                  // (($(window).height()/2) / (countryOffset - ($(window).scrollTop() - $(window).height()/2)))*2  );
            }

          });

          $("#map-data-score h1").text( comma_format( current_overall_total ) );

        });

        var s = skrollr.init({
        edgeStrategy: 'set',
          easing: {
            WTF: Math.random
          }
        });
    });




});


</script>
</body>
</html>
