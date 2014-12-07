$(function() {
  /* SET WINDOW AREA */
  var comma_format = d3.format(",");

  $(window).on("resize", function() {
    var _w = $(window).width();
    var _h = $(window).height();
    $("#title-slides-area, #title-slides-area > .row, #background-world").height($(window).height());
    $("#ending-message-area, #final-slide").height($(window).height()).width($(window).width());

    refresh_slide2();

    $("#burst-face-main-message, #burst-face-area #burst-face-second-message").css({ "top" : _h/4 + "px", "left" : 0 , "height" : _h/4 + "px"});

    $("#burst-face-area #burst-face-second-message").css("top", (2* _h/4) + "px");

    /* For map */
    $("#mosaic-main-message").css({ "top" : 2 * _h/4 + "px", "height" : _h/4 * 2 + "px"});
  });

  $(window).trigger("resize");

  $("#girls").on("data100BottomTop", function(event, direction) {

    if ( direction == "down" )
    {
        $("#girls").animate({ opacity: 1}, 1000);
    }
    else
    {
      $("#girls").animate({ opacity: 0}, 1000);
    }

  });
      /* Animation ..  */

      //SLIDE 1:
    setTimeout ( function () {

      var parent = $("#first-with-people-fades");
      var people_layers = 12;
      for (var i = 0; i < people_layers; i ++) {

        var new_div = $("<div />").height(parent.height() * 0.05).addClass("people-fade").css({bottom: (parent.height() * 0.05 * i) + "px" });
        var opacity_new = ((people_layers - i) * (100/people_layers) / 100);
        parent.append( new_div );

        new_div.css("opacity", 0);
        new_div.delay((i+1) * 150).animate({ opacity: opacity_new }, 800);

      }

      $("#first-needs-graph, #second-needs-graph, #third-needs-graph").css("height", "0%");
      $("#first-needs-graph").animate({ height: "98%" }, 2000);
      $("#second-needs-graph").animate({ height: "89%" }, 2000);
      $("#third-needs-graph").animate({ height: "79%" }, 2000);


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

    },
    500);


    // MAP AREA
    var data;
    $.get("d/map.json", function(data) {

      var $map_div = $("#map-area-countries");
      var current_row;
      for (var i = 0; i < data.countries.length; i++)
      {
        var d = data.countries[i];

        if (i % 2 == 0) //3 per row
        {
          $current_row = $("<div/>").addClass("row");
          $current_row.append( $("<div />").addClass("col-md-3") );
          $map_div.append( $current_row );
        }
        else
        {
          $current_row = $("<div/>").addClass("row");
          $current_row.append( $("<div />").addClass("col-md-4 text-right") );
          $map_div.append( $current_row );
        }

        var $country_item = $("<div />").addClass("map-country-item col-md-5");

        if (i % 2 != 0) { $country_item.addClass("text-right"); }

        var html = "";
            html += "<div class='country-item-info map-"+  d.type +"' style='background-image: url(" + d.map +")'>";
            html += "<h1 class='map-count' final-value='" + d.words + "' count-value='" + d.in_need + "'>0</h1>";
            html += "<h5 class='green'>PEOPLE TO BE ASSISTED</h5>";
            html += "<h3>" + d.name + "</h3>";
            html += "<div class='other-facts'>";
            for ( var x = 0; x < d.other_fig.length; x++ )
            {
              html +=   "<div class='other-fact-item' data-final='" + d.other_fig[x].final + "' ><img src='" + d.other_fig[x].image + "' /><span class='of-number' count-value='" + d.other_fig[x].count + "' >0</span><span class='of-label'> " + d.other_fig[x].label + "</span></div>";
            }
            html += "</div>";
            html += "</div>";

            $country_item.html(html);

          $current_row.append($country_item);
          $current_row.append( $("<div />").addClass("col-md-1") );
          // console.log($current_row);
      }
    });
    // d3.json("d/map.json", function(error, json)
    //   {
    //     console.log(json);
    //     data = json;

    //     countries = d3
    //         .select("body #map-area #map-area-countries")
    //         .selectAll("div.map-country-item")
    //         .data(data.countries)
    //         .enter().append("div")
    //         .html(function(i, d) {



    //           var html = "";
    //           html += "<div class='country-item-info map-"+  d.type +"' style='background-image: url(" + d.map +")'>";
    //           html += "<h1 class='map-count' count-value='" + d.in_need + "'>0</h1>";
    //           html += "<h3>" + d.name + "</h3>";
    //           html += "<div class='other-facts'>";
    //           for (i in d.other_fig)
    //           {
    //             html +=   "<div class='other-fact-item'><img src='" + d.other_fig[i].image + "' /><span class='of-number' count-value='" + d.other_fig[i].count + "'>0</span><span class='of-label'> " + d.other_fig[i].label + "</span></div>";
    //           }
    //           html += "</div>";
    //           html += "</div>";

    //           return html;
    //         })
    //         .classed("map-country-item", true)
    //         .each(function(d) {
    //           if (d.style)
    //           {
    //             console.log(d.style);
    //             $(this).find(".country-item-info").css(d.style);
    //           }
    //         });




          //Set posision
          // $("#map-area .map-country-item").each(function(i, item) {
          //   var marginTop = Math.random() * $(this).height()/4 * ( Math.random() < 0.5 ? -1 : 1 );
          //   //var marginTop = Math.random() * $(this).height();
          //    if (marginTop > 0) {
          //      marginTop += Math.random() * $(this).height();
          //    }
          //   var marginLeft = Math.random() * $(this).width()/3;

          //   $(this).css("marginTop", marginTop + "px");
          //   $(this).css("marginLeft", marginLeft + "px");


          //   // if ($(this).offset().left < $(this).width()) { console.log("YES"); $(this).css("marginLeft", 0); }

          //   console.log($(this).position(), $(this).offset());

          //   $(this).css({ top: $(this).position().top, left: $(this).position().left });
          // });

          // var mapAreaHeight = $("#map-area").height();
          // $("#map-area").css("height", $("#map-area").height());

          // $("#map-area .map-country-item").each(function(i, item) {
          //   $(this).css({position: "absolute", marginTop: "0", marginLeft: "0" });

          //   var marginTopFirstRandom = Math.floor(Math.random() * 50 );
          //   var marginTopLastRandom = Math.floor(Math.random() * -50 );
          //   $(this).attr("data-bottom", "margin-top: " + marginTopFirstRandom + "px");
          //   $(this).attr("data-top", "margin-top: "+ marginTopLastRandom + "px");

          // });

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
                  _localCounter.text(  comma_format ( curr_local_value ) );
                }
                else if (perc_half < 0) {  curr_local_value = 0; _localCounter.text(  comma_format ( curr_local_value ) );}
                else if (perc_half >= 1) {
                  _localCounter.html("<span style='font-weight: 700;'>" + _localCounter.attr("final-value") + "</span>");

                  curr_local_value = for_value;
                }

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
                    _otherFact.find(".of-number").html("<span style='font-weight: 700;'>" + $(this).attr("data-final") + "</span>");
                  }
                });
              }

            });

            if (current_overall_total > 57500000) {
              $("#map-data-score h1.number").text("57.5 MILLION").css("font-weight", "700");
            } else {
              $("#map-data-score h1.number").text( comma_format( current_overall_total ) ).css("font-weight", "normal");
            }

          });

          // var s = skrollr.init({
          // edgeStrategy: 'set',
          //   easing: {
          //     WTF: Math.random
          //   }
          // });

    /* LIGHTBOX */
   $(".ss-youtube").colorbox({iframe:true, innerWidth:740, innerHeight: 500});

  /*TWITTER*/
  var win;
  $(".ch-info .ch-info-back, .twitter-logo").each(function(i, item) {

    $(this).bind("click", function() {
      if (win)
      {
        win.close();
      }

      show_text = $(this).find("p").text();

      var param = $.param({
        url: "http://www.unocha.org/2015appeal",
        via: "unocha",
        hashtags: "2015Appeal",
        text: "Every life is priceless."
      });

      win = window.open("https://twitter.com/intent/tweet?" + param, "twitter", "height=300,width=600,modal=yes,alwaysRaised=yes");
      win.focus();
    })


    //$(this).appendTo($link);
  });

  $("#facebook-link").on("click", function() {
    var INTERACTIVE_URL = encodeURIComponent("http://www.unocha.org/2015appeal");
    window.open('http://www.facebook.com/sharer.php?u='+ INTERACTIVE_URL,'sharer','toolbar=0,status=0,width=626,height=436');return false;

  });

});
