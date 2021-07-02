<?php 
require 'dbConnection.php';
$patient_id = $_POST['patient_id'];
$patient_name = $_POST['patient_name'];
$age = $_POST['age'];
$address = $_POST['address'];
$admitted_date = $_POST['admitted_date'];
$dr_name = $_POST['dr_name'];
$medicine = $_POST['medicine'];
$query = "INSERT INTO registration(patient_id, patient_name,age ,address,admitted_date,dr_name,medicine) VALUES 
('".$patient_id."','".$patient_name."','".$age."','".$address."','".$admitted_date."','".$dr_name."','".$medicine."')";
if(mysqli_query($con,$query))
{
 echo "<script>alert('Successfully uploaded data !')</script>";
 echo "-------------------------------------------------------------------------";
 echo "<h3> COVID DETAILS </h3>";
 echo "<br><br>";
 echo "PATIENT ID : ".$patient_id."<br>";
 echo "PATIENT NAME : ".$patient_name."<br>";
 echo "PATIENT AGE : ".$age."<br>";
 echo "PATIENT ADDRESS : ".$address."<br>";
 echo "ADMITTED DATE: ".$admitted_date."<br>";
 echo "CUNSULTING DR: Rs.".$dr_name."<br><br>";
 echo "MEDICINE: ".$medicine."<br>";
 echo "-------------------------------------------------------------------------";
}
else
{
 echo "<script>alert(".mysqli_error($con).")</script>";
}
mysqli_close($con);
?>