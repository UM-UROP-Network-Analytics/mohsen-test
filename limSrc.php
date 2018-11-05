<?php
    $des = $_POST["des"];
    $sql_query_dest = "select DISTINCT src as src from traceroute where dest = '" . $des . "';";
    include 'dtb.php';
    
    
    $list = $dbh->query($sql_query_dest);
    #if(pg_num_rows($list_four) == 0) {
    #   echo "<option value = \"No destinations found for this given source\"></option>";
    #}
    
    // echo "<option value = \"" . pg_num_rows($list_four) . "\"></option>";
    
    while($row_list_dest = $list->fetch(PDO::FETCH_ASSOC)):
        $dest = $row_list_dest["src"];
        $sql_query_name = "select distinct sitename as sitename from serverlookup where ipv4 = '" . $src . "' or ipv6 = '" . $src . "';";
        $name = $dbh->query($sql_query_name);
        $row_list_name = $name->fetch(PDO::FETCH_ASSOC);
        $name = $row_list_name["sitename"];
        $option = "<option value = \"" . $src . "\">" . $name . "</option>";
        echo $option;
    endwhile;
   
?>




<?php

//     $sql_query_name="select domain||'(" . $ip .  ")' as domain from serverlookup where " . $ip .  " = '" . $dest . "';";
    //     $list_five = $dbh->query($sql_query_name);
    
    // if($row_list_site = $list_five->fetch(PDO::FETCH_ASSOC)) {
    //     $site = $row_list_site["domain"];
    // }
    
    // $option = "<option value = \"" . $site . "\"></option>";
?>