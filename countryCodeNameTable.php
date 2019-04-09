<?php
//Creating an associative array.....
$country_detail = array("India"=>91,"Greece"=>30,"Germany"=>49,"France"=>33,"China"=>86);
echo "<h3>"."CountryCode & CountryName"."</h3>";
function CountryTable($country_detail){
echo "<table border = 5>";
     echo "<tr>";
     echo "<td>".CoutryName. "</td>";
     echo "<td>".CoutryCode. "</td>";
     echo "</tr>";
     foreach($country_detail as $country_name => $country_code){
        echo "<tr>";
        echo "<td>" . $country_name . "</td>";
        echo "<td>" . $country_code . "</td>";
    echo "</tr>";
}
echo "</table>";
}
CountryTable($country_detail);
?>
