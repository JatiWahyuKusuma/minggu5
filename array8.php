<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2> Sorting Array </h2>
        <?php
           $age = array(
               "Joe" => "29",
               "Elsa" => "27",
               "Kevin" => "32",
               "Nick" => "24",
               "Olaf" => "9",
               "Anna" => "17"
           );
           krsort($age);

           foreach($age as $name => $value){
               echo "Name = " . $name . ", Age = " . $value . "<br>";
           }
        ?>
    </body>
</html