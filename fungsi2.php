<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2> Fungsi </h2>
        <?php
            function familyName($fname, $fyear){
                echo "$fname Refsnes. born in $fyear <br>";
            }

            familyName("Hege","1975");
            familyName("Stale","1978");
            familyName("Kai Jim","1983");
        ?>
    </body>
</html