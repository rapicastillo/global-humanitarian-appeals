<html>
<body>
<?php

  $umlist = Array();

  $unearmarked = "Australia (DFAT), Austria, Belgium, Canada (CIDA), Denmark, Estonia, Finland, France, Germany, Iceland, Ireland, Japan, Korea, Republic of (Korea), Luxembourg, Monaco, Netherlands, New Zealand (NZAID), Norway, Poland, Private Donations (Private), Russian Federation, Singapore, Sweden (Sida), Switzerland (DEZA), United Arab Emirates, United Kingdom (DFID), United States (USA-PRM), United States (US-State-IO)";


  //Special Cases
  if (strpos("Korea, Republic of (Korea)", $unearmarked) >= 0) {
    $unearmarked = str_replace("Korea, Republic of (Korea)", "", $unearmarked);
    $umlist[] = "Korea, Republic of";
  }

  if (strpos("Private Donations", $unearmarked) >= 0) {

    $unearmarked = str_replace("Private Donations", "", $unearmarked);
  }

  $um_countries = explode(",", $unearmarked);

  foreach ($um_countries as $um) {

    if (preg_match ("#(.*) \(.*\)#", $um, $group) ) {
      $country = trim($group[1]);
    }
    else
    {
      $country = trim($um);
    }



    if ( array_search($country, $umlist) === FALSE )
    {
      $umlist[] = $country;
    }
  }

  asort($umlist);

  $unearmarked_html = "";
  foreach ($umlist as $umitem)
  {
    if (trim($umitem) == "") { continue; }
    $unearmarked_html .= "<div style='display:float: left; text-align: center; padding: 5px; font-size: 12px; height: 40px; width: 0px;'><img src='http://www.unocha.org/sites/default/files/images/flags/{$umitem}.png' width='30px'><br/>{$umitem}</div>";
  }

  $unearmarked_html .= "<div style='clear: both'></";

  echo $unearmarked_html;
?></body>
</html>
