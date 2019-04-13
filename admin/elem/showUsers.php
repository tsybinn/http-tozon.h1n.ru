<?php
  //$table =$_SESSION['table'];
$row = $db->selectUser('users');




$content = "<table class=\"showUsers\">";
$content .= "<th>users</th>
            <th>email</th>
            <th>password</th>
            <th>date</th>
            <th>status</th>
            <th>delete</th>
            <th>update</th> ";

foreach ($row as $elem) {

    $date = date('d.m.Y',$elem['date']);
 $content .= "
 <tr>
 <td>$elem[login]</td>
 <td>$elem[email]</td>
 <td>$elem[password]</td>
 <td>$date</td>
 <td>$elem[statusName]</td>
 <td><a href='?delete=$elem[id]'>delete</a></td>
 <td><a href='?update=$elem[id]'>update</a></td>
 </tr>


 ";




}

$content .="</table>";
echo $content;

