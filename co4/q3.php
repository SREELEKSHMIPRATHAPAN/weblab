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

$students = array("Nihal" , "Shaad", "Nithin", "Amjyad", "Arjun", "Abhilash", "Razik");
echo "Normal Array : <br>";
print_r($students);
echo "<br><br><br> Ascending Sort : <br>";
asort($students);
print_r($students);
echo "<br><br><br> Descending Sort : <br>";
arsort($students);
print_r($students);

?>