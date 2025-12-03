<?php
echo "<h2>Network Scan Report</h2>";
echo "<p><strong>Last Updated:</strong> ". date("Y-m-d H:i:s") . "</p>";
echo "<pre>";
include("output.txt");
echo "</pre>";
?>
