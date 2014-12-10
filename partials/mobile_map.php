<?php
  $map_data= json_decode( file_get_contents("d/map.json") );
    // print_r($map_data);
?>
<?php for($i = 0; $i < count($map_data->countries); $i ++) :
    $country = $map_data->countries[$i];
?>
<div class='row'><div class='col-sm-12'>&nbsp;</div></div>
<div class="row">
   <div class="col-md-3"></div>
   <div class="map-country-item col-md-5 col-sm-12 <?php echo ($i % 2 == 0 ? "text-left" : "text-right"); ?>" data-count-complete="true">
      <div class="country-item-info map-L1" style="background-image: url()">

         <h1 class="map-count green" final-value="3.8 MILLION" count-value="3800000">
          <img src="images/icons/green-affected.png" class="map-country-affected">
          <span style="font-weight: 700;">
            <?php echo $country->words; ?>
          </span>
         </h1>
         <h4 class="green">PEOPLE TO BE ASSISTED</h4>
         <h3><?php echo $country->name; ?></h3>

         <?php foreach($country->other_fig as $other_facts) : ?>
           <div class="other-facts">
              <div class="other-fact-item calluna" data-final="405.4 MILLION">
                  <img src="<?php echo $other_facts->image; ?>">
                  <span class="of-number" count-value="405400000">
                    <span style="font-weight: 700;"><?php echo $other_facts->final; ?></span>
                  </span>
                  <span class="of-label"><?php echo $other_facts->label; ?></span>
              </div>
           </div>
         <?php endforeach; ?>
      </div>
   </div>
   <div class="col-md-1"></div>
</div>
<div class='row'><div class='col-sm-12'>&nbsp;</div></div>
<?php endfor; ?>
