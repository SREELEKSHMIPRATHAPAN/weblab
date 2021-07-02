<?php
    include "connect.php";
?>

<html>
<head>
    <title>FEVER registration</title>
    <style>
        div{
            box-shadow: teal;
            text-align: center;
            margin-top:3em;
            width:50%;
            margin-left:auto;
            margin-right:auto;
            
        }
        form{
            padding:1em;
            
        }
        table{
            text-align: center;
            width:100%;
            overflow-x: scroll;
            
        }
        tr,td,th{
            padding:10px;
        }
        input[type="text"],input[type="password"],input[type="number"]{
            width:80%;
            padding:6px;
            border:1px solid gray;
            border-radius: 6px;
            outline:none;
        }
        input[type="submit"]{
            background-color: green;
            padding:5px;
            border-radius: 3px;
            border:none;
            color:white;
            width:100px;
        }
        input[type="reset"]{
            background-color: red;
            padding:5px;
            border-radius: 3px;
            border:none;
            color:white;
            width:100px;
        }
        .left{
            text-align: left;
        }
        .right{text-align: right;}
        h3{
            background-color: black;
            padding-top: 1em;
            padding-bottom: 1em;
            color:white;
            text-transform: uppercase;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <div>
        <form name="register" action="" method="POST">
            <h3>User Registration</h3>
            <br><br>
            <table>
            
                <tr> <td colspan=2><input type="number" name="patient_id" placeholder="patient id" required></td></tr>
                <tr> <td colspan=2><input type="text" name="patient_name" placeholder="patient Name" required></td></tr>
                <tr> <td colspan=2><input type="number" name="age" placeholder="patient age" required></td></tr>
                <tr> <td colspan=2><input type="text" name="address" placeholder="patient address" required></td></tr>
                <tr> <td colspan=2><input type="date" name="admitted_date" placeholder="date of admission" required></td></tr>
                <tr> <td colspan=2><input type="text" name="dr_name" placeholder="Doctor name" required></td></tr>
                <tr> <td colspan=2><input type="text" name="covid_result" placeholder="covid result" required></td></tr>
                <tr> <td colspan=2><input type="password" name="pass" id="pass" placeholder="Password" required></td></tr>
                <tr> <td class="right"><input  type="submit" name="submit"></td><td class="left"><input type="reset" name="reset"></td></tr>
            </table>
        </form>
        patient id, patient name, age address, date of admission, doctor’s name, covid 
result(+ve/-ve)
    </div>
    <?php
        if(isset($_POST['submit'])){
            $patient_id = $_POST['patient_id'];
            $patient_name= $_POST['patient_name'];
            $age = $_POST['age'];
            $address= $_POST['address'];
            $admited_date = $_POST['admitted_date'];
            $dr_name= $_POST['dr_name'];
            $covid_result = $_POST['covid_result'];
            $user = $_POST['uname'];
            $pass = $_POST['pass'];
            $rows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM freg WHERE user='$user' and pass='$pass'"));
            if($rows<=0){
                mysqli_query($conn,"INSERT INTO reg VALUES('$patient_id','$patien_name','$age','$address','$admitted_date','$dr_name','$covid_result','$user','$pass')");
                echo "<script>alert(\"Successfully Registered\");</script>";
            }else{
                echo "<script>alert(\"Already Registered\");</script>";
            }
        }
    ?>
   
</body>
</html