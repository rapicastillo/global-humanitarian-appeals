var comma_format = d3.format(",");


$(function() {

  /* Set all ajax calls to false.. */
  $.ajaxSetup({
    async: false
  });

  /* SET WINDOW AREA */
  var s = null;

  $(window).on("resize", function() {
    var _w = $(window).width();
    var _h = $(window).height();


    /* Half sized image */
    $(".half-sized-image").height(_h/2);
    $(".threequarter-sized-image").height(_h*3/4);
    $(".half-sized-image .half-sized-message, .threequarter-sized-image .half-sized-message").css("marginTop",
        function() {
          return -1 * $(this).height()/2;
        }
    );

    $("#title-slides-area, #title-slides-area > .row, #background-world").height($(window).height());
    $("#ending-message-area, #final-slide").height($(window).height()).width($(window).width());

    refresh_slide2();

    $("#burst-face-main-message, #burst-face-area #burst-face-second-message").css({ "top" : _h/4 + "px", "left" : 0 , "height" : _h/4 + "px"});

    $("#burst-face-area #burst-face-second-message").css("top", (2* _h/4) + "px");

    /* For map */
    $("#mosaic-main-message").css({ "top" : 2 * _h/4 + "px", "height" : _h/4 * 2 + "px"});

    /* For girls background */
    var height_girls = $(window).height() - ($("#final-message").height() + $("#final-cta").height());
    $("#girls-background").height(height_girls);

    $("#transition-to-maps").width($(window).width()).height($(window).height());
    $("#thanks-to-our-donors").width($(window).width()).height($(window).height());

    $("#mosaic-area").width($(window).width()).height($(window).height());

    $(".image-slideshow-item, .image-slideshow-item .first-slide, \
              .image-slideshow-item .second-slide, \
              .image-slideshow-item .third-slide")
            .width($(window).width())
            .height($(window).height());

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

  setTimeout(function() {

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
          jQuery({ Counter: 0 }).animate({
                    Counter: parseFloat($this.attr("data-final-count")) }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                      if ($this.attr("data-type") == "int")
                      { $this.text( Math.ceil(this.Counter) ); }
                      else if ($this.attr("data-type") == "float")
                      { $this.text( Math.ceil(this.Counter * 10) / 10 ); }
                    },
                    complete: function() {
                      $this.text(parseFloat($this.attr("data-final-count")));
                    }
            });

        });

    }, 150);


    // MAP AREA

    var map_dataset;
    var gho_map_dataset_url = "https://docs.google.com/spreadsheets/d/1OL-v3ymsD6vR3FtGBzYbQqMD3ry22RrcpaI_vsJIF4o/export?gid=0&format=csv";
    // console.log(encodeURIComponent(gho_map_dataset_url));
    // d3.csv("grab.php?u=" + encodeURIComponent(gho_map_dataset_url), function(data) {

    //     map_dataset = data;
    //     build_map_area(map_dataset);
    // });

    $.ajax(
      {
        url: "grab.php",
        data: {
            u : gho_map_dataset_url
        },
        dataType: "text",
        async: false,
        success: function(data) {
          map_dataset = d3.csv.parse(data);
          build_map_area(map_dataset);
        }
      });

    var data;
    function show_element(d) {
      return parseInt(d.in_need) ? "block" : "none";
    }

    function build_map_area(dataset) {
      var area_target = d3.select("#map-area-countries");


      var row = area_target
        .selectAll("div.row")
        .data(dataset)
        .enter()
        .append("div").classed("row", true);


          row.append("div").attr("class", function(d, i) {
            if ( i % 2 == 0 ) return "col-md-3";
            else return "col-md-4 text-right";
          });

      var inner_row = row.append("div")
              .attr("data-count-complete", "false")
              .classed("map-country-item col-md-5", true)
              .classed("text-right", function (d, i) { return i%2 != 0; })
              .append("div")
                .attr("class", function(d) { return "country-item-info map-" + d.type; } )
          ;

      //Add image
      inner_row.append("img")
        .attr("src", "images/icons/green-affected.png")
        .attr("class", "map-country-affected")
        .style("display", show_element );

      //add h1
      inner_row.append("h1")
          .attr("class", "map-count")
          .attr("final-value", function(d) { return d.in_need_words; })
          .attr("count-value", function(d) { return d.in_need; })
          .text("0")
          .style("display", show_element );

      //add subheaders
      inner_row.append("h5").attr("class","green").text("PEOPLE TO BE ASSISTED")
          .style("display", show_element );

      //Add country information
      var country_name = inner_row.append("h3").text(function(d) { return d.name; });
        country_name.append("br");
        country_name.append("span").attr("class", "green sub-heading")
          .text(function(d) { return d.subheader; })
          .style("display", function(d) { return d.subheader && parseInt(d.in_need) == "" ? "none" : "block"; });

      var other_facts = inner_row.append("div")
                      .classed("other-facts", true)
                            .append("div")
                              .attr("class", "other-fact-item calluna")
                              .attr("data-final", function(d) {return d.funding_words;} );

      other_facts.append("img").attr("src", "images/maps-fund-icon.png");
      other_facts.append("span")
                      .attr("class", "of-number")
                      .attr("count-value", function(d) { return d.funding; })
                      .append("span")
                        .style("font-weight", "700")
                        .text("0");

      other_facts.append("span").attr("class","of-label").text(function(d) { return d.label; });

      // console.log(row, );
    }

    $.ajax(
      {
        url: "d/map.json",
        async: false,
        success: function(data) {
/*
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

        var $country_item = $("<div />").addClass("map-country-item col-md-5").attr("data-count-complete", 'false');

        if (i % 2 != 0) { $country_item.addClass("text-right"); }

        var html = "";
            html += "<div class='country-item-info map-"+  d.type +"' style='background-image: url(" + d.map +")'><img src='images/icons/green-affected.png' class='map-country-affected' />";
            html += "<h1 class='map-count' final-value='" + d.words + "' count-value='" + d.in_need + "'>0</h1>";
            html += "<h5 class='green'>PEOPLE TO BE ASSISTED</h5>";
            html += "<h3>" + d.name + "</h3>";
            html += "<div class='other-facts'>";
            for ( var x = 0; x < d.other_fig.length; x++ )
            {
              html +=   "<div class='other-fact-item calluna' data-final='" + d.other_fig[x].final + "' ><img src='" + d.other_fig[x].image + "' /><span class='of-number' count-value='" + d.other_fig[x].count + "' >0</span><span class='of-label'> " + d.other_fig[x].label + "</span></div>";
            }
            html += "</div>";
            html += "</div>";

            $country_item.html(html);

          $current_row.append($country_item);
          $current_row.append( $("<div />").addClass("col-md-1") );
          // console.log($current_row);
      }*/
    }
  });

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

              second_fader(item_1);
              row.append(item);

            }
            row.height(square_height);

            $("#mosaic-area-container").append(row);

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
              var _humanIcon = _countryItem.find("img.map-country-affected");
              var countryOffset = _countryItem.offset().top;

              if( i >= 0 ) {

                var perc_half = ((_countryItem.offset().top - $(window).height() - $(window).scrollTop()) * -1 / $(window).height()) / 3 * 4 ;


                var for_value = parseInt( _localCounter.attr("count-value") );

                var curr_local_value = 0;
                if ( perc_half > 0 && perc_half <=  1)
                {
                  curr_local_value = Math.floor(perc_half * for_value);
                  _localCounter.html( "<span>" +  comma_format ( curr_local_value ) + "</span>");
                }
                else if (perc_half < 0) {  curr_local_value = 0; _localCounter.html("<span>" + comma_format ( curr_local_value ) + "</span>");}
                else if (perc_half >= 1) {
                  _localCounter.html("<span style='font-weight: 700;'>" + _localCounter.attr("final-value") + "</span>");

                  curr_local_value = for_value;
                }

                //If it's at the right.. set the image to be the width of counter..
                if (_countryItem.hasClass("text-right")) {
                  _humanIcon.css("right", _localCounter.find("span").width());
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
                    if (_countryItem.attr("data-count-complete") == 'true')
                     {
                        _countryItem.attr("data-count-complete", 'false');
                     }

                    _otherFact.find(".of-number").html("<span>" + comma_format(Math.floor(otherCount * perc_half)) + "</span>");
                  } else if (perc_half <= 0)
                  {
                    _otherFact.find(".of-number").text(0);
                  } else if (perc_half > 1)
                  {
                    if (_countryItem.attr("data-count-complete") == 'false')
                    {
                      _countryItem.attr("data-count-complete", 'true');
                      $("#map-data-flash-item").trigger('light-up-scoreboard');
                    }

                    _otherFact.find(".of-number").html("<span style='font-weight: 700;'>" + $(this).attr("data-final") + "</span>");
                  }
                });
              }

            });

            if (current_overall_total > 74000000) {
              $("#map-data-score h1.number").text("74.9 MILLION").css("font-weight", "700");
            } else {
              $("#map-data-score h1.number").text( comma_format( current_overall_total ) );
            }

          });

          // var s = skrollr.init({
          // edgeStrategy: 'set',
          //   easing: {
          //     WTF: Math.random
          //   }
          // });

    /* TRIGGER MAP COUNTER TO LIGHT */
    $("#map-data-flash-item").height($("#map-data-score").height());
    $("#map-data-flash-item").on('light-up-scoreboard', function() {
      var $this = $(this);

      $this.css({ "opacity" : 0.5}).delay(100).animate({ "opacity" : 0 }, 300);
    });

    $("#mosaic-main-message").on('data200CenterTop', function(event, direction) {
      var $this  = $(this);

      if ( direction == "down" )
      {
        $this.stop(true, true).animate({"opacity" : 1}, 500);
      }
      else
      {
        $this.stop(true, true).animate({"opacity" : 0}, 500);
      }

    });

    $("#mosaic-main-message").on('data-100CenterTop', function(event, direction) {
      var $this  = $(this);

      if ( direction == "down" )
      {
        $this.stop(true, true).animate({"opacity" : 1}, 500);

        $("#first-slide-item-text").fadeOut("fast", function() { $("#second-slide-item-text").fadeIn("fast"); });
      }
      else
      {
        $("#second-slide-item-text").fadeOut("fast", function() { $("#first-slide-item-text").fadeIn("fast"); });
      }

    });

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
        url: "http://ow.ly/FxnCb",
        via: "unocha",
        hashtags: "2015Appeal",
        text: "An innovative snapshot of the humanitarian landscape in 2015"
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

  /* OTHER EVENTS */
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

          play_animation ($target);

          $(this).attr("data-played-out", "true");
        }

    });


  $("#thanks-to-our-donors").on("dataTopBottom", function(e, direction) {
      if (direction == "down")
      {
        $("#mosaic-area-container, #map-data-score").fadeOut("fast");
      }
      else // direction == "down"
      {
        $("#mosaic-area-container, #map-data-score").fadeIn("fast");
      }
    });

  /* DATA EVENT LISTENERS */
    $(".image-slideshow-item").on("dataBottomCenter", function(e, direction) {

        // console.log( $(this).offset().top, $(window).scrollTop(), $(this).offset().top - $(window).scrollTop() );
        // console.log("THIS", $(this), e, direction);
        var played = $(this).attr("data-played-out") == "true";

        if (!played) {
          var $target = $(this);

          play_animation ($target);

          $(this).attr("data-played-out", "true");
        }

    });

    $("#final-slide").on("data100TopTop", function(e, direction) {

    });

    var s = skrollr.init({
      render: function(data) {
      },
      keyframe: function(element,name, direction) {

          // console.log(element, name, direction);

          $(element).trigger(name, direction);
      }
      ,
      edgeStrategy: 'set',
        easing: {
          WTF: Math.random
        }
    });


    setTimeout(function() {
      $("body").css("opacity", 1);
      // $("#initial-cover").fadeOut("fast");
      // $(window).trigger("resize");
    }, 100);
});
