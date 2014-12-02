<!DOCTYPE html>
<html>
   <head>
      <style>
         body { padding: 0; margin: 0; font-family: Arial; }
         .success-image-pop { position: absolute; }
         .static-background, .success-story-item { position: relative; }
         .success-story-canvas { position: relative; }
         .static-background { z-index: -1; position: absolute; }
         .static-foreground { z-index: 100; position: absolute; }
         .success-figure-pop { font-size: 48px; padding: 150px 50px; }
         .success-figures-area { padding-top: 50%; padding-bottom: 50%; }
      </style>
   </head>
   <body>
      <div style="width: 100%; height: 800px"></div>
      <div id="success-story">
         <!-- IRAQ -->
         <div id="success-story-iraq" class="success-story-item"
            >
            <div class="static-background"
               style="background-image: url(images/l3/iraq/000.jpg)"
               data-anchor-target="#success-story-iraq"
               data-target="#success-story-iraq"
               data-bottom-top="position: absolute; bottom: auto; top: !0;"
               data-top-top="position: fixed; bottom: !0; top: auto;"
               data-bottom-bottom="position: absolute;"
               data-emit-events
               >
            </div>
            <div id="success-figures-area-iraq" class="success-figures-area">
               <div class="success-figure-pop" >
                  <span data-figure="1.4">1.4</span><span>M people received food assistace</span>
               </div>
               <div class="success-figure-pop" >
                  <span data-figure="500000">500,000</span><span>people received clean water and sanitartion services.</span>
               </div>
            </div>

            <div class="static-foreground"
               data-anchor-target="#success-story-iraq"
               data-target="#success-story-iraq"
               data-bottom-top="position: absolute; bottom: auto; top: !0;"
               data-top-top="position: fixed; bottom: !0; top: auto;"
               data-bottom-bottom="position: absolute;"
               data-emit-events
            >
              <div class="success-story-canvas">
                  <h2>IRAQ</h2>
                  <div class="success-image-pop" style="bottom: 30%; right: 50%;"><img src="http://placehold.it/200x100" /></div>
                  <div class="success-image-pop" style="bottom: 10%; right: 10%;"><img src="http://placehold.it/300x100" /></div>
               </div>
            </div>
         </div>
         <!-- PHILIPPINES -->
         <div id="success-story-philippines" class="success-story-item">
            <div class="static-background"
               style="background-image: url(images/l3/philippines/000.jpg)"
               data-anchor-target="#success-story-philippines"
               data-target="#success-story-philippines"
               data-bottom-top="position: absolute; bottom: auto; top: !0;"
               data-top-top="position: fixed; bottom: !0; top: auto;"
               data-bottom-bottom="position: absolute;"
               data-emit-events
               >
            </div>
            <div id="success-figures-area-philippines" class="success-figures-area">

               <div class="success-figure-pop" >
                  <span data-figure="3.7">3.70</span><span>MILLION people received food assistance</span>
               </div>
               <div class="success-figure-pop" >
                  <span data-figure="570000">570,000</span><span>households reached with emergency shelter (additional 158,000 were given roofing solution) </span>
               </div>


            </div>

            <div class="static-foreground"
               style="background-image: url(images/l3/philippines/000.jpg)"
               data-anchor-target="#success-story-philippines"
               data-target="#success-story-philippines"
               data-bottom-top="position: absolute; bottom: auto; top: !0;"
               data-top-top="position: fixed; bottom: !0; top: auto;"
               data-bottom-bottom="position: absolute;"
               data-emit-events
               >
               <div class="success-story-canvas">
                  <h2>Philippines</h2>
                  <div class="success-image-pop" style="bottom: 0px; right: 20px;"><img src="http://placehold.it/100x300" /></div>
                  <div class="success-image-pop" style="bottom: 200px; right: 100px;"><img src="http://placehold.it/200x100" /></div>
               </div>
            </div>
         </div>
         <!-- SOUTH SUDAN -->
         <div id="success-story-southsudan" class="success-story-item">
            <div class="static-background"
                style="background-image: url(images/l3/southsudan/000.jpg)"
                data-anchor-target="#success-story-southsudan"
                data-target="#success-story-southsudan"
                data-bottom-top="position: absolute; bottom: auto; top: !0;"
                data-top-top="position: fixed; bottom: !0; top: auto;"
                data-bottom-bottom="position: absolute;"
            >
              <div class="success-story-canvas">
                <h2>SOUTH SUDAN</h2>
                <div class="success-image-pop" style="bottom: 0px; right: 80%;"><img src="http://placehold.it/100x500" /></div>
                <div class="success-image-pop" style="bottom: 200px; right: 50%;"><img src="http://placehold.it/10x400" /></div>
              </div>
            </div>

            <div id="success-figures-area-southsudan" class="success-figures-area">
              <div class="success-figure-pop" >
                <span data-figure="200">200</span><span>K Children vaccinated against measles and polio in conflict</span>
              </div>
              <div class="success-figure-pop" >
                <span data-figure="3.5">3.5</span><span>M people provided with clean water and health services</span>
              </div>
            </div>


      </div>
      <div style="width: 100%; height: 800px"></div>
      <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
      <script src="js/jquery-1.11.1.min.js"></script>
      <script src="js/skrollr.min.js"></script>
      <script>
         $(function() {

           $(".success-story-item .static-background, \
            .success-story-item .static-background .success-story-canvas, \
            .success-story-item .static-foreground .success-story-canvas")
                 .width($(window).width())
                 .height($(window).height());


           var s = skrollr.init({
             keyframe: function(element,name, direction) {

              console.log("element:name:direction", element, name, direction);
                 $(element).trigger(name, direction);
             }
             ,
             edgeStrategy: 'set',
               easing: {
                 WTF: Math.random
               }
             });
         });
      </script>
   </body>
</html>
