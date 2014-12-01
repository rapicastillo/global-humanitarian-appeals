<!DOCTYPE html>
<html>
<head>
  <style>
    body { margin: 0; padding: 0; }
    .mosaic-item { display: inline-block;}
    #mosaic-area { position: relative; }
    #mosaic-area .mosaic-image {
      background-size: cover;
      position: absolute;
    }
    #mosaic-area .mosaic-initial-image {
      z-index: 1200;
    }
    #mosaic-area #mosaic-main-message { position: absolute; top: 50%; left: 50%; background-color: rgba(0,0,0,.8); width: 80%; font-size: 32px; z-index: 1300; color: white; padding: 20px;}
    .mosaic-item { position: relative; }
    .mosaic-row { text-align: center; }
  </style>
</head>
<body>

<div style="height: 900px; display: inline-block;">&nbsp;</div>
<div id="mosaic-area">

  <div id="mosaic-main-message">
    This is the main image for the mosaic area. This will be revealed once the user goes to this slide mousing over the area.
  </div>

</div>
<div style="height: 1000px"></div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="js/skrollr.min.js"></script>
<script type="text/javascript">

$(function() {
  /* Styling */
  $("#mosaic-main-message").css({"marginTop" : "-" +$("#mosaic-main-message").height() /2 + "px", "marginLeft" :
                  "-" + $("#mosaic-main-message").width()/2 + "px"});

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
      var square_size = ( $(window).width() / $(window).height() ) * 64;

      var square_count_rows = Math.ceil($(window).height() / square_size);
      var square_count_cols = Math.ceil($(window).width() / square_size );

      var square_height = $(window).height() / (square_count_rows - 1);
      var square_width = $(window).width() / (square_count_cols - 1);

      // console.log(square_count_cols, square_count_rows);
      for ( var y = 0; y < square_count_rows - 1; y ++) {

        var row = $("<div />").addClass("mosaic-row");

        for ( var x = 0; x < square_count_cols - 1; x ++ ) {
          var img_data_1 = data.image_list[ Math.floor( Math.random() * data.image_list.length ) ];
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

        $("#mosaic-area").append(row);
      }
  });
});


</script>
</body>
</html>
