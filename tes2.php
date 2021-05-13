<?php
if(isset($_POST['submit'])){//apakah data tersubmit
$nama=$_REQUEST['nama'];
    if(isset($_POST['gender'])){
        $gender=$_REQUEST['gender'];
    }
    else{
        $gender='';
    }
$cek='';

}
else{
    $nama='';
    $gender='';
    $cek='Login dahulu sebelum anda masuk kedalam area Konversi!!! :)';
}
?>
2.  Masukkan coding ini dibawah tag <body>
<?php echo $cek ?></h1>
<fieldset>
            <legend>Form Login</legend>
<br>
        <form action="inti.php" method="post" name="form1">
            <p>
<h3 class='b'>
Nama : <input class='klik' placeholder="Masukkan Nama" required="required" type="text" name="nama" size ="30" value="<?php echo $nama ?>"/></h3>
</p>
<p>
<h3 class='b'>
Apa Jenis Kelamin anda? <br>
                <input type="radio" name="gender" value="L"
                               <?php ($gender=="L")? print 'checked=""' : print ''; ?>/>
                Laki-Laki<br>
                <input type="radio" name="gender" value="P"
                       <?php ($gender=="P")? print 'checked=""' : print ''; ?>/>
                Perempuan
            </h3>
</p>
<input type="submit" name="submit" value="Login">
        </form>
</fieldset>

3. Buat file baru dengan nama "inti.php" letakkan coding ini diatas tag<html>
<?php
if(isset($_POST['submit1'])){
$decimal=$_REQUEST['decimal'];
    if(isset($_POST['pilih'])){
        $pilih=$_REQUEST['pilih'];
    }
    else{
        $pilih='';
    }
}
else{
    $decimal='';
    $pilih='';
}
?>
4. Letakkan coding ini bawah tag <body>
Zona Konversi Bilangan</h2>
<table border="0" align ="center">
<tr>
    <td align ="center">
    <!-- Proses Pilih Gender dari file validator.php -->
    <?php
        if(isset ($_POST['submit'])){
            $nama=$_REQUEST['nama'];
            if(isset($_POST['gender'])){
                $gender=$_REQUEST['gender'];
            }
            else{
                $gender='';
            }
        }
        if(isset ($_POST['submit'])){
        if($nama==''|| $gender==''){
            echo"<script>
                 alert('Maaf data yang anda masukkan kurang lengkap ? Isi Nama dan Jenis Kelamin terlebih dahulu');
                 document.location.href='validator.php';
                 </script>";
        }
        else{
            //cek jenis kelamin
            if($gender=='L'){
                echo"<br>
Selamat Datang gan, $nama !!</h1>
";
               
            }
            else{
                echo"<br>
Selamat Datang sis, $nama !!</h1>
";
            }
        }
        }
    ?>
    <!-- End Proses Pilih Gender dari file validator.php -->
    </td>
    </tr>
</table>
<fieldset>
           
    <table border="0" align ="center" >
<tr>
    <td align ="center">
    <p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
"
          method="POST" name="form1">
        <h2>
 Tuliskan nilai bilangan Desimal nya : </h2>
<input class='klik' placeholder="Isikan dengan Bilangan Desimal" required="required" type="text" name="decimal" size ="28" value="<?php echo $decimal ?>"/><br>
        <h2>
 Pilih salah satu Konversi : <br>
        <input type="radio" name="pilih" value="B"
               <?php ($pilih=="B")? print 'checked=""' : print ''; ?>/>
        Biner<br>
        <input type="radio" name="pilih" value="H"
               <?php ($pilih=="H")? print 'checked=""' : print ''; ?>/>
        Hexa<br>
         <input type="radio" name="pilih" value="O"
               <?php ($pilih=="O")? print 'checked=""' : print ''; ?>/>
        Oktal<br>
        </h2>
