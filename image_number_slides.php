<!DOCTYPE html>
<html>
<head>
  <style>
  #image-3d-sliding
  {
    position: relative;
  }
  .foreground-item, .background-item { position: absolute; background-size: cover; }
  .foreground-text { position: absolute; }

  .map-country-item
  {

    padding: 5px 20px 20px;
    border: 1px solid #333333;
    float: left;
    width: 300px;
  }
  .map-country-item h3 { font-size: 24px; }
  .map-country-item::after { clear: both; }

  </style>
</head>
<body>
  <div style="height: 1000px; width: 100%;"></div>


  <div id="hero-slide" style="width: 100%; height: 800px; background-color: green">
    <div class='background-item' style="z-index: 0; height: 1200px; width: 1600px; /*background-image: url(http://placehold.it/1600x1200) */; background-color: yellow;"></div>

    <div class='foreground-item' style="background-image: url(http://placehold.it/500x500); bottom: 0; left: 400px; z-index: 10; width: 500px; height: 200px; opacity: .5;"

      data-bottom-top="margin-left: -100px;"
      data-top-bottom="margin-left: 100px;"

      <?php #data-bottom-bottom="position: absolute;" ?>

      >&nbsp;</div>

      <div class="foreground-text"
          style="bottom: 20px; left: 300px; z-index: 15; opacity: .5;"

      data-top-bottom="margin-left: 300px;"
      data-bottom-top="margin-left: -200px;"

          ><h1>Hello World</h1></div>
      <div class='foreground-item' style="background-image: url(http://placehold.it/400x600); bottom: 0; left: 400px;
      z-index: 20; width: 400px; height: 600px; opacity: .8;"

        data-top-bottom="margin-left: 100px;"
        data-bottom-top="margin-left: 200px;"

      ></div>
      <div class="foreground-text" style="bottom: 10px; left: 500px; z-index: 30; opacity: .5;"
          data-top-bottom="margin-left: 100px;"
          data-bottom-top="margin-left: 500px;"
      ><h1>Hello Again World</h1></div>
  </div>


  <div style="height: 1000px; width: 100%;"></div>
  <script src="js/skrollr.min.js"></script>
  <script type="text/javascript">
    var s = skrollr.init({
        edgeStrategy: 'set',
          easing: {
            WTF: Math.random
          }
        });
  </script>
</body>
</html>
