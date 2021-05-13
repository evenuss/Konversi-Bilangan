<?php
include ('function.php');
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
        

<form name="Calc" method="post" action="home.php" enctype="multipart/form-data"> 
<TABLE align="center" border=2> 
    <h3>Hello, <?= $_SESSION['username']?>!</h3>

<TR> 
<TD>
<h1>Calculator</h1>
<br>
<input type="text" id="input" name="Input" Size="16"><br>

<?php







$input=$_POST['Input'];    
$file = $_FILES['file']['tmp_name'];

if(isset($_POST['submit']) && $_POST['convert']=="desimalkebiner"){
?>
<input type="textarea" name="output" id="input" value="<?= decToBinary($input) ?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="binerkedesimal")
{

?>
    <input type="textarea" name="output" id="input" value="<?= binToDec($input) ?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="binerkeoktal")
{
?>
    <input type="textarea" name="output" id="input" value="<?= binToOct($input) ?>"  disabled>

<?php
}
elseif (isset($_POST['submit']) && $_POST['convert']=="oktalkebiner")
{
?>
    <input type="textarea" name="output" id="input" value="<?= OctToBin($input) ?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="")
{
    echo "<input type=\"text\" name=\"output\" value=\"$hasil\" Size=\"16\" disabled>";
}

elseif (isset($_POST['submit']) && $_POST['convert']=="heksakebiner")
{
?>
    <input type="textarea" name="output" id="input" value="<?=HexToBin($input)?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="oktalkedesimal")
{
?>
    <input type="textarea" name="output" id="input" value="<?= ocToDec($input) ?>"  disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="desimalkeoktal")
{
?>
    <input type="textarea" name="output" id="input" value="<?= desToOct($input) ?>" disabled>
<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="")
{
    // echo "<input type="textarea" name="output" id="input" value="$hasil"  disabled>";
}

elseif (isset($_POST['submit']) && $_POST['convert']=="")
{
    // echo "<input type="textarea" name="output" id="input" value="$hasil"  disabled>";

}

elseif (isset($_POST['submit']) && $_POST['convert']=="desimalkeheksa")
{
?>
    <input type="textarea" name="output" id="input" value="<?=decToHexa($input)?>" disabled>

<?php
}

elseif (isset($_POST['submit']) && $_POST['convert']=="heksakedesimal")
{
?>
    <input type="textarea" name="output" id="input" value="<?= hexToDes($input) ?>"  disabled>

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
<input type="button" name="one" value=" 1 " OnClick="Calc.Input.value += '1'"> 
<input type="button" name="two" value=" 2 " OnCLick="Calc.Input.value += '2'"> 
<input type="button" name="three" value=" 3 " OnClick="Calc.Input.value += '3'"> <br> 
<input type="button" name="four" value=" 4 " OnClick="Calc.Input.value += '4'"> 
<input type="button" name="five" value=" 5 " OnCLick="Calc.Input.value += '5'"> 
<input type="button" name="six" value=" 6 " OnClick="Calc.Input.value += '6'">  <br> 
<input type="button" name="seven" value=" 7 " OnClick="Calc.Input.value += '7'"> 
<input type="button" name="eight" value=" 8 " OnCLick="Calc.Input.value += '8'"> 
<input type="button" name="nine" value=" 9 " OnClick="Calc.Input.value += '9'">  <br> 
<input type="button" name="clear" value=" c " OnClick="Calc.Input.value = ''"> 
<input type="button" name="zero" value=" 0 " OnClick="Calc.Input.value += '0'">  
<input type="submit" name="submit" value="post">
<br>

<select name="convert" id="">
    <option value="null">---- Pilih Konversi ----</option>
    <option value="binerkedesimal">Biner => Desimal @</option>
    <option value="desimalkebiner">Desimal => Biner @</option>
    <option value="oktalkebiner">Oktal => Biner @</option>
    <option value="heksakebiner">Heksa => Biner @</option>
    <option value="oktalkedesimal">Oktal => Desimal @</option>
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