<center>
<input type="submit" class="tombol" name="submit1" value="Convert"><br>
<center>

    </form>
    <!-- Proses Konversi -->
        <?php
        if(isset($_POST['submit1'])){//apakah data tersebut tersubmit
        $decimal=$_REQUEST['decimal'];
            if(isset($_POST['pilih'])){
                $pilih=$_REQUEST['pilih'];
            }  
            else{
                $pilih='';
            }
        }
        else{
            $decimal='';
            $pilih='';
        }
        if(isset ($_POST['submit1'])){
        if($decimal==''|| $pilih==''){
            echo"<script>alert('Maaf anda kurang dalam melakukan prosedur pengisian data! Isi nilai Desimal dan pilih ke Biner, Hexa mupun Oktal terus tekan Convert !!')</script>";
        }
        else{
            if($pilih=='B'){
            //Konversi ke Biner
            if (isset($_POST['decimal'])) {
                $decimal = $_POST['decimal'];
                $original = $_POST['decimal'];
                $binary = '';
                if (preg_match('/[^0-9]/',$decimal)) {
                        die ("Maaf. Yang anda masukkan salah, yang betul isian adalah angka...!!!");
                }
                else {
                    while ($decimal > 0) {
                        if ($decimal%2 == 0) {
                            $binary .= 0;
                            $decimal /= 2;
                        }
                        else {
                            $binary .= 1;
                            $decimal = ($decimal/2)-0.5;
                        }
                    }
                    $result = strrev($binary);
                    echo "<br><h2>
Bilangan desimal $original. Jika dijadikan Biner hasilnya adalah $result.</h2>
";
                    }
                }
                else {

                }
            }
            else{
                    if($pilih=='H'){
                    //Konversi ke Hexa
    $self = $_SERVER['PHP_SELF'];
       if(isset($_POST['decimal'])){//apakah data tersebut tersubmit
          $des = $_POST['decimal'];
          $original = $_POST['decimal'];
          $hex='';
            if(preg_match('/[^0-9]/',$des)){//memastikan inputan bukan char ataupun huruf melainkan angka, kalau perlu ditambahi regex biar lebih valid.
                die("Maaf yang anda masukkan salah, mohon masukkan angka..");
  }
        else {
          while($des>0){
               $hasil=$des%16;
switch($hasil){
          case 0: $hex.="0"; break;
          case 1: $hex.="1"; break;
          case 2: $hex.="2"; break;
          case 3: $hex.="3"; break;
          case 4: $hex.="4"; break;
          case 5: $hex.="5"; break;
          case 6: $hex.="6"; break;
          case 7: $hex.="7"; break;
          case 8: $hex.="8"; break;
          case 9: $hex.="9"; break;
          case 10: $hex.="A"; break;
          case 11: $hex.="B"; break;
          case 12: $hex.="C"; break;
          case 13: $hex.="D"; break;
          case 14: $hex.="E"; break;
          case 15: $hex.="F";
          default:break;
}
      if($des/16==0){
         $sisa=($des%16);
         $des=$sisa;
}
     else if ($des/16 >= 16) {
          $sisa = ($des/16);
          $des = $sisa;
}
else{
    $sisa=($des/16);
    $des=$sisa%16;
}
}
       }
     $result = strrev($hex);
                                    echo "<br><h2>
Bilangan desimal $original. Jika dijadikan Hexadecimal hasilnya adalah $result.</h2>
";
                        }
                    }
                    else{
                        //Konversi ke Oktal
                         if(isset($_POST['decimal'])){
                         $des=$_POST['decimal'];
                         $original=$_POST['decimal'];
                         $octal='';
                         while ($des>0){
                         $hasil=$des%8;
                         switch($hasil){
                         case 0 : $octal.="0"; break;
                         case 1 : $octal.="1"; break;
                         case 2 : $octal.="2"; break;
                         case 3 : $octal.="3"; break;
                         case 4 : $octal.="4"; break;
                         case 5 : $octal.="5"; break;
                         case 6 : $octal.="6"; break;
                         case 7 : $octal.="7";
                         default:break;
                         }
                         if($des/8>0){
                            $sisa=($des/8);
                            $des=$sisa%8;
                            }
                            else{
                            $sisa=($des%8);
                            $des=$sisa;
                            }}
                            $result = strrev($octal);
                            echo "<br><h2>
Bilangan desimal $original. Jika dijadikan Oktal hasilnya adalah $result.</h2>
";
                            }
                            else{

                            }
                    }
            }
        }
        }
        echo "<br><center>
<div class='tombol'><a href='validator.php'>RESET</a></div></center>

<br>";
        ?>
    <!-- End proses Konversi -->
    </td>
    </tr>
</table>
</fieldset>