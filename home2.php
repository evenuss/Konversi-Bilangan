<?php
include ('function2.php');
error_reporting(0);
session_start();
if  (!isset($_SESSION['username'])){
    echo "<script>alert('You must Login!!');window.location.href='index.php';</script>'";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body style>
    <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="home2.php">Upload</a></li>
        <li style="float:right"><a href="logout.php">Keluar</a></li>
    </ul>
        

<form name="Calc" method="post" action="home2.php" enctype="multipart/form-data"> 
<TABLE align="center" border=2> 
    <h3>Hello, <?= $_SESSION['username']?>!</h3>

<TR> 
<TD>
<h1>Calculator</h1>
<br>
<input type="file" id="input" name="Input" Size="16"><br>

<?php







$file = $_FILES['file']['tmp_name'];

echo $file;

if(isset($_POST['submit']) && $_POST['convert']=="desimalkebiner"){
?>
<input type="text" name="output" id="input" value="<?= decToBinary($_FILES['file']['tmp_name']) ?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="binerkedesimal")
{
    
?>
    <input type="text" name="output" id="input" value="<?= binToDec($file) ?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="binerkeoktal")
{
?>
    <input type="text" name="output" id="input" value="<?= binToOct($file) ?>"  disabled>

<?php
}
elseif (isset($_POST['submit']) && $_POST['convert']=="oktalkebiner")
{
?>
    <input type="text" name="output" id="input" value="<?= OctToBin($file) ?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="heksakebiner")
{
?>
    <input type="text" name="output" id="input" value="<?=HexToBin($file)?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="oktalkedesimal")
{
?>
    <input type="text" name="output" id="input" value="<?= ocToDec($file) ?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="desimalkeoktal")
{
?>
    <input type="text" name="output" id="input" value="<?= desToOct($file) ?>" disabled>
<?php
}


elseif (isset($_POST['submit']) && $_POST['convert']=="desimalkeheksa")
{
?>
    <input type="text" name="output" id="input" value="<?=decToHexa($file)?>" disabled>

<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="heksakedesimal")
{
?>
    <input type="text" name="output" id="input" value="<?= hexToDes($input,$file) ?>"  disabled>

<?php
}
else{
    echo "kosong";
}

?>


<br> 
</TD> 
</TR> 
<TR> 
<TD>  
<input type="submit" name="submit" value="post">
<br>

<select name="convert" id="">
    <option value="null">---- Pilih Konversi ----</option>
    <option value="binerkedesimal">Biner => Desimal @</option>
    <option value="desimalkebiner">Desimal => Biner @</option>
    <option value="oktalkebiner">Oktal => Biner@</option>
    <option value="heksakebiner">Heksa => Biner @</option>
    <option value="oktalkedesimal">Oktal => Desimal@</option>
    <option value="desimalkeoktal">Desimal => Oktal @</option>
    <option value="desimalkeheksa">Desimal => Heksa @</option>
    <option value="heksakedesimal">Heksa => Desimal @</option>
</select><br>



<br>
</TD> 
</TR> 
</TABLE> 
</form> 








</body>
</html>