<html>

<head>
<style>
    body{

        color:red;
    }

    </style>
</head>

</html>

<?php 

$players = array("Sachin","Ganguly","Dravid","Kohli","Kumble");

echo "<table border='1'>";
echo "<tr><th>Players</th></tr>";
for($i=0;$i<count($players);$i++)
{
    echo "<tr><td>".$players[$i]."</td></tr>";
}
echo "</table>";

?>