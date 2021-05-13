<?php



function decToBinary($n)
{
    $filess = file_get_contents($n,'r');
    $files = explode('\n', $filess);
    foreach($files as $data)
    {
        // array to store
        // binary number
        // $binaryNum;
    
        // // counter for binary array
        // $i = 0;
        
        // while ($data > 0)
        // {
    
        //     // storing remainder
        //     // in binary array
        //     $binaryNum[$i] = $data % 2;
        //     $data = (int)($data / 2);
        //     $i++;
        // }
    
        // // printing binary array
        // // in reverse order
        // for ($j = $i - 1; $j >= 0; $j--)
        //     echo $binaryNum[$j];
        echo $data;

    }
}


function binToDec($str) {
    echo $str['tmp_name'];


    $digits = str_split($str);
    $reversed = array_reverse($digits);
    $res = 0;

    for($x=0; $x < count($reversed); $x++) {
        if($reversed[$x] == 1) {
            $res += pow(2, $x);
        }
    }

    return $res;
}


function decToHexa($n)
{
    // char array to store
    // hexadecimal number
    $hexaDeciNum;
     
    // counter for hexadecimal
    // number array
    $i = 0;
    while($n != 0)
    {
        // temporary variable
        // to store remainder
        $temp = 0;
         
        // storing remainder
        // in temp variable.
        $temp = $n % 16;
         
        // check if temp < 10
        if($temp < 10)
        {
            $hexaDeciNum[$i] = chr($temp + 48);
            $i++;
        }
        else
        {
            $hexaDeciNum[$i] = chr($temp + 55);
            $i++;
        }
         
        $n = (int)($n / 16);
    }
     
    // printing hexadecimal number
    // array in reverse order
    for($j = $i - 1; $j >= 0; $j--)
        echo $hexaDeciNum[$j];
}



function HexToBin($n)

{
    $i = 0;
    error_reporting(0);    
    while ($n[$i])
    {
        switch ($n[$i])
        {
        case '0':
            echo "0000";
            break;
        case '1':
            echo "0001";
            break;
        case '2':
            echo "0010";
            break;
        case '3':
            echo "0011";
            break;
        case '4':
            echo "0100";
            break;
        case '5':
            echo "0101";
            break;
        case '6':
            echo "0110";
            break;
        case '7':
            echo "0111";
            break;
        case '8':
            echo "1000";
            break;
        case '9':
            echo "1001";
            break;
        case 'A':
        case 'a':
            echo "1010";
            break;
        case 'B':
        case 'b':
            echo "1011";
            break;
        case 'C':
        case 'c':
            echo "1100";
            break;
        case 'D':
        case 'd':
            echo "1101";
            break;
        case 'E':
        case 'e':
            echo "1110";
            break;
        case 'F':
        case 'f':
            echo "1111";
            break;
        default:
            echo "\nInvalid hexadecimal digit ". $n[$i];
        }
        $i++;
    }
}

function desToOct($n){
    error_reporting(0);    
    //Konversi ke Oktal
    $oct;
    while ($n > 0) {
        $hasil = $n % 8;
        switch ($hasil) {
            case 0 : $oct .="0";
                break;
            case 1 : $oct .="1";
                break;
            case 2 : $oct .="2";
                break;
            case 3 : $oct .="3";
                break;
            case 4 : $oct .="4";
                break;
            case 5 : $oct .="5";
                break;
            case 6 : $oct .="6";
                break;
            case 7 : $oct .="7";
                break;
            default:break;
        }
        $n=($n-$hasil)/8;
    }
    $result = strrev($oct);
    return $result;
}


function hexToDes($n) {
    $output = 0;
    for ($i=0; $i<strlen($n); $i++) {
        $c = $n[$i]; // you don't need substr to get 1 symbol from string
        if ( ($c >= '0') && ($c <= '9') )
            $output = $output*16 + ord($c) - ord('0'); // two things: 1. multiple by 16 2. convert digit character to integer
        elseif ( ($c >= 'A') && ($c <= 'F') ) // care about upper case
            $output = $output*16 + ord($n[$i]) - ord('A') + 10; // note that we're adding 10
        elseif ( ($c >= 'a') && ($c <= 'f') ) // care about lower case
            $output = $output*16 + ord($c) - ord('a') + 10;
    }

    return $output;
}


function OctToBin($n)
{
    $i = 0;
  
    $binary = (string)"";
  
    while ($i != strlen($n))
    {
        switch ($n[$i])
        {
        case '0':
            $binary.= "000";
            break;
        case '1':
            $binary .= "001";
            break;
        case '2':
            $binary .= "010";
            break;
        case '3':
            $binary .= "011";
            break;
        case '4':
            $binary .= "100";
            break;
        case '5':
            $binary .= "101";
            break;
        case '6':
            $binary .= "110";
            break;
        case '7':
            $binary .= "111";
            break;
        default:
            echo("\nInvalid Octal Digit ". 
                             $n[$i]);
            break;
        }
        $i++;
    }
    return $binary;
} 


function ocToDec($n)
{
     
    $num = $n;
    $dec_value = 0;
 
    // Initializing base value
    // to 1, i.e 8^0
    $base = 1;
 
    $temp = $num;
    while ($temp)
    {
 
        // Extracting last digit
        $last_digit = $temp % 10;
        $temp = $temp / 10;
 
        // Multiplying last digit
        // with appropriate base
        // value and adding it
        // to dec_value
        $dec_value += $last_digit * $base;
 
        $base = $base * 8;
    }
 
    return $dec_value;
}



function binToOct($n){
    $decimal = $n;
    $original = $n;
    $oktal='';
    if (preg_match('/[^0-9]/',$decimal)) { //memastikan input
        die("Maaf. Inputan salah..");
    }
    else {
        while ($decimal > 0){
        $result=$decimal%8;
        switch($result){ //Looping memutuskan apakah 1 atau 0
        case 0: $oktal.="0"; break;
        case 1: $oktal.="1"; break;
        case 2: $oktal.="2"; break;
        case 3: $oktal.="3"; break;
        case 4: $oktal.="4"; break;
        case 5: $oktal.="5"; break;
        case 6: $oktal.="6"; break;
        case 7: $oktal.="7"; break;
        default:break;
        }
            if ($decimal/8==0) {
                $sisa=($decimal%8);
                $decimal=$sisa;
            }
            else {
                $sisa=($decimal/8);
                $decimal=$sisa%8;
            }}
        $result = strrev($oktal);//hasile dibalik
        return $result;
        }  
    
}







//biner oktal
//biner heksa
//oktal hexa
//hexa oktal
?>

