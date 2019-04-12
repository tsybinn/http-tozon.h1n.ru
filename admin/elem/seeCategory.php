<?php


 $table = $_SESSION['table'];
$row = $db->select($table);
//var_dump($row);

$content = "";
$content .= "<div class='wrappleSee'>";


foreach($row as $elem){

    $date =  date('d.m.Y', $elem['date']);
    $content .= " 
 
    <div class=\"seePhones\">
    <div class=\"seePhoto\"><img src= \"$elem[photoUrl]\" width=\"200\"height=\"180\"> </div>
    <div class=\"seePrise\"><p>$elem[price] 	&#x584;</p> <p class=\"date\">$date </p >   </div>
    <div class=\"seeDiscription\">$elem[description]</div>
    <div class='control'>
        <div class='delete'><a href=\"?delete=$elem[id]\">delete</a></div>
        <div class='update'><a href=\"?update=$elem[id]\">update</a></div>
    </div>

    </div>"
 ;
}

  $content .=  "</div>";
  echo $content  ;





