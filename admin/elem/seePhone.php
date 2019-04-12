<?php



$row = $db->select('phones');
//var_dump($row);

$content = "";
$content .= "<div class='wrappleSee'>";
foreach($row as $elem){

    $content .= " 
 
    <div class=\"seePhones\">
    <div class=\"seePhoto\"><img src= \"$elem[photoUrl]\" width=\"200\"height=\"150\"> </div>
    <div class=\"seePrise\"><p>$elem[price] 	&#x584;</p> 	
</div>
    <div class=\"seeDiscription\">$elem[description]</div>
    <div class='control'>
        <div class='delete'><a href=\"?delete=$elem[id]\">delete</a></div>
        <div class='update'><a href='#'>update</a></div>
    </div>

    </div>"
 ;
}

  $content .=  "</div>";
  echo $content  ;



