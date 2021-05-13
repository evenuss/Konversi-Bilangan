<?php

$userN = $_POST['username'];
$passW = $_POST['password'];
$userlist = file ('file/users.txt');

$email = "";
$company = "";

$success = false;
foreach ($userlist as $user) {
    $user_details = explode('|', $user);
    if ($user_details[0] == $userN && $user_details[1] == $passW) {
        $success = true;
        // $email = $user_details[2];
        // $nickname = $user_details[3];
        break;
    }
}

   


// Example dummy data
// pete|petepass|pete@somesite.com|Pete Enterprizes
// john|johnpass|john@somedomain.com|John Corporation


if ($success) {
    session_start();
    $text = $userN . "|" . $passW . "|" . time() . "\n";
    $fp = fopen('file/data.txt', 'a+');
    if(fwrite($fp, $text))  {
        echo 'saved';

    }
    fclose ($fp); 
    $_SESSION['username']=$userN;
    echo "<br> Hi $userN you have been logged in. <br>";
    header("Location: home.php");
} else {
    echo "<script>alert('You have entered the wrong username or password. Please try again.');window.location.href='index.php';</script>";
}


?>