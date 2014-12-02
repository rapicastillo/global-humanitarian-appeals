<!DOCTYPE html>
<html>
<head>
  <style>
  #hero-slide
  {
    position: relative;
  }

  #here-item-container {

  }
  </style>
</head>
<body>
  <div id="hero-slide" style="width: 100%; height: 800px; background-color: green">
    <div id="here-item-container">
      <h1>5,102,405,244</h1>
      <h3>People in need</h3>
    </div>
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
