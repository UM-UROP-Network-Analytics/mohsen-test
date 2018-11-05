<?php
    $src = $_POST["src"];
    $dest = $_POST["dest"];
    include 'dtb.php';
    $sql_query="select min(min_ts), max(max_ts) from traceroute where src='" . $src . "' and dest='" . $dest . "' group by src, dest;";
    $list3 = $dbh->query($sql_query);
    if ($list3 != false) {
        while($row3 = $list3->fetch(PDO::FETCH_ASSOC)):

        #$min = $row3["mintime"];
        #$max = $row3["maxtime"];
            $mintime = $row3["min"];
            $maxtime = $row3["max"];


        endwhile;

        echo date(Y-m-d h:i:s, strtotime($mintime));
        echo date(Y-m-d h:i:s, strtotime($maxtime));
    }


    
   ?>
