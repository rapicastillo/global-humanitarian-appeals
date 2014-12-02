<!DOCTYPE html>
<html>
<head>
  <style>
  body { padding: 0; margin: 0; font-family: Arial; }
   #transition-to-maps
   {
      background-color: #003855;
      background-image: url(images/transition/People-Full.png);
      background-size: 40%;
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
      background-image: url(images/transition/Middle-Shapes.png);
      background-repeat: no-repeat;
      background-size: 100% 100%;
      height: 245px;

      text-align: center;

      top: 50%;
      margin-top: -170px;
    }

    #transition-to-maps #transition-to-maps-message #transition-message {
        position:relative;
        height: inherit;
        width: inherit;
        text-align: center;
    }

    #transition-to-maps #transition-to-maps-message #transition-message div{
      width: inherit;
      position: absolute;
      bottom: 10%;
      text-align: center;

      color: white;
    }

    #transition-to-maps #transition-to-maps-message #transition-message h3 strong
    {
      color: #f47932;
    }
  </style>
</head>
<body>
  <div id="transition-to-maps">
    <div id="transition-to-maps-message">
      <div id="transition-message">
        <div>
          <h3>
            But overall the number of <strong>PEOPLE IN NEED</strong>
          </h3>

          <h3>
            <strong>OF ASSISTANCE IN 2015</strong> remains alarming
          </h3>
        </div>
      </div>
    </div>

    <div id="transition-map-overlay">
    </div>
  </div>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/skrollr.min.js"></script>
<script>
  $(function() {
    $("#transition-to-maps").width($(window).width()).height($(window).height());
  });
</script>
</body>
</html>
