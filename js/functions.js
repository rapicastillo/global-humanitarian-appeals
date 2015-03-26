var comma_format = d3.format(",");

function slide_endlessly(row, speed, square_width, direction_)
{

    if (direction_ == "right")
    {
      row.prepend(row.children(".burst-face-item")[row.children(".burst-face-item").length-1])
      // row.css("marginLeft", "-=" + square_width +"px");
      // row.delay(speed/4).animate(
      //   { marginLeft: "+=" + square_width + "px" },
      //   speed/4,
      //   "linear",
      //   function () {
      //     row.css("marginLeft", "-=" + square_width +"px");
      //     slide_endlessly(row, speed, square_width, direction_);
      //   }
      // );
    }
    else {
      row.append(row.children(".burst-face-item")[0]);
      // row.delay(speed/4).animate(
      //   { marginLeft: "-=" + square_width + "px" },
      //   speed/4,
      //   "linear",
      //   function () {
      //     row.css("marginLeft", "+=" + square_width +"px");
      //     slide_endlessly(row, speed, square_width, direction_); }
      // );
    }

}

function fader(item)
{
  // var timeout_delay = (Math.random() * 5000) + 1000;
  // setTimeout(function() {
    var delay1 = (Math.random() * 3000) + 2000;
    var delay2 = (Math.random() * 3000) + 2000;

    item.delay(delay1).fadeOut("slow").delay(delay2).fadeIn("slow", function () { fader(item); });
  // }, timeout_delay);
}


function refresh_slide2 ()
{
  $("#burst-face-area .burst-face-row").remove();
  // $("#burst-face-main-message").css({"marginTop" : "-" +$("#burst-face-main-message").height() /2 + "px", "marginLeft" :
  //                 "-" + $("#burst-face-main-message").width()/2 + "px"});

    /* Image lists ... */
     // $("#burst-face-area *").remove();
    // var square_size = ($(window).width() > $(window).height()
    //                           ? ( $(window).width() / $(window).height() )
    //                           : ( $(window).height() / $(window).width() ) ) * 73;
      var square_size = $(window).height()/5;

      var square_count_rows = Math.ceil($(window).height() / square_size);
      var square_count_cols = Math.ceil($(window).width() / square_size );

      var square_height = $(window).height() / (square_count_rows - 1);
      var square_width = $(window).width() / (square_count_cols - 1);

      // console.log(square_count_cols, square_count_rows);
      var direction = ["left", "right"];


     $.get("d/image_list.json", function (data) {

      //cols
      for ( var y = 0; y < square_count_rows - 1; y ++) {

        var row = $("<div />").addClass("burst-face-row");

        for ( var x = 0; x < square_count_cols - 1  + 2; x ++ ) {
          var img_data_1 = data.image_list[ Math.floor( Math.random() * data.image_list.length ) ];
          var img_data_2 = data.image_list[ Math.floor( Math.random() * data.image_list.length ) ];

          var item_1 = $("<div />").addClass("burst-face-image burst-face-initial-image")
                      .css({ "background-image":  "url(" + img_data_1 + ")", width : square_width + "px", height : square_height + "px" });
          var item_2 = $("<div />").addClass("burst-face-image burst-face-over-image")
                      .css({ "background-image": "url(" + img_data_2 + ")", width : square_width + "px", height : square_height + "px" });

          // console.log(img_data_1, img_data_2);


          var item = $("<div />").addClass("burst-face-item").width(square_width).height(square_height);
              item.append(item_1);
              item.append(item_2);

          fader(item_1);
          row.append(item);


        }
        row.height(square_height).css({"marginLeft" : "-" + square_width + "px"});

        var speed =  2000 + (Math.ceil(Math.random() * 10) * 1000);

        slide_endlessly(row, speed, square_width, direction[y % 2]);

        $("#burst-face-area").append(row);
      }

      $("#burst-face-area").width($(window).width());
      $(".burst-face-row").width($(window).width() + (square_width * 2));

  });

}

function second_fader(item)
  {
    var timeout_delay = (Math.random() * 5000) + 1000;
    setTimeout(function() {
      var delay1 = (Math.random() * 5000) + 3000;
      var delay2 = (Math.random() * 5000) + 3000;

      item.delay(delay1).fadeOut("slow").delay(delay2).fadeIn("slow", function () { fader(item); });
    }, timeout_delay);
  }

 function play_animation($target) {
        $target.find(".country-title-item");

        $target.find(".country-title-item").animate({opacity: 1, width: "100%"}, 2000);
        $target.find(".first-slide").delay(100).fadeOut(500, function() {



            $(this).closest(".image-slideshow-item")
              .find(".fact-number").each(function() {

              var $this = $(this);

              var ext = $this.attr("data-nth");

              $this.closest(".fact-item").delay(200).animate({opacity: 1, bottom: "+=20px" }, 1000, "swing");
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
                    $this.text($this.attr("data-final") + ext);

                  }
              });
            });

            $target.find(".second-slide").delay(800).fadeOut(500, function() {});

        });
    };
