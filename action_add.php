<center>
<?php
session_start();
include("config.php");
include("firebaseRdb.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("pirates",[
    "name" => $_POST['name'],
    "bounty" => $_POST['bounty'],
    "power" => $_POST['power'],
    "imageurl" => $_POST['picture']
]);


if($insert){
    $_SESSION['status'] ="Record successfully added";
    header('Location: index.php');
}
else{
    $_SESSION['status'] ="Error: Record not added, please try again...";
    header('Location: index.php');

}

?>
</center>