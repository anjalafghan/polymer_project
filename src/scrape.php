<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './simple_html_dom.php';
        // put your code here
        $user='http://www.bbc.com/search?q='.$_GET["user_input"];
     
      $html= file_get_html($user);
        $div=$html->find('body #orb-modules #search-content ol');
        
       echo implode("<br>", $div);
         
        ?>
    </body>
</html>
