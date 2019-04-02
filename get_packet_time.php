<?php
    $src = $_POST["src"];
    $dest = $_POST["dest"];
    include 'dtb.php';
    $sql_query="select min(timestamp), max(timestamp) from rawpacketdata where src='" . $src . "' and dest='" . $dest . "' group by src, dest;";
    $list3 = $dbh->query($sql_query);
    if ($list3 != false) {
        while($row3 = $list3->fetch(PDO::FETCH_ASSOC)):

        #$min = $row3["mintime"];
        #$max = $row3["maxtime"];
            $mintime = $row3["min"];
            $maxtime = $row3["max"];


        endwhile;
        
        echo $mintime;
        echo $maxtime;
    }


    
   ?>
