<?php
session_start();
include('config.php');
$jdata=json_decode($_POST['temdata']);

$email = $_SESSION['alogin'];
$plevel = $_SESSION['plevel'];
//echo "<script>alert('$plevel'); </script>";
//echo "<script>alert('$email'); </script>";
$sql ="SELECT * FROM `levels` WHERE `level`=:userlevel";
$query= $dbh -> prepare($sql);
$query-> bindParam(':userlevel', $plevel, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$corans = $results[0]->answer;
if( $corans === $jdata)
{
 $date = date_default_timezone_set('Asia/Kolkata');
$today = date("F j, Y, g:i sa T");
 if ($newplevel<= 16){
    $sql ="UPDATE `teamlevel` SET `level` = :newlevel, `finishtime` = :completedtime WHERE `username`= :email;";
    if ( ! $sql ) {
        print_r( $dbh->errorInfo() );
    }

    $query= $dbh -> prepare($sql);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':newlevel', $newplevel, PDO::PARAM_STR);
     $query-> bindParam(':completedtime', $today, PDO::PARAM_STR);
    $check = $query-> execute();
    $lastInsertId = $dbh->lastInsertId();
    if($check)
    {
        
        echo "Woah! You got that right! Continue Cracking";
    }
    else
    {
        print_r( $query->errorInfo() );
    echo "Something went wrong. Please fill and try again";
    }
 }

}

else {
    echo "Oops..Wrong answer..Try again!";
    return;
}



?>
