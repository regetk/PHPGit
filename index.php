<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $html = file_get_contents("http://www.youtube.com/results?search_query=sanderKänguru");
            $number1 = explode("<a href>", $html);
            echo count($number1);
        ?>
    </body>
</html>
