<?php

require("database/dbconnect.php");
$db = new dbconnect();
$sql = "select * from menu";
$result = $db->query($sql);
foreach ($result as $m) {
    echo "$m[Link] </br>";
}
