<?php
    $src = $_POST["src"];
    $sql_query_dest = "select DISTINCT dest as dest from rawpacketdata where src = '" . $src . "';";
    include 'dtb.php';
    
    
    $list = $dbh->query($sql_query_dest);
    #if(pg_num_rows($list_four) == 0) {
    #   echo "<option value = \"No destinations found for this given source\"></option>";
    #}
    
    // echo "<option value = \"" . pg_num_rows($list_four) . "\"></option>";
    
    while($row_list_dest = $list->fetch(PDO::FETCH_ASSOC)):
        $dest = $row_list_dest["dest"];
        $sql_query_name = "select distinct sitename as sitename from serverlookup where ipv4 = '" . $dest . "' or ipv6 = '" . $dest . "';";
        $name = $dbh->query($sql_query_name);
        $row_list_name = $name->fetch(PDO::FETCH_ASSOC);
        $name = $row_list_name["sitename"];
        $option = "<option value = \"" . $dest . "\">" . $name . "</option>";
        echo $option;
    endwhile;
   
?